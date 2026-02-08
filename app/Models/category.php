<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    //
     protected $fillable = [
        'name',
        
    ];
    public function links(){
       return $this->HasMany(link::class);
    }
}
