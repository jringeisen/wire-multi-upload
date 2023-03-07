<div class="p-4">
    <h3>We don't have a timezone on record for you. Please choose a timezone to use this feature</h3>
    <div class="relative">
        <label for="email" class="block text-sm font-medium text-gray-700 sr-only">Search timezones</label>
        <div class="mt-1 flex rounded-md shadow-sm">
            <div class="relative flex flex-grow items-stretch focus-within:z-10">
                <input
                    wire:model.debounce.500ms="search"
                    type="text" name="search" id="search"
                    class="block w-full rounded-none rounded-l-md border-gray-300 focus:border-slate-gray focus:ring-slate-gray sm:text-sm"
                    placeholder="Search timezones..."
                    autocomplete="off">
            </div>
            <button
                wire:click="update"
                type="button"
                class="relative -ml-px inline-flex items-center space-x-2 rounded-r-md border border-slate-gray bg-blue-400 px-4 py-2 text-sm font-medium text-white">
                <span>Update</span>
            </button>
        </div>

        @error('search') <span class="text-xs text-red-600 absolute">{{ $message }}</span> @enderror

        @if ($timezones->count())
        <ul class="absolute bg-white shadow-lg max-h-96 overflow-auto rounded-lg mt-2 border border-gray-300 w-full">
            @foreach ($timezones as $timezone)
            <li wire:click="timezoneSelected({{$timezone->id}})" class="px-2 py-2 cursor-pointer first:rounded-t-lg last:rounded-b-lg hover:bg-gray-100">{{ $timezone->label }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
