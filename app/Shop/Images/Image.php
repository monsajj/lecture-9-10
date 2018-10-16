<?php

namespace App\Shop\Images;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'category_id',
        'src',
    ];

    /**
     * @param $productId
     */
    public function getImageByProductId($productId)
    {
        $this->where('product_id', $productId)->get();
    }

    public function scopeImageByProductId($productId)
    {
        $this->where('product_id', $productId);
    }

    /**
     * @param string $src
     */
    public function setNameAttribute(string $src)
    {
        $this->attributes['src'] = strtolower($src);
    }
}
