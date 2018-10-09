<?php

namespace App\Shop\Products\Repositories;

use App\Repositories\BaseRepository;
use App\Shop\Products\Product;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * ProductRepository constructor.
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}