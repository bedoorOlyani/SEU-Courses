<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;
use App\Course;


class RegisterController extends Controller
{
    /**function register() {
        $courses = Course::all();{
            return view('user/register')->withcourses($courses);
            } 


        return view('user/register');
    }*/
    
  
    function register() {
        $courses = Course::all();{
            return view('user/register')->with('courses',Course::all());
         
            } 


        return view('user/register'); 
    
        }

        
    public function registered (Request $request){
        //1. validate all fields 
        $this->validate($request, [

        // 2. Required flied tags    
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

        // 3. Insert data from form to the field in database 
        $registers = new register;
        $registers->course_id = $request->input('course_id');
        $registers->first_name = $request->input('first_name');
        $registers->last_name = $request->input('last_name');
        $registers->national_id = $request->input('national_id');
        $registers->email = $request->input('email');
        $registers->alter_email= $request->input('alter_email');
        $registers->occupation = $request->input('occupation');
        $registers->seu_id = $request->input('seu_id');
        $registers->seu_branch = $request->input('seu_branch');
        $registers->other_uni = $request->input('other_uni');
       
        // 4. Save data
        $registers->save();

       // 5. redirect and show confirmation message to the user
        return redirect('/register')->with('response','Registration Confirmed');
   
    }
    public function showRegister()
    {
        $reg =register::all();
        return view('user.showRegister')
                ->with('registers',$reg);
    }
    public function certificate($id)
    {
        $std = register::find($id);
        return view('user.certificate')
                ->with('std',$std);
    }
 
}
