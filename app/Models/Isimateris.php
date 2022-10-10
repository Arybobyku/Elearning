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
        'image',
        'youtube',
        'isi',
    ];
    protected $appends = ['next', 'previous'];
    
    public function judul(){
        return $this->belongsTo(Materi::class, 'id_materi');
    }
    public function getNextAttribute()
{
    return $this->where('id_materi', '>', $this->id_materi)->orderBy('id_materi','asc')->first();
}

}
