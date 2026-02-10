<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Link extends Model
{
    //
    protected $fillable = ['name','url','category_id'];

    public function category(){
        return $this->belongsTo(category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,'link_tag','link_id','tag_id');
    }
}
