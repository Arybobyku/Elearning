<?php

namespace App\Http\Controllers;

use App\Models\Isimateris;
use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
    public function index(){
        return view('users/materi', [
        "materi" => Materi::all(),
        // "isimateris" => Isimateris::all()

    ]);
    }

    // public function show($id)
    // {
    //     return view('users/isimateri', [
    // ]);
    // }
    public function isi($id_materi)
    {
        return view('users/isimateri', [
        "isi_materis" => Isimateris::where('id_materi', $id_materi)->paginate(1)

    ]);
    }
    
}
