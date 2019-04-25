<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    public function reviews(){
      return $this->hasMany('App\Review');
    }

    public function admin(){
      return $this->belongsTo('App\Admin');
    }

}
