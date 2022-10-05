<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_kuis',
        'user_result_id',
        'answer',
    ];

    public function kuesioners(){
        return $this->hasOne(kuesioner::class,'id','id_kuis');
    }

    public function user(){
        return $this->hasOne(UserResults::class,'id','user_result_id');
    }
}
