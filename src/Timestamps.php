<?php

namespace Aminsaki\time;

use Illuminate\Database\Eloquent\Model;

class Timestamps extends Model
{
   
    protected $fillable = [
        'name', 'value',
    ];

    protected  $table="timestamp";

   
}
