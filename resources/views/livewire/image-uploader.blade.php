<div class="p-4">
    <label for="drop_zone"
        id="drop_zone_label"
        class="relative block w-full rounded-lg border-2 border-dashed border-gray-300 p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
        @if (!count($uploads))
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="mx-auto h-12 w-12 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>

            <span class="mt-2 block text-sm font-semibold text-gray-900">
                Drag & Drop or Click here to upload images.<br>
                ( Max of 10 images )
            </span>
        @else
            <div class="grid grid-cols-6 gap-2">
                @foreach ($uploads as $i => $upload)
                <div class="space-y-2">
                    <div>
                        <img src="{{ $uploads[$i]['tempUrl'] }}" class="w-full h-40 object-cover rounded-lg" />
                    </div>

                    @if ($uploads[$i]['progress'] !== 100)
                        <div>
                            <div class="flex justify-between">
                                <p class="truncate">{{ $upload['fileName'] }}</p>
                                <p class="font-bold">{{ $uploads[$i]['progress'] }}%</p>
                            </div>
                            @if (isset($upload['error']))
                                <div>
                                    <p class="text-xs text-red-600">{{ $upload['error'] }}</p>
                                </div>
                            @else
                                <div class="w-full bg-gray-200 rounded-full">
                                    <div class="h-3 text-xs leading-none rounded-full bg-gray-800" style="width: {{ $uploads[$i]['progress'] }}%"></div>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
                @endforeach
            </div>
        @endif
    </label>
    <input id="drop_zone" type="file" multiple class="hidden" />
    <span class="text-red-600">{{$error}}</span>

    <div class="mt-12">
        <div class="grid grid-cols-6 gap-2">
            @foreach ($images as $image)
                <div class="space-y-2">
                    <div>
                        <img src="{{ $image }}" class="w-full h-40 object-cover rounded-lg" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
const filesSelector = document.querySelector('#drop_zone');
let chnkStarts=[];

filesSelector.addEventListener('change', () => {
   handleUploads()
});

let dropZoneLabel = document.getElementById('drop_zone_label');

dropZoneLabel.addEventListener('drop', function(e) {
    e.preventDefault();
    e.stopPropagation();
    dropZoneLabel.classList.remove('bg-gray-100');
    filesSelector.files = e.dataTransfer.files;
    handleUploads()
});

dropZoneLabel.addEventListener('dragover', function(e) {
    e.preventDefault();
    e.stopPropagation();
    dropZoneLabel.classList.add('bg-gray-100');
});

dropZoneLabel.addEventListener('dragleave', function(e) {
    e.preventDefault();
    e.stopPropagation();
    dropZoneLabel.classList.remove('bg-gray-100');
});

function handleUploads()
{
    let fileList = [...filesSelector.files];

    // If more than max_uploads, then remove the additional ones and throw an error.
    if (fileList.length > @js($max_uploads)) {
        @this.set('error', 'Only ' + @js($max_uploads) + ' images can be uploaded at a time.');
        fileList.splice(@js($max_uploads + 1));

        setTimeout(() => {
            @this.set('error', '');
        }, 5000);
    }

    fileList.forEach((file, index) => {
        @this.set('uploads.'+index+'.fileName', generateUniqueFileName(file) );
        @this.set('uploads.'+index+'.fileSize', file.size );
        @this.set('uploads.'+index+'.tempUrl', URL.createObjectURL(file) );
        @this.set('uploads.'+index+'.progress', 0 );
        chnkStarts[index] = 0;

        // Can't be larger them 10MB
        if (file.size > 10000000) {
            @this.set('uploads.'+index+'.error', 'File size is too large.');

            setTimeout(() => {
                @this.call('removeUpload', index);
            }, 3000);
        } else {
            // Only allow images
            if (['jpg', 'jpeg', 'png'].includes(file.name.split('.').pop())) {
                livewireUploadChunk( index, file );
            } else {
                @this.set('uploads.'+index+'.error', 'File type is not allowed.');

                setTimeout(() => {
                    @this.call('removeUpload', index);
                }, 3000);
            }
        }
    });
}

function generateUUID()
{
    let d = new Date().getTime();
    const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        const r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
    });
    return uuid;
}

function generateUniqueFileName(file)
{
    const fileExt = file.name.split('.').pop();
    const uniqueFileName = generateUUID() + '.' + fileExt;

    return uniqueFileName;
}

function livewireUploadChunk( index, file ){
    // End of chunk is start + chunkSize OR file size, whichever is greater
    const chunkEnd = Math.min(chnkStarts[index]+@js($chunkSize), file.size);
    const chunk    = file.slice(chnkStarts[index], chunkEnd);

    @this.upload('uploads.'+index+'.fileChunk',chunk,(n)=>{},()=>{},(e)=>{
        if( e.detail.progress == 100 ){
            chnkStarts[index] =
            Math.min( chnkStarts[index] + @js($chunkSize), file.size );

            if( chnkStarts[index] < file.size ){
                livewireUploadChunk(index, file);
            }
        }
    });
}
</script>
