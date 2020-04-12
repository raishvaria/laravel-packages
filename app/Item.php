<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Casts\TypeCast;

class Item extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'qty' => TypeCast::class
    ];
}
