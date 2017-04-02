<?php namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description'
    ];

    protected $table = 'product__product_translations';
}
