<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    use HasFactory;
    public function peminjam(){
        return $this->belongTo(Peminjam::class);
    }
}
