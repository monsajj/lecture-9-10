<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Shop\Cart\Requests\CartItemRequest;
use App\Shop\Cart\Services\CartService;
use App\Shop\Products\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    private $cartService;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * CartController constructor.
     *
     * @param CartService $service
     * @param ProductRepositoryInterface $repository
     */
    public function __construct(CartService $service, ProductRepositoryInterface $repository)
    {
        $this->cartService = $service;
        $this->productRepository = $repository;
    }

    /**
     * @param CartItemRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CartItemRequest $request)
    {
        $product = $this->productRepository->findOneOrFail($request->get('product'));
        $quantity = $request->get('quantity');

        $this->cartService->addToCart($product, $quantity);

        return redirect()->route('cart.show');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $cart = $this->cartService->getCartDataForView();
        $sum = $this->cartService->getCartTotalSum();

        return view('front.cart.cart', compact('cart', 'sum'));
    }

    /**
     * @param Request $request
     */
    public function clear(Request $request)
    {
        Session::forget('cart');

        return redirect()->route('cart.show');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $this->cartService->deleteProductFromCart($id);

        return redirect()->route('cart.show');
    }
}