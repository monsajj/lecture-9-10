<?php

namespace App\Shop\ProductImage\Repositories;

use App\Interfaces\BaseRepositoryInterface;

interface ProductImagesRepositoryInterface extends BaseRepositoryInterface
{
    public function getImagesForProduct($productId);
}