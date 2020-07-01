<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\User;
use App\Course;


class SearchController extends Controller

{

   
   public function index() {
   
      $courses = course::OrderBy('created_at', 'desc')->get();
     
        return view('search.index', compact('courses'));
  }
   

  public function search( Request $request) {

   $request->validate([

       'q' => 'required'
   ]);


   $q = $request->q;
  

        $filteredCourses=Course::where('title', 'like', '%' . $q . '%')
                                ->orWhere('body', 'like', '%' . $q . '%')->get();

   


  if ($filteredCourses->count()) {

   return view('search.index')->with([
       'courses' =>  $filteredCourses
   ]);
} else {
   
   return redirect('/find')->with([
       'status' => 'search failed ,, please try again'
   ]);
}

}
}
;



