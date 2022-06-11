<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function survey()
    {
        return $this->belongsTo(survey::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
