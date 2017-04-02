<?php namespace Modules\Product\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;

    public $translatedAttributes = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description'
    ];

    protected $fillable = [
        'EAN',
        'name',
        'slug'
    ];


    protected $table = 'product__products';

}
