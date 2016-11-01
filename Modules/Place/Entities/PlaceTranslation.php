<?php namespace Modules\Place\Entities;

use Illuminate\Database\Eloquent\Model;

class PlaceTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'place__place_translations';
}
