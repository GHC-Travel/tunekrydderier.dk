<?php

namespace App\Http\Livewire;

use App\Cart;
use App\Contracts\CurrentCart;
use App\Product;
use App\ProductCategory;
use Livewire\Component;

class ProductList extends Component
{
    use TracksCurrency, TracksSearch;

    public bool $showProductOutOfStockAlert = false;

    public ?string $category = null;
    /**
     * @var Cart|CurrentCart
     */
    public $cart;

    protected $listeners = [
        'select' => 'selectCategory',
        'productAddedToCart' => '$refresh',
        'productStockHit' => 'showProductOutOfStockAlert',
        'productRemovedFromCart' => '$refresh'
    ];

    public function mount(CurrentCart $cart)
    {
        $this->cart = $cart;
    }

    public function selectCategory($category)
    {
        $this->category = $category;
    }

    public function showProductOutOfStockAlert($productId)
    {
        $this->showProductOutOfStockAlert = true;
    }

    public function addToCart(int $productId)
    {
        $product = Product::with('latestPrice')->findOrFail($productId);

        $this->cart
            ->aggregateRoot()
            ->addToCart($product)
            ->persist();

        $this->emit('productAdded', $productId);
    }

    public function render()
    {
        $query = filled($this->category)
            ? Product::with('latestPrice')->whereHas('category', fn($category) => $category->where('name', $this->category))
            : Product::with('latestPrice');

        $query->where('stock', '>', 0);

        return view('livewire.product-list', [
            'categories' => ProductCategory::pluck('name'),

            'products' => filled($this->search)
                ? $query->search($this->search)->paginate()
                : $query->latest()->paginate(),
        ]);
    }
}
