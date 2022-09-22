<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where("role","!=",2)->paginate();

        return view('admin.index', compact('users'));
    }

    public function addToAdmin(Request $request){
        $data =  User::where('id',$request['id'])->update([
            'role'=>1,
        ]);

        return redirect('users')->with('status',"Berhasil menambahkan admin");
    }

    public function addToUser(Request $request){
        $data =  User::where('id',$request['id'])->update([
            'role'=>0,
        ]);

        return redirect('users')->with('status',"Berhasil menjadikan user");
    }

    public function deleteUser(Request $request){
         User::where('id',$request['id'])->delete();

        return redirect('users')->with('status',"Berhasil menghapus user");
    }
}
