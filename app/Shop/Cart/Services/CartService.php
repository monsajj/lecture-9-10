<?php

namespace App\Shop\Cart\Services;

use App\Shop\Cart\CartSessionItem;
use App\Shop\Cart\CartViewItem;
use App\Shop\Products\Product;
use App\Shop\Products\Repositories\ProductRepositoryInterface;
use Illuminate\Support\Collection;
use Session;

class CartService
{
    /**
     * @var array
     */
    private $cart;

    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var bool
     */
    private $isAdded;

    /**
     * CartStoreService constructor.
     * @param ProductRepositoryInterface $repository
     */
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->productRepository = $repository;
        $this->isAdded = false;
    }

    /**
     * Add a record to cart
     *
     * @param Product $product
     * @param int $quantity
     */
    public function addToCart(Product $product, int $quantity)
    {
        $this->getCart();
        $productItem = new CartSessionItem($product->getId(), $quantity);

        if ($this->isCartNotEmpty()) {
            foreach ($this->cart as $item) {
                $item->getId() != $productItem->getId() ?: $this->incrementProductCount($item, $quantity);
            }
        }

        if (!$this->isAdded) $this->cart[] = $productItem;

        $this->saveCartChanges();

    }

    /**
     * @param $id
     */
    public function deleteProductFromCart($id)
    {
        $this->getCart();

        foreach ($this->cart as $key => $item) {
            if ($item->getId() == $id) unset($this->cart[$key]);
        }

        $this->saveCartChanges();
    }

    /**
     * @param CartSessionItem $item
     * @param $quantity
     */
    private function incrementProductCount(CartSessionItem $item, $quantity)
    {
        $item->setCount($item->getCount() + $quantity);
        $this->isAdded = true;
    }

    /**
     * @return bool
     */
    private function isCartNotEmpty(): bool
    {
        return $this->cart != null;
    }

    /**
     * @return Collection
     */
    public function getCartDataForView(): Collection
    {
        $this->getCart();
        $cart = collect();
        if ($this->isCartNotEmpty())
            foreach ($this->cart as $value) {
                /**
                 * @var CartSessionItem $value
                 * @var Product $product
                 */
                $product = $this->productRepository->findOneOrFail($value->getId());
                $cart->push(new CartViewItem($value->getId(), $product->getName(), $value->getCount(), $product->getPrice()));
            }

        return $cart;

    }

    /**
     * @return float
     */
    public function getCartTotalSum(): float
    {
        $this->getCart();
        $sum = 0;
        foreach ($this->cart as $item) {
            /**
             * @var CartSessionItem $item
             * @var Product $product
             */
            $product = $this->productRepository->findOneOrFail($item->getId());
            $sum += $product->getPrice() * $item->getCount();
        }

        return $sum;
    }

    /**
     * @return int
     */
    public function getCartCount(): int
    {
        $count = 0;
        $this->getCart();
        if ($this->cart != null)
            foreach ($this->cart as $item) {

                $count += $item->getCount();
            }

        return $count;
    }

    public function saveCartChanges(): void
    {
        session(['cart' => $this->cart]);
        Session::save();
    }

    public function getCart(): void
    {
        $this->cart = session('cart');
    }

}