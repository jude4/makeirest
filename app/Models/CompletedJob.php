<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedJob extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cover_image',
        'description',
        'title'
    ];
}