<?php

namespace App\Shop\Cart;

class CartSessionItem
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $count;

    public function __construct($id, $count)
    {
        $this->id = $id;
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }
}