<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use Illuminate\Http\Request;

class DashboardDiskusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.diskusi.index', [
            'diskusis' => Diskusi::all()
        ]);
    }

    public function show(Diskusi $diskusi)
    {
        return view('admin.diskusi.show', [
            'diskusis' => $diskusi
        ]);
    }

    public function destroy(Diskusi $diskusi)
    {
        Diskusi::destroy($diskusi->id);

    return redirect('/dashboard/diskusi')->with('delete', 'Komentar Telah Dihapus');
    }
}
