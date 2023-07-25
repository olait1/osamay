<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Age',
        'gender',
        'department',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'id'
    ];
 
}
