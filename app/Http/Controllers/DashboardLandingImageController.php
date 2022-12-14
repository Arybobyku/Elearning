<?php

namespace App\Http\Controllers;

use App\Models\LandingImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardLandingImageController extends Controller
{
    public function index()
    {
        return view('admin.landingimage.index', [
            'landingimages' => LandingImage::all(),
        ]);
    }
    public function create()
    {
        return view('admin.landingimage.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('isimateri-images');
        }

        LandingImage::create($validatedData);

        return redirect('/dashboard/landingimage')->with('success', 'Gambar Baru Telah Ditambahkan');
    }
    public function show(LandingImage $landingmage)
    {
        return view('admin.landingimage.show', [
            'landingimage' => LandingImage::firstorFail(),
        ]);
    }
    public function edit(LandingImage $landingmage)
    {
        return view('admin.landingimage.edit', [
            'landingimage' => LandingImage::firstorFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeRequest  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandingImage $landingmage)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('isimateri-images');
        }

        LandingImage::where('id', $request->id)->update($validatedData);

        return redirect('/dashboard/landingimage')->with('success', 'Gambar Baru Telah Ditambahkan');
    }
}
