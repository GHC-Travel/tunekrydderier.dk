<div class="{{ $attributes['class'] }} sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
    <label for="{{ $attributes['id'] }}" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
        {{ $label ?? null }}
    </label>
    
    <div class="mt-1 sm:mt-0 sm:col-span-2">
        <div class="max-w-lg border-b border-orange-600">
            {{ $slot }}
        </div>

        @if (isset($helpText))
            <p class="mt-2 text-sm text-gray-500">{{ $helpText }}</p>
        @endif
    </div>
</div>