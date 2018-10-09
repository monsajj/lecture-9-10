<?php

namespace App\Shop\Cart;

class CartViewItem
{
    public $id;
    public $name;
    public $count;
    public $price;

    public function __construct($id, $name, $count, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->count = $count;
        $this->price = $price;
    }
}