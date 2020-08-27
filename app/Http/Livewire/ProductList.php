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
    protected array $categories = [];
    protected array $categorySearchResults = [];

    protected $listeners = [
        'search' => 'searchCategories',
        'select' => 'selectCategory',
        'productAddedToCart' => '$refresh',
        'productStockHit' => 'showProductOutOfStockAlert',
        'productRemovedFromCart' => '$refresh'
    ];

    public function mount(CurrentCart $cart)
    {
        $this->cart = $cart;
        $this->categories = ProductCategory::pluck('name')->toArray();
        $this->categorySearchResults = $this->categories;
    }

    public function selectCategory($category)
    {
        $this->category = $category;
    }

    public function searchCategories($search)
    {
        $this->categorySearchResults = preg_grep("/^{$search}/i", $this->categories);
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
            ? Product::with('latestPrice')->whereHas('category', fn ($category) => $category->where('name', $this->category))
            : Product::with('latestPrice');

        $query->where('stock', '>', 0);

        return view('livewire.product-list', [
            'categories' => $this->categorySearchResults,

            'products' => filled($this->search)
                ? $query->search($this->search)->paginate()
                : $query->latest()->paginate(),
        ]);
    }
}
