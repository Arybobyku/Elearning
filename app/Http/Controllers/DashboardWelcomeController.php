<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardWelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.welcome.index', [
            'welcomes' => Welcome::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.welcome.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWelcomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('isimateri-images');
        }

        Welcome::create($validatedData);

        return redirect('/dashboard/welcome')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        return view('admin.welcome.show', [
            'welcome' => $welcome,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        return view('admin.welcome.edit', [
            'welcome' => $welcome,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWelcomeRequest  $request
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('isimateri-images');
        }

        Welcome::where('id', $welcome->id)->update($validatedData);

        return redirect('/dashboard/welcome')->with('success', 'Gambar Baru Telah Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        if ($welcome->image) {
            Storage::delete($welcome->image);
        }
        Welcome::destroy($welcome->id);

        return redirect('/dashboard/welcome')->with('delete', 'Gambar Telah Dihapus');
    }
}
