<?php
/**
 * Created by PhpStorm.
 * User: sa
 * Date: 04.10.2018
 * Time: 19:52
 */

namespace App\Shop\Categories\Repositories;

use App\Interfaces\BaseRepositoryInterface;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function findCategoryById($id);
}