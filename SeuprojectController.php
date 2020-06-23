<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\register;
use App\course;
class SeuprojectController extends Controller

/**function index(){
 $data = course::all();
 return view('homepage',["data" =>$data]); */ 

 { 
  function user(){
      $data = course::orderBy('id', 'desc')->get();
      return view('homepage',["data" =>$data]);
  }
  
    function register(){
        return view('register');
    }
   
    public function registered (Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'national_id' => 'required',
            'email' => 'required',
            'alter_email' => 'nullable',
            'occupation' => 'required',
            'seu_id' => 'nullable',
            'seu_branch' => 'nullable',
            'other_uni' => 'nullable'
        ]);

        $registers = new register;
        $registers->first_name = $request->input('first_name');
        $registers->last_name = $request->input('last_name');
        $registers->national_id = $request->input('national_id');
        $registers->email = $request->input('email');
        $registers->alter_email= $request->input('alter_email');
        $registers->occupation = $request->input('occupation');
        $registers->seu_id = $request->input('seu_id');
        $registers->seu_branch = $request->input('seu_branch');
        $registers->other_uni = $request->input('other_uni');
        $registers->save();
 
        return redirect('/register')->with('response','Registration Confirmed');
       
    }
}


//        $table->integer('course_id')->unsigned();
  //       $table->integer('course_id')->references('id')->on('courses');   