<?php namespace Modules\Place\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use Translatable;

    protected $table = 'place__places';
    public $translatedAttributes = [
        'title',
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
        'streetName',
        'streetNumber',
        'addressInfo',
        'email',
        'website',
        'phone',
        'faxNumber',
        'smsNumber'
    ];
    
}
