<?php

namespace App\Shop\Categories\Repositories;

use App\Repositories\BaseRepository;
use App\Shop\Categories\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * CategoryRepository constructor.
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findCategoryById($id)
    {
        return $this->find($id);
    }
}