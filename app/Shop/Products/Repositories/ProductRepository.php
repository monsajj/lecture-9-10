<?php

namespace App\Shop\Products\Repositories;

use App\Repositories\BaseRepository;
use App\Shop\Products\Product2;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * ProductRepository constructor.
     * @param Product2 $model
     */
    public function __construct(Product2 $model)
    {
        parent::__construct($model);
    }
}