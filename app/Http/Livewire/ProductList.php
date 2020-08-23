<?php

namespace App\Http\Livewire;

use App\Cart;
use App\Product;
use App\ProductCategory;
use Livewire\Component;

class ProductList extends Component
{
    public string $search = '';
    public ?string $category = null;

    protected $updatesQueryString = [
        'search' => ['except' => '']
    ];

    protected $listeners = ['select' => 'selectCategory'];

    public function selectCategory($category)
    {
        $this->category = $category;
    }

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);

        Cart::forCurrentUser()->addItem($product);
    }

    public function render()
    {
        $query = filled($this->category) 
            ? Product::with('latestPrice')->whereHas('category', fn ($category) => $category->where('name', $this->category))
            : Product::with('latestPrice');

        $query->where('stock', '>', 0);

        return view('livewire.product-list', [
            'categories' => ProductCategory::pluck('name'),

            'products' => filled($this->search) 
                ? $query->search($this->search)->paginate()
                : $query->latest()->paginate()
        ]);
    }
}
