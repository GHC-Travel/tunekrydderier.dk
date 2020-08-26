<div wire:poll x-data="{ visible: false }">
    <button class="inline-flex hover:text-orange" @click="visible = !visible">
        @svg('heroicon-s-shopping-cart', 'w-6 h-6')
        {{ $money($cart->total_cost) }}
    </button>

    <div
        x-show="visible"
        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-leave="translate-x-0"
        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-0 overflow-hidden"
    >
        <div class="absolute inset-0 overflow-hidden">
            <section class="absolute inset-y-0 right-0 pl-10 max-w-full flex sm:pl-16">
                <div class="w-screen max-w-md">
                    <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                        <div class="flex-1 h-0 overflow-y-auto">
                            <header class="space-y-1 py-6 px-4 bg-orange-600 sm:px-6">
                                <div class="flex items-center justify-between space-x-3">
                                    <h2 class="text-lg leading-7 font-medium text-white">
                                        {{ __('Cart') }}
                                    </h2>
                                    <div class="h-7 flex items-center">
                                        <button @click="visible = false" aria-label="{{ __('Close panel') }}"
                                                class="text-orange-200 hover:text-white transition ease-in-out duration-150">
                                            @svg('heroicon-s-x', 'h-6 w-6')
                                        </button>
                                    </div>
                                </div>
                            </header>

                            <div class="flex-1 flex flex-col justify-between">
                                <ul class="divide-y divide-gray-200 overflow-y-auto">
                                    @foreach($cart->items as $item)
                                        <li class="px-6 py-5 relative"
                                            data-tippy-content="{{ __(':stock remaining', ['stock' => $item->product->stock]) }}"
                                        >
                                            <div class="group flex justify-between items-center space-x-4">
                                                <a href="#" class="-m-1 p-1 block">
                                                    <span class="absolute inset-0 group-hover:bg-gray-50"></span>
                                                    <div class="flex-1 flex items-center min-w-0 relative">
                                            <span class="flex-shrink-0 inline-block relative">
                                              <img class="h-10 w-10 rounded-full" src="{{ $item->product->photo_url }}"
                                                   alt="{{ __('Photo of :productName', ['productName' => $item->product->name]) }}">
                                              <span
                                                  class="absolute top-0 right-0 block h-2.5 w-2.5 rounded-full {{ (new App\Enums\ProductStock($item->product->stock))->css() }}"></span>
                                            </span>
                                                        <div class="ml-4 truncate">
                                                            <div
                                                                class="text-sm leading-5 font-medium text-gray-900 truncate">{{ $item->product->name }}</div>
                                                            <div
                                                                class="text-sm leading-5 text-gray-500 truncate">{{ $money($item->cost) }}</div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="-m-1 p-1 block text-left">
                                                    <div class="h-10 w-32">
                                                        <div
                                                            class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                            <button wire:click="removeFromCart({{ $item->product_id }})"
                                                                    class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                                <span class="m-auto text-2xl font-thin">−</span>
                                                            </button>

                                                            <input id="item_{{ $item->id }}_quantity"
                                                                   value="{{ $item->quantity }}"
                                                                   class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black md:text-base cursor-default flex items-center text-gray-700 outline-none"
                                                            />

                                                            <button
                                                                {{ $item->product->stock <= 1 ? 'disabled' : null }} wire:click="addToCart({{ $item->product_id }})"
                                                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r {{ $item->product->stock <= 1 ? 'cursor-not-allowed' : 'cursor-pointer' }}">
                                                                <span class="m-auto text-2xl font-thin">+</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="flex-shrink-0 px-4 py-4 space-x-4 flex justify-end">
                                <span class="inline-flex shadow-sm border-2 border-green-600 hover:bg-green-600 group">
                                  <a href="{{ route('cart.checkout') }}"
                                     type="button"
                                     class="inline-flex items-center px-6 py-3 text-base leading-6 font-medium text-green-700 bg-white hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline-blue active:text-green-800 active:bg-green-50 transition ease-in-out duration-150">
                                        {{ __('Checkout') }}
                                  </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
