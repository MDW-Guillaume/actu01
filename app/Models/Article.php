<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //

    public function rubrics() {
        return $this->belongsTo(Rubric::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
