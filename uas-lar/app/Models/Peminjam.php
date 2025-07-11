<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;
    public function perpus(){
        return $this->hasOne(Perpus::class, 'id', 'perpuses_id');
    }

    public function anggota(){
        return $this->hasOne(Anggota::class, 'id', 'anggotas_id');
    }
}
