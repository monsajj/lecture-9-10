<?php

namespace App\Shop\Products;

use App\Models\Model;

class Product extends Model
{
    protected $table = 'products';

    private $id;
    private $categoryId;
    private $name;
    private $slug;
    private $description;
    private $cover;
    private $quantity;
    private $price;
    private $status;

    /**
     * Product constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->setAttribute('id', $id);;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->getAttribute('category_id');
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId): void
    {
        $this->setAttribute('category_id', $categoryId);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->getAttribute('name');
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->setAttribute('name', $name);
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->getAttribute('slug');
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->setAttribute('slug', $slug);
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->getAttribute('description');
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->setAttribute('description', $description);
    }

    /**
     * @return mixed
     */
    public function getCover()
    {
        return $this->getAttribute('cover');
    }

    /**
     * @param mixed $cover
     */
    public function setCover($cover): void
    {
        $this->setAttribute('cover', $cover);
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->getAttribute('quantity');
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->setAttribute('quantity', $quantity);
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->getAttribute('price');
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->setAttribute('price', $price);
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->getAttribute('status');
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->setAttribute('status', $status);
    }
}