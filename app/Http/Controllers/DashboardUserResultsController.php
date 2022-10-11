<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAnswer;
use App\Models\UserResults;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardUserResultsController extends Controller
{

    public function index()
    {
        $data = UserResults::with(['user'])->get();


        return view ('admin.userresult.index', [
           'userInputs'=> $data,
        ]);
    }
    

    public function getAllResult(){
        $data = UserResults::with(['user'])->get();
        var_dump($data);die();
    }

    public function show($id){
        // $answer = UserAnswer::find($id_user)->nama;
        $data = UserAnswer::where('user_result_id',$id)->with(['kuis'])->with(['nama'])->get();
        return view('admin.userresult.show',[
            "title"=> "Single Home",
            'answeres'=>$data,
            // 'namas'=>$answer,   

        ]);
    }
    public function edit($id){
        $data = User::find($id);

            
        return view('dashboard.userresult.edit',[
    
            'usere'=>$data
        ]);
    }
    public function destroy()
    {
        foreach (UserResults::all() as $e) 
        { $e->delete();}
        foreach (UserAnswer::all() as $e) 
        { $e->delete();}  

    return redirect('/dashboard/userresult')->with('delete', 'Hasil Nilai Telah Dihapus');
    }
}
