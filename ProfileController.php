<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Validator;


class ProfileController extends Controller
{
      public function index()
    {
        return view('admin.profile');

       }

        public function updateProfile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
           
        ]);
        
         $user = User::findOrFail(Auth::id());
         $user->name = $request->name;
         $user->email = $request->email;
            $user->save();

        $request->session()->flash('message','Profile Successfully Updated');
        return redirect()->route('admin_index');

       }
}
