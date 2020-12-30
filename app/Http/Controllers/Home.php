<?php

namespace App\Http\Controllers;
//yhuiop[]
use Illuminate\Http\Request;
use App\Models\Post;
class Home extends Controller
{
    public function index(){
      return view('home',["data"=>Home::all()]);
    }
    public function create(){
        return view('insert');
    }
    
    
    public function insertPost(Request $req){
        $req->validate([
            'name' =>' required',
            'contact' => 'required',
            'math' => 'required',
            'sci' =>'required',
            'sst' =>'required',
            'hindi' =>'required',
            'eng' =>'required',

        ]);
        Post::create([
            'name' => $req->name,
            'contact' => $req->contact,
            'math' => $req->math,
            'sci' =>$req->sci,
            'sst' =>$req->sst,
            'hindi' =>$req->hindi,
            'eng' =>$req->eng,
        ]);

    
        // return redirect()->back();
    }
}

