<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Materi
{
     private static $materi = [
    [
        "name" => "Bedsite",
        "slug" => "1",
        "desc" => "Berikut adalah materi Bedsite",
    ],
    [
        "name" => "Discharge",
        "slug" => "2",
        "desc" => "Berikut adalah materi Discharge",
    ],
];

    public static function all() {
        return collect(self::$materi); 
    }
     public static function find($slug) {

        $materis = static::all(); 
        return $materis->firstWhere('slug', $slug);
    }
}
