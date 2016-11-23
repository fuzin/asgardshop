<?php namespace Modules\Chat\Entities;

use Illuminate\Database\Eloquent\Model;

class ChatTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'chat__chat_translations';
}
