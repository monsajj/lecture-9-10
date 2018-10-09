<?php

namespace App\Http\ViewComposer;


use App\Shop\Cart\Services\CartService;
use Illuminate\Contracts\View\View;

class CartComposer
{
    /**
     * The categories repository implementation.
     *
     * @var CartService
     */
    protected $cartService;

    /**
     * Create a new cart composer.
     *
     * @param  CartService $categories
     * @return void
     */
    public function __construct(CartService $service)
    {
        $this->cartService = $service;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('cartCount', $this->cartService->getCartCount());
    }
}