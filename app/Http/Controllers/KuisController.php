<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use App\Models\UserAnswer;
use App\Models\UserResults;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KuisController extends Controller
{
    public function create()
    {
        $kuiss = Kuis::all();
        $userId = Auth::id();
        $userResultStatus = UserResults::where('id_user', $userId)->count();
        return view('users/kuis', ['kuiss' => $kuiss, 'user_result_count' => $userResultStatus]);
    }

    public function saveAnwere(Request $request)
    {
        $userId = Auth::id();

        $userResultStatus = UserResults::where('id_user', $userId)->count();
        
        $kuiss = Kuis::all();
        $hasilJawaban = 0;
        $jawabanBenarUser = 0;
        for($i=0;$i<$kuiss->count();$i++){
            $stringJawban = "jawaban" . $i+1;
            $jawab = $request[$stringJawban];
            if($jawab == $kuiss[$i]->jawaban){
                $jawabanBenarUser+=1;
            }
           
        }
        $hasilJawaban = ($jawabanBenarUser/$kuiss->count())*100;
        $size = $request['jumlah_soal'];

        $userResult = UserResults::create([
            'id_user' => $userId,
            'status' => $userResultStatus,
            'nilai' => $hasilJawaban,
        ]);

        for ($i = 1; $i <= $size; $i++) {
            $stringJawban = "jawaban" . $i;
            $stringKusionerId = 'kusionerId' . $i;
            UserAnswer::create([
                'id_user' => $userId,
                'id_kuis' => $request[$stringKusionerId],
                'answer' => $request[$stringJawban],
                'user_result_id' => $userResult->id,
            ]);
        }

        return redirect('/academies')->with('success', 'Anda Telah Menyelesaikan Kuis');
    }
}
