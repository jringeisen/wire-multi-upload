<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImageUploader extends Component
{
    use WithFileUploads;

    public int $chunkSize = 5_000_000; // 2mb;
    public int $max_uploads = 10;
    public array $uploads = [];
    public array $images = [];
    public string $error = '';

    public function render()
    {
        return view('livewire.image-uploader');
    }

    public function removeUpload($index)
    {
        unset($this->uploads[$index]);
    }

    public function updatedUploads($value, $key)
    {
        list($index, $attribute) = explode('.',$key);

        if ($attribute === 'fileChunk' ) {
            $fileDetails = $this->uploads[intval($index)];

            // Final File
            $fileName  = $fileDetails['fileName'];
            $finalPath = Storage::path('/livewire-tmp/'.$fileName);

            // Chunk File
            $chunkName = $fileDetails['fileChunk']->getFileName();
            $chunkPath = Storage::path('/livewire-tmp/'.$chunkName);
            $chunk      = fopen($chunkPath, 'rb');
            $buff       = fread($chunk, $this->chunkSize);
            fclose($chunk);

            // Merge Together
            $final = fopen($finalPath, 'ab');
            fwrite($final, $buff);
            fclose($final);
            unlink($chunkPath);

            // Progress
            $curSize = Storage::size('/livewire-tmp/' . $fileName);
            $this->uploads[$index]['progress'] = round($curSize / $fileDetails['fileSize'] * 100);

            if ( $this->uploads[$index]['progress'] == 100 ) {
                array_push($this->images, $this->uploads[$index]['tempUrl']);
                unset($this->uploads[$index]);
            }
        }
    }
}
