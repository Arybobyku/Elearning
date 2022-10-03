<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiskusiController extends Controller
{
    public function index()
    {
        return view('users/diskusi', [
            "diskusis" => Diskusi::all(),
        ]);
    }

    public function addKomentar(Request $request){
        $request->validate([
            'komentar' => 'required|max:500',
        ]);
        $userId = Auth::user()->id;
        Diskusi::create([
            'komentar'=>$request->komentar,
            'id_user'=>$userId,
        ]);

       return  redirect('/diskusi');

    }

}
