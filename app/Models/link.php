<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    //
    protected $fillable = ['name','url','category_id'];

    public function category(){
        return $this->belongsTo(category::class);
    }
}
