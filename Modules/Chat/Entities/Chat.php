<?php namespace Modules\Chat\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use Translatable;

    protected $table = 'chat__chats';
    public $translatedAttributes = [];
    protected $fillable = [];
}
