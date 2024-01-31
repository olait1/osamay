<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\session;
use App\Models\term;
class pendingFee extends Model
{
    use HasFactory;
    protected $fillable=['description','term','session','amount'];
    public function terms(){
        return $this->belongsTo(term::class,'term','id');
    }
    public function sessions(){
        return $this->belongsTo(session::class,'session','id');
    }
}
