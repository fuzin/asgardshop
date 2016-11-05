<?php namespace Modules\Place\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use Translatable;

    protected $table = 'place__places';
    public $translatedAttributes = ['name', 'slug', 'description'];
    protected $fillable = ['name', 'slug', 'description'];
    
}
