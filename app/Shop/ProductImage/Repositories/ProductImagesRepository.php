<?php

namespace App\Shop\ProductImage\Repositories;

use App\Repositories\BaseRepository;
use App\Shop\ProductImage\ProductImage;

class ProductImagesRepository extends BaseRepository implements ProductImagesRepositoryInterface
{
    /**
     * ProductImagesRepository constructor.
     * @param ProductImage $model
     */
    public function __construct(ProductImage $model)
    {
        parent::__construct($model);
    }

    /**
     * Returns collection of Products Images
     *
     * @param $productId
     * @return \Illuminate\Support\Collection
     */
    public function getImagesForProduct($productId)
    {
        return $this->findBy('product_id', $productId);
    }
}