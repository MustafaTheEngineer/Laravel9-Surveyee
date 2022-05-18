<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    # one to many
    public function surveys(){
        return $this->hasMany(survey::class);
    }

    # One to many inverse
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    # One to many
    public function children(){
        return $this->hasMany(Category::class , 'parent_id');
    }
}
