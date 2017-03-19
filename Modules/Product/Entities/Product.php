<?php namespace Modules\Product\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Translatable;

    protected $table = 'product__products';

    public $translatedAttributes = [
        'slug',
        'description'
    ];
    
    protected $fillable = [
        'name',

        'title',
        'slug',
        'description',

        'zip',
        'city',
        'street',

        'email',
        'website',
        'phone',
    ];
    
    
    
}
