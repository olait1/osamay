<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about_us extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'image',
        'paragraph',
      
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'id'
    ];
}
