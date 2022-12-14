<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use App\Models\LandingImage;
use Illuminate\Http\Request;
use App\Models\Materi;

class WelcomeController extends Controller
{
    public function index(){
        return view('general.welcome', [
        "welcomes" => Welcome::all(),
        "landingimages" => LandingImage::all(),
    ]);
    }

    
}
