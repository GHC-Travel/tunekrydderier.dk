<div class="px-4 py-5 sm:px-6">
    @if($showProductOutOfStockAlert)
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 text-orange-600">
                        {{ __('A Product has gone out of stock.') }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    <div
        class="bg-gray-50 -ml-4 -mt-2 flex justify-around flex-wrap sm:flex-no-wrap px-4 py-5 sm:px-6 border-b border-gray-200">
        <div class="w-full max-w-xl ml-4 mt-2 flex-shrink-0">
            <div class="relative flex-grow focus-within:z-10">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-products-none">
                    @svg('heroicon-s-selector', 'text-orange-600 w-6 h-6')
                </div>

                @livewire('search-select', [
                'options' => $categories
                ])
            </div>
        </div>

        <div class="w-full max-w-xl ml-4 mt-2 flex-shrink-0">
            <div class="relative flex-grow focus-within:z-10 border-b border-orange-600">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-products-none">
                    @svg('heroicon-s-search', 'text-orange-600 w-6 h-6')
                </div>
                <input wire:model.lazy="search"
                    class="form-input block w-full border-none text-orange-600 bg-transparent pt-2 pl-10 sm:text-sm sm:leading-5"
                    placeholder="Looking for something special?" />
            </div>
        </div>
    </div>

    {{ $products->links() }}

    <div class="px-4 py-5 sm:px-6">
        <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($products as $product)
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow">
                    <div class="flex-1 flex flex-col p-8">
                        <img class="h-56 w-full object-fill flex-shrink-0 mx-auto bg-gray-50 rounded-full"
                            src="{{ $product->photo_url }}"
                            alt="{{ __('Photo of :product', ['product' => $product->name]) }}">
                        <h3 class="mt-6 text-gray-900 text-sm leading-5 font-medium">
                            {{ $product->name }}
                        </h3>
                        <dl class="mt-1 flex-grow flex flex-col justify-between">
                            <dt class="sr-only">{{ __('Stock') }}</dt>
                            <dd data-tippy-content="{{ __('We have :stock left of :product.', ['stock' => $product->stock, 'product' => $product->name]) }}"
                                class="text-gray-500 text-sm leading-5 flex">
                                @svg('heroicon-s-collection', 'text-gray-300 h-5 w-5')
                                {{ $product->stock }}
                            </dd>
                            <dt class="sr-only">{{ __('Price') }}</dt>
                            <dd class="mt-3">
                                <span
                                    class="px-2 py-1 text-teal-800 text-xs leading-4 font-medium bg-teal-100 rounded-full flex">
                                    @svg('heroicon-s-tag', 'h-5 w-5 text-orange-600')
                                    {{ $money($product->latestPrice->amount) }}
                                </span>
                            </dd>
                        </dl>
                    </div>
                    <div class="border-t border-gray-200">
                        <div class="-mt-px flex">
                            <div class="w-0 flex-1 flex border-2 border-green-500 hover:bg-green-500 group">
                                <a wire:click="addToCart({{ $product->id }})" href="#"
                                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-br-lg group-hover:text-white focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                    @svg('heroicon-s-shopping-cart', 'w-5 h-5 text-orange-600 group-hover:text-white')
                                    <span class="ml-3">{{ __('Buy') }}</span>
                                </a>
                            </div>

                            <div class="-ml-px w-0 flex-1 flex">
                                <a href="{{ route('products.show', $product) }}"
                                    class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm leading-5 text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                                    @svg('heroicon-s-information-circle', 'w-5 h-5 text-teal-400')
                                    <span class="ml-3">{{ __('Details') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
