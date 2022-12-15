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
        // $user = Isimateris::find($id);
        $prev = Isimateris::where('id_materi', '<', $id_materi)->max('id_materi');
        $next = Isimateris::where('id_materi', '>', $id_materi)->min('id_materi');
        // $back = Isimateris::where('id', $user->id)->first();
        return view('users/isimateri', [
        "isi_materis" => Isimateris::where('id_materi', $id_materi)->paginate(1),
        "list_materis" => Isimateris::where('id_materi', $id_materi)->get()
    ]
    )->with('next' , $next)->with('prev' , $prev);

    }
    
}
