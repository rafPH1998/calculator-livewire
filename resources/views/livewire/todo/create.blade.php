<div>
    <input class="p-8 text-white 
        text-3x1 bg-gray-800 w-full 
        focus:outline-none focus:border-0" 
        wire:model.defer="title"
        wire:keydown.enter="save"
    >
    @error('title')
        <div class="text-red-500 bg-red-100 opacity-40 p-8 text-3xl tracking-wide">
            {{ $message }}
        </div>
    @enderror
</div>
