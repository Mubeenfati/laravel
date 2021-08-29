<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\educational;
class pagesController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }
    public function spersonal(){
        return view('spersonal');
    }
    public function seducational(){
        return view('seducational');
    }
    public function join(){
        return view('join');
    }
    public function save(Request $request){
        $post = new post;
        $post->firstname = $request->firstname;
        $post->lastname = $request->lastname;
        $post->phone = $request->phone;
        $post->address = $request->address;
        $post->email = $request->email;
        $post->save();
        return redirect('seducational');
    }
    public function save2(Request $request2){
        //return $request2;
        $post2 = new educational;
        $post2->firstname = $request2->firstname;
        $post2->qualification = $request2->qualification;
        $post2->course = $request2->course;
        $post2->save();
        return redirect()->back();
    }
    
}
