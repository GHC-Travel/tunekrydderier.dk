<select 
    {{ $attributes}}
    class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
    autocomplete="off"
>
    {{ $slot }}
</select>