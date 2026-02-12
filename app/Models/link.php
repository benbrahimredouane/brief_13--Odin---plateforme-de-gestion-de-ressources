<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Link extends Model
{
    //
    protected $fillable = ['name','url','category_id','user_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class,'link_tag','link_id','tag_id');
    }
}
