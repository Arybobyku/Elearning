<?php

namespace App\Http\Controllers;

use App\Models\Kuis;
use Illuminate\Http\Request;

class DashboardKuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kuis.index', [
            'kuiss' => Kuis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kuis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'soal' => 'required|max:255',
        'jawaban' => 'required|max:255',
        'opsi1' => 'required|max:255',
        'opsi2' => 'required|max:255',
        'opsi3' => 'required|max:255',
        'opsi4' => 'required|max:255'
    ]);
    Kuis::create($validatedData);

    return redirect('/dashboard/kuis')->with('success', 'Soal Kuis Baru Telah Ditambahkan');
    }

    public function show(Kuis $kui)
    {
        return view('admin.kuis.show', [
            'kuis' => $kui
        ]);
    }
    public function edit(Kuis $kui)
    {
        return view('admin.kuis.edit', [
            'kuis' => $kui
        ]);
        
    }

    public function update(Request $request, Kuis $kui)
    {
    $validatedData = $request->validate([
        'soal' => 'required|max:255',
        'jawaban' => 'required|max:255',
        'opsi1' => 'required|max:255',
        'opsi2' => 'required|max:255',
        'opsi3' => 'required|max:255',
        'opsi4' => 'required|max:255'
    ]);
    Kuis::where('id', $kui->id)->update($validatedData);

    return redirect('/dashboard/kuis')->with('success', 'Kuis Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuis $kui)
    {
        Kuis::destroy($kui->id);

    return redirect('/dashboard/kuis')->with('delete', 'Kuis Telah Dihapus');
    }
}
