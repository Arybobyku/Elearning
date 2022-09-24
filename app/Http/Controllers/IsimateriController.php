<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Isimateri;


class IsimateriController extends Controller
{
    public function index(){
        return view('isimateris',[
            "isimateris" => Isimateri::find($id)
        ]); 
    }
    //
}
