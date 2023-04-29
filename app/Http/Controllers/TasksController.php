<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function add(Request $request){

        $validated=$request->validate([
            'title'=> 'required|unique:tasks|max:255',
            'description'=>'required',
        ]);

        Task::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);

        return redirect()->to('/');
    }

    public function show(){
        $res=Task::all()->where('status', '=', 0);
        return view('welcome', ['tasks'=>$res]);
    }

    public function sho(){
        $re=Task::all()->where('status', '=', 1);
        return view('statist', ['tasks'=>$re]);
    }

    public function done($id){
        Task::where('id', '=', $id)
            ->update(['status'=> 1]);
        return redirect()->to('/');
    }
}
