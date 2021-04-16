<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    //
    protected $fillable = ["name"];

    public function news(){
        return $this->hasMany(News::class);
    }
}
