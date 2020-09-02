<?php

namespace App\Providers;

use App\Aggregates\CartAggregate;
use App\Cart;
use App\Contracts\CurrentCart;
use App\Enums\CartStatus;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Livewire\Component;
use function tap;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CurrentCart::class, static function () {
            $uuid = Session::has('cart_uuid')
                ? Session::get('cart_uuid')
                : tap(Str::uuid(), fn ($uuid) => Session::put('cart_uuid', $uuid));

            if (Cart::query()->where('status', CartStatus::OPEN)->where('event_uuid', $uuid)->doesntExist()) {
                CartAggregate::retrieve($uuid)
                    ->createCart(Auth::id())
                    ->persist();
            }

            return Cart::query()->firstWhere('event_uuid', $uuid);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('pagination::default');
        Paginator::defaultSimpleView('pagination::simple-default');
    }
}
