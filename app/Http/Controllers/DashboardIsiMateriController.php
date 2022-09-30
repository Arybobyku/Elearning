<?php

namespace App\Http\Controllers;

use App\Models\Isimateris;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardIsiMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('admin.isimateri.index', [
            'isimateris' => Isimateris::paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/isimateri.create',[
            'judulmateris' => Materi::all()
        ]);

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
        'id_materi' => 'required|max:11',
        'sub_bab' => 'required|max:255',
        'image' => 'image|file|max:1024',
        'youtube' => 'max:255',
        'isi' => 'required'
    ]);

    if ($request->file('image')){
        $validatedData['image'] = $request->file('image')->store('isimateri-images');
    }
    
    Isimateris::create($validatedData);

    return redirect('/dashboard/isimateri')->with('success', 'Isi Materi Baru Telah Ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(Isimateris $isimateri)
    {
        return view('admin.isimateri.show', [
            'isimateri' => $isimateri
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function edit(Isimateris $isimateri)
    {
        return view('admin.isimateri.edit', [
            'isimateris' => $isimateri,
            'judulmateri' => Materi::all()

        ]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Isimateris $isimateri)
    {
         $validatedData = $request->validate([
        'sub_bab' => 'required|max:255',
        'id_materi' => 'required|max:11',
        'image' => 'image|file|max:1024',
        'youtube' => 'max:255',
        'isi' => 'required'
    ]);
    if ($request->file('image')){
    $validatedData['image'] = $request->file('image')->store('isimateri-images');
    }
    Isimateris::where('id', $isimateri->id)->update($validatedData);

    return redirect('/dashboard/isimateri')->with('success', 'Isi Materi Baru Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Isimateris $isimateri)
    {
        Isimateris::destroy($isimateri->id);

    return redirect('/dashboard/isimateri')->with('delete', 'Isi Materi Baru Telah Dihapus');
    }
}
