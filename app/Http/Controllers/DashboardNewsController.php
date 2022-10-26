<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
            'newss' => News::paginate(10),
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
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        if ($request->slug != $news->slug) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|unique:news',
                'image' => 'image|file|max:1024',
                'isi' => 'required',
            ]);
        } else {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'image' => 'image|file|max:1024',
                'isi' => 'required',
            ]);
        }
        if ($request->file('image')) {
            if ($news->oldImage) {
                Storage::delete($news->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('isimateri-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->isi, 20));

        News::where('id', $news->id)->update($validatedData);

        return redirect('/dashboard/news')->with('success', 'Isi Materi Baru Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Isimateris  $isimateris
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::delete($news->image);
        }
        News::destroy($news->id);

        return redirect('/dashboard/news')->with('delete', 'Isi Materi Baru Telah Dihapus');
    }
}
