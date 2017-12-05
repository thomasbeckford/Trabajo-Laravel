<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function usuarios(){
      return $this->belongsTo('App\User', 'user_id');
    }

    public function getPoster() {
      return str_replace("public", "/storage", $this->imagen);
    }

}
