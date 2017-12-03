<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    $guarded = [];

    public function usuarios(){
      return $this->belongsTo('App\User', 'user_id');
    }
}
