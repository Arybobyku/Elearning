<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Isimateris
{
    private static $isimateris = [
    [
        "sub_bab" => "Pengenalan",
        "slug" => "Pengenalan",
        "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nobis minus officia error saepe, repudiandae, harum qui explicabo laborum odio recusandae quasi illo blanditiis maiores illum, quis a placeat."
    ],];

    public static function all() {
        return self::$isimateris; 
    }
}
