<?php

namespace App\Shop\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'status',
        'quantity'
    ];

    /**
     * @param $categoryId
     */
    public function getProductsByCategoryId($categoryId)
    {
        $this->where('category_id', $categoryId)->get();
    }

    /**
     * @param $name
     */
    public function getProductByName($name)
    {
        $this->where('name', $name)->first();
    }

    /**
     * @param $slug
     */
    public function findProductBySlug($slug)
    {
        $this->where('slug', $slug)->first();
    }

    public function scopeProductBySlug($query, $slug)
    {
        $query->where('slug', $slug);
    }

    /**
     * @param $price
     */
    public function scopeWherePriceMoreOrEqual($price)
    {
        $this->where('price', '>=', $price);
    }

    /**
     * @param $price
     */
    public function scopeWherePriceLessOrEqual($price)
    {
        $this->where('price', '<=', $price);
    }

    /**
     * @return mixed
     */
    public function scopeInStock()
    {
        return $this->where('quantity', '>', 0);
    }

    /**
     * @return mixed
     */
    public function scopeAvailable()
    {
        return $this->where('status', true);
    }

    /**
     * @return string
     */
    public function getFormattedAttribute()
    {
        return '$'.$this->price;
    }

    /**
     * @param string $name
     */
    public function setNameAttribute(string $name)
    {
        $this->attributes['name'] = strtolower($name);
    }
}
