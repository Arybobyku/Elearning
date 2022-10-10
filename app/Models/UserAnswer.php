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

    public function kuis(){
        return $this->hasOne(Kuis::class,'id','id_kuis');
    }

    public function user(){
        return $this->hasOne(UserResults::class,'id','user_result_id');
    }
    public function nama(){

        return $this->hasOne(User::class,'id','id_user');
    }
}
