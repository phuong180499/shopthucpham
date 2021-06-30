<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    protected $fillable = [
      'id_sp', 'sl',
    ];

    protected $table="kho";
}
