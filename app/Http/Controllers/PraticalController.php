<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pratical;

class PraticalController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $pratical = pratical::create([
            'title' => $request->title,
            'content'=> $request->content,
        ]);

        return redirect()->back()->with('message', 'message upload successfully');
    }
     
    public function recent(){
        $pratical = pratical::latest()->paginate(3);

        return view('welcome')->with('pratical' , $pratical);
    }
}
