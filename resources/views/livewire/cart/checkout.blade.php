<div class="bg-white overflow-hidden shadow rounded-md py-4 px-2">
    <div
        class="pb-5 border-b border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ __('Checkout') }}
        </h3>

        <span class="inline-flex shadow-sm border-2 border-green-600 hover:bg-green-600 group">
          <a href="{{ route('cart.checkout.payment') }}"
             type="button"
             class="inline-flex items-center px-6 py-3 text-base leading-6 font-medium text-green-700 bg-white hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline-blue active:text-green-800 active:bg-green-50 transition ease-in-out duration-150">
                {{ __('Go to Payment') }}
          </a>
        </span>
    </div>

    <div class="px-4 py-5 sm:p-6">

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

    </div>

    <div
        class="pb-5 border-t border-gray-200 space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
        <div>
            <p class="leading-3 font-normal text-gray-900">
                {{ __('Pay safely with') }}
            </p>

            <img class="mt-3"
                 src="https://www.bodylab.dk/images/skins/bodylab2015/images/icons/paymentIcons.png"
                 alt="{{ __('Payment icons') }}">
        </div>

        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ $money($cart->total_cost) }}
            </h3>
        </div>
    </div>

    <div class="space-y-3 sm:flex sm:items-center sm:justify-between sm:space-x-4 sm:space-y-0">
        <span class="inline-flex shadow-sm border-2 border-orange-600 hover:bg-orange-600 group">
          <a href="{{ route('welcome') }}"
             type="button"
             class="inline-flex items-center px-6 py-3 text-base leading-6 font-medium text-orange-700 bg-white hover:text-white hover:bg-orange-600 focus:outline-none focus:shadow-outline-blue active:text-orange-800 active:bg-orange-50 transition ease-in-out duration-150">
                {{ __('Continue shopping') }}
          </a>
        </span>

        <span class="inline-flex shadow-sm border-2 border-green-600 hover:bg-green-600 group">
          <a href="{{ route('cart.checkout.payment') }}"
             type="button"
             class="inline-flex items-center px-6 py-3 text-base leading-6 font-medium text-green-700 bg-white hover:text-white hover:bg-green-600 focus:outline-none focus:shadow-outline-blue active:text-green-800 active:bg-green-50 transition ease-in-out duration-150">
                {{ __('Go to Payment') }}
          </a>
        </span>
    </div>
</div>
