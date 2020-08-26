@extends('layouts.base')

@section('menu-left')
    <a href="{{ route('welcome') }}"
       class="inline-flex items-center px-1 pt-1 border-b-2 {{ Route::is('welcome') ? 'border-orange-500' : 'hover:border-orange-500' }} text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-orange-700 transition duration-150 ease-in-out">
        @svg('heroicon-s-shopping-cart', 'h-5 w-5')
        {{ __('Store') }}
    </a>

    <a href="{{ route('login') }}"
       class="inline-flex items-center px-1 pt-1 border-b-2 {{ Route::is('login') ? 'border-orange-500' : 'hover:border-orange-500' }} text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-orange-700 transition duration-150 ease-in-out">
        @svg('heroicon-s-login', 'h-5 w-5')
        {{ __('Sign in') }}
    </a>

    @if (Route::has('register'))
        <a href="{{ route('register') }}"
           class="inline-flex items-center px-1 pt-1 border-b-2 {{ Route::is('register') ? 'border-orange-500' : 'hover:border-orange-500' }} text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-orange-700 transition duration-150 ease-in-out">
            @svg('heroicon-s-logout', 'h-5 w-5')
            {{ __('Register') }}
        </a>
    @endif
@endsection

@section('menu-right')
    @livewire('cart')
@endsection

@section('body')
    @yield('content')
@endsection
