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
                <div
                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="address_type"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Address type') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg border-b border-orange-600">
                            <select wire:model="addressType"
                                    id="address_type"
                                    class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                                    autocomplete="off"
                            >
                                @foreach($addressTypes as $addressType => $value)
                                    <option value="{{ $value }}">{{ $addressType }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <div
                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="full_name" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Full name') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex border-b border-orange-600">
                            <input wire:model="fullName"
                                   id="full_name"
                                   autocomplete="name"
                                   aria-autocomplete="both"
                                   class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                            >
                        </div>
                    </div>
                </div>

                <div
                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="street_address"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Street address') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg border-b border-orange-600">
                            <input wire:model="streetAddress"
                                   id="street_address"
                                   autocomplete="street-address"
                                   aria-autocomplete="both"
                                   class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none">
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="zipCode"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Zip Code') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg border-b border-orange-600">
                            <input wire:model="zip"
                                   id="zipCode"
                                   autocomplete="postal-code"
                                   aria-autocomplete="both"
                                   type="number"
                                   class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                            >
                        </div>
                    </div>
                </div>

                <div
                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="city"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('City') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg border-b border-orange-600">
                            <input wire:model="city"
                                   id="city"
                                   autocomplete="city"
                                   aria-autocomplete="both"
                                   class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                                   list="cities"
                            >

                            <datalist id="cities">
                                @foreach($cities as $city)
                                    <option value="{{ $city->city }}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                </div>

                <div
                    class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="country"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Country') }}
                    </label>
                    <div class="max-w-lg mt-1 sm:mt-0 sm:col-span-2 border-b border-orange-600">
                        <select wire:model="country"
                                id="country"
                                class="block form-select w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                                autocomplete="off"
                        >
                            @foreach($countries as $name => $alpha3)
                                <option value="{{ $alpha3 }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="phone"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Phone') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg border-b border-orange-600">
                            <input wire:model="phone"
                                   id="phone"
                                   autocomplete="tel"
                                   aria-autocomplete="both"
                                   type="text"
                                   class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                            >
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="email"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('E-Mail') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg border-b border-orange-600">
                            <input wire:model="email"
                                   id="email"
                                   autocomplete="email"
                                   aria-autocomplete="both"
                                   type="email"
                                   class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                            >
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="email_confirmation"
                           class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Confirm E-Mail') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg border-b border-orange-600">
                            <input wire:model="emailConfirmation"
                                   id="email_confirmation"
                                   autocomplete="email"
                                   aria-autocomplete="both"
                                   type="email"
                                   class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 bg-transparent border-none"
                                   placeholder="{{ __('Repeat E-Mail') }}"
                            >
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
                    <label for="message" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
                        {{ __('Message to the vendor') }}
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex border-b border-orange-600">
                            <textarea id="message" rows="3"
                                      class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 border-none bg-transparent"></textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">{{ __('Anything we should be aware of when handling your purchase?') }}</p>
                    </div>
                </div>
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
                            wire:model="deliveryProviderId"
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
