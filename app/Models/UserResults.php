<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResults extends Model
{
    use HasFactory;
     protected $fillable = [
        'id_user',
        'status',
        'nilai'
    ];

    public function answere()
    {
        return $this->hasMany(UserAnswer::class, 'id', 'user_result_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
    public function nama(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
