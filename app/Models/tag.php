<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    //
    protected $fillable=[
        'name',
    ];

    public function links(){
        return $this->belongsToMany(Link::class,'link_tag','link_id','tag_id');
    }
}
