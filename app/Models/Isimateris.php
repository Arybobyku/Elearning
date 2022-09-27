<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isimateris extends Model
{
    use HasFactory;
        protected $fillable = [
        'id_materi',
        'sub_bab',
        'isi',
    ];
    public function judul(){
        return $this->belongsTo(Materi::class, 'id_materi');
    }
}
