<li role="option"
    class="text-orange-600 cursor-default select-none relative py-2 pl-3 pr-9 group hover:bg-orange-600 hover:text-white"
    wire:click="$set('selected', '{{ $selected === $option->id ? null : $option->id }}')">
    <div class="space-x-2">
        <div class="text-sm leading-5 font-medium text-orange-600 group-hover:text-white truncate">{{ $option->name }}</div>
        <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 group-hover:text-gray-200">
            @svg('heroicon-s-map', 'flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400 group-hover:text-gray-100')

            <span class="truncate">{{ $option->address }}</span>
        </div>
    </div>

    @if ($selected === $option->id)
        <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-white">
            @svg('heroicon-s-check-circle', 'h-5 w-5 text-orange-600 group-hover:text-white')
        </span>
    @endif
</li>