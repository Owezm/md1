<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
