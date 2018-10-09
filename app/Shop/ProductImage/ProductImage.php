<?php

namespace App\Shop\ProductImage;

use App\Models\Model;

class ProductImage extends Model
{
    /**
     * @var string
     */
    protected $table = 'product_images';

    private $id;
    private $product_id;
    private $src;

    /**
     * ProductImage constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getAttribute('id');
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->setAttribute('id', $id);
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->getAttribute('product_id');
    }

    /**
     * @param int $id
     */
    public function setProductId(int $id): void
    {
        $this->setAttribute('product_id', $id);
    }

    /**
     * @return int
     */
    public function getSrc()
    {
        return $this->getAttribute('src');
    }

    /**
     * @param int $id
     */
    public function setSrc(int $id): void
    {
        $this->setAttribute('src', $id);
    }
}