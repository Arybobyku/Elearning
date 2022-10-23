<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(News::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
    public function index()
    {
        return view('admin.news.index', [
            'newss' => News::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:news',
            'image' => 'image|file|max:1024',
            'isi' => 'required',
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('isimateri-images');
        }

        News::create($validatedData);

        return redirect('/dashboard/news')->with('success', 'Berita Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show', [
            'news' => $news,
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
            'judulmateri' => Materi::all(),
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
            'isi' => 'required',
        ]);
        if ($request->file('image')) {
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
