@php($deliveryAddress = App\DeliveryProviderAddress::findOrFail($selected))

<span wire:click="$toggle('visible')" class="inline-block w-full">
    <button
        type="button" 
        aria-haspopup="listbox" 
        aria-expanded="true"
        aria-labelledby="listbox-label" 
        class="cursor-default relative w-full pl-10 pr-10 py-2 text-left bg-transparent border-none sm:text-sm sm:leading-5"
    >
        <span class="space-x-2 w-full">
            <div class="text-sm leading-5 font-medium text-orange-600 group-hover:text-white truncate">{{ $deliveryAddress->name }}</div>
            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 group-hover:text-gray-200">
                @svg('heroicon-s-map', 'flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400 group-hover:text-gray-100')

                <span class="truncate">{{ $deliveryAddress->address }}</span>
            </div>
        </span>
        
        <span class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            @svg('heroicon-s-check', 'h-5 w-5 text-orange-600')
        </span>
    </button>
</span>