<form>
    <div>
        <div>
            <div>
                <h3 class="text-lg leading-6 font-medium text-orange-600">
                    {{ __('Your Address') }}
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    {{ __('Tell us where and to whom, to send the items') }}
                </p>
            </div>
            <div class="mt-6 sm:mt-5">
                <x-form-field class="mt-6">
                     <x-slot name='label'>
                          {{ __('Address type') }}
                     </x-slot>
                
                    <x-input.select wire:model.lazy='addressType' autocomplete="off">
                        @foreach($addressTypes as $addressType => $value)
                            <option value="{{ $value }}">{{ $addressType }}</option>
                        @endforeach
                    </x-input.select>
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name='label'>
                    {{ __('Full name') }}
                    </x-slot>
                    
                    <x-input.text
                        wire:model.lazy='fullName' 
                        autocomplete="name"
                        aria-autocomplete="both"
                    />
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('Street Address') }}
                    </x-slot>

                    <x-input.text
                        wire:model.lazy='streetAddress'
                        autocomplete="street-address"
                        aria-autocomplete="both"
                    />
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('Postal') }}
                    </x-slot>

                    <x-input.number
                        wire:model.lazy="zip"
                        id="zipCode"
                        autocomplete="postal-code"
                        aria-autocomplete="both"
                    />
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('City') }}
                    </x-slot>

                    <x-input.text
                        wire:model.lazy="city"
                        id="city"
                        list="cities"
                    >
                        <datalist id="cities">
                            @foreach($cities as $city)
                                <option value="{{ $city->city }}"></option>
                            @endforeach
                        </datalist>
                    </x-input.text>
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('Country') }}
                    </x-slot>

                    <x-input.select
                        wire:model.lazy="country"
                        id="country"
                    >
                        @foreach($countries as $name => $alpha3)
                        <option value="{{ $alpha3 }}">{{ $name }}</option>
                        @endforeach
                    </x-input.select>
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('Phone') }}
                    </x-slot>

                    <x-input.tel
                        wire:model.lazy="phone"
                        id="phone"
                    />
                </x-form-field>


                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('E-Mail') }}
                    </x-slot>

                    <x-input.email
                        wire:model.lazy="email"
                        id="email"
                    />
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('Confirm E-Mail') }}
                    </x-slot>

                    <x-input.email
                        wire:model.lazy="emailConfirmation"
                        id="email_confirmation"
                        placeholder="{{ __('Repeat E-Mail') }}"
                    />
                </x-form-field>

                <x-form-field class="mt-6">
                    <x-slot name="label">
                        {{ __('Message to the vendor') }}
                    </x-slot>

                    <x-input.textarea
                        wire:model.lazy="message"
                        id="message" 
                    />

                    <x-slot name="helpText">
                        {{ __('Anything we should be aware of when handling your purchase?') }}
                    </x-slot>
                </x-form-field>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-200 pt-8 sm:mt-5 sm:pt-10">
            <div>
                <h3 class="text-lg leading-6 font-medium text-orange-600">
                    {{ __('Delivery') }}
                </h3>
                <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    {{ __('Select your preferred method') }}
                </p>
            </div>
            <div class="mt-6 sm:mt-5">
                @foreach ($deliveryProviders as $deliveryProvider)
            <div class="flex items-center {{ $loop->first ? '' : 'mt-4' }}">
                        <input 
                            wire:model.lazy="deliveryProviderId"
                            value="{{ $deliveryProvider->id }}"
                            id="{{ $deliveryProvider->input_id }}" 
                            name="deliveryProvider" 
                            type="radio"
                            class="form-radio h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                        >
                        <label for="{{ $deliveryProvider->input_id }}" class="ml-3">
                        <span class="block text-sm leading-5 font-medium text-gray-700">{{ $deliveryProvider->name }}</span>
                        </label>
                    </div>   
                @endforeach
            </div>

            @if($deliveryProviderAddresses->isNotEmpty())
                <livewire:search-select 
                    :options="$deliveryProviderAddresses"
                    optionView="partials.delivery-address-option"
                    selectedView="partials.delivery-address"
                />
            @endif
        </div>

        <div class="mt-8 border-t border-gray-200 pt-5">
            <div class="flex justify-end">
                <span class="inline-flex rounded-md shadow-sm">
                    <button type="button"
                            class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                    Cancel
                    </button>
                </span>
                <span class="ml-3 inline-flex rounded-md shadow-sm">
                    <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Save
                    </button>
                </span>
            </div>
        </div>
    </div>
</form>
