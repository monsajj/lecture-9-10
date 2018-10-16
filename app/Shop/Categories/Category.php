<?php

namespace App\Shop\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description'
    ];

    /**
     * @param $parentId
     */
    public function getCategoriesByParentId($parentId)
    {
        $this->where('parent_id', $parentId)->get();
    }

    /**
     * @param $name
     */
    public function getCategoryByName($name)
    {
        $this->where('name', $name)->get();
    }

    /**
     * @param $slug
     */
    public function getCategoryBySlug($slug)
    {
        $this->where('slug', $slug)->get();
    }

    /**
     * @param string $name
     */
    public function setNameAttribute(string $name)
    {
        $this->attributes['name'] = strtolower($name);
    }
}
