<div class="flex justify-between items-center">
    <label class="flex justify-start items-center @if ($todo->checked) opacity-30 @endif">
        <div 
            class="border-2 rounded-full border-purple-700 w-12 h-12 
            flex flex-shrink-0 justify-center items-center mr-2 
            focus-within:border-blue-500
            @if ($todo->checked) bg-yellow-500 @else bg-gray-800 @endif">

            <input type="checkbox" class="opacity-0 absolute" @if ($todo->checked) checked @endif>

            @if ($todo->checked)
                <svg class="fill-current w-6 h-6 text-gray-800 pointer-events-none" viewBox="0 0 20 20">
                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                </svg>
            @endif
        </div>
        <div 
            class="select-none text-3xl text-gray-50 tracking-wider
            @if ($todo->checked) line-through @endif">
            {{ $todo->title }}
        </div>
    </label>

</div>