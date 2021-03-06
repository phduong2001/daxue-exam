<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
