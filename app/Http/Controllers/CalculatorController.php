<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\Request;
use App\Models\Materi;

class CalculatorController extends Controller
{
    public function bor()
    {
        $harirawat = request()->input('harirawat');
        $tempattidur = request()->input('tempattidur');
        $hariwaktu = request()->input('hariwaktu');
        if ($hariwaktu != 0 && $tempattidur != 0) {
            $hasilJawaban = ((int) $harirawat / ((int) $tempattidur * (int) $hariwaktu))*100;
        } else {
            $hasilJawaban = 0;
        }
        return view('general.bor', [
            'harirawat' => $harirawat,
            'tempattidur' => $tempattidur,
            'hariwaktu' => $hariwaktu,
            'hasilJawaban' => $hasilJawaban,
        ]);
    }
    public function alos()
    {
        $harirawat = request()->input('harirawat');
        $keluar = request()->input('keluar');
        if ($keluar != 0) {
            $hasilJawaban = ((int) $harirawat / (int) $keluar);
        } else {
            $hasilJawaban = 0;
        }
        return view('general.alos', [
            'harirawat' => $harirawat,
            'keluar' => $keluar,
            'hasilJawaban' => 0 ? 0 : $hasilJawaban,
        ]);
    }
    public function toi()
    {
        $harirawat = request()->input('harirawat');
        $hari = request()->input('hari');
        $tempattidur = request()->input('tempattidur');
        $keluar = request()->input('keluar');
        if ($keluar != 0) {
            $hasilJawaban = ((((int) $hari * (int) $tempattidur) - (int)$harirawat)/(int) $keluar);
        } else {
            $hasilJawaban = 0;
        }
        return view('general.toi', [
            'harirawat' => $harirawat,
            'hari' => $hari,
            'tempattidur' => $tempattidur,
            'keluar' => $keluar,
            'hasilJawaban' => 0 ? 0 : $hasilJawaban,
        ]);
    }
}
