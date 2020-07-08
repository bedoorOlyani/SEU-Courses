@extends('user.userlayout')

@section('content')

<div class="container">
<form class="form-horizontal" method="POST" action="{{url ('/registered')}}">
    {{ @csrf_field() }}
    <fieldset>
      <legend>Registration Form</legend>
      @if(count($errors)> 0)
      @foreach($errors->all() as $error)
          <div class="col-md-8 alert alert-danger">{{$error}}</div>
     @endforeach
     @endif   
     @if(session('response'))
     <div class="col-md-8 alert alert-success">
            {{session('response')}}  
    </div> 
    @endif    



    ///// New
    <div class="form-group">
      <label for="course_id">Choose your desired Course :</label>
      <select class="col-sm-8 form-control" name="course_id">
          @foreach ($courses as $course)
          <option value="{{$course->id}}">{{$course->title}}</option>      
        @endforeach
      </select>
    
    </div>


    

    
    
      <div class="form-group">
        <label for="inputName" class="col-lg-2 control-label">First Name</label>
        <div class="col-sm-8">
          <input type="text" name="first_name" class="form-control" id="inputName" placeholder="First Name">
        </div>
      </div>

        <div class="form-group">
            <label for="inputlastName" class="col-lg-2 control-label">Last Name</label>
            <div class="col-sm-8">
              <input type="text" name="last_name" class="form-control" id="inputlastName" placeholder="Last Name">
            </div>
        </div>

        <div class="form-group">
                <label for="inputNational" class="col-lg-2 control-label">National ID/Iqama</label>
                <div class="col-sm-8">
                  <input type="integer" name="national_id" class="form-control" id="inputNational" placeholder="National ID/Iqama">
                </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <div class="col-sm-8">
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">alternative Email address</label>
        <div class="col-sm-8">
        <input type="email" name="alter_email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alternative Enter email(optional)">
      </div>
      </div>

      <div class="form-group">
        <label for="inputOcc" class="col-lg-2 control-label">Occupation</label>
        <div class="col-sm-8">
          <input type="text" name="occupation" class="form-control" id="inputOcc" placeholder="Occupation">
        </div>
      </div>
        <br>

      <div class="form-group"> 
          <label for="seustudent">Are You SEU Student?</label>
        <div class="form-check">
          <label class="form-check-label">
            <input type="radio" name="seustudent" id="optionsRadios1" value="Yes" >
            Yes
          </label>
        </div>
      </div>

        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" name="seustudent" id="optionsRadios2" value="No">
            No
          </label>
        </div>
        
        <div class="form-group">
          <label for="inputSeuid" class="col-lg-2 control-label">SEU Id</label>   
          <div class="col-sm-8">
            <input type="integer" name="seu_id" class="form-control" id="inputSeuid" placeholder="SEU Id">
          </div>
        </div>

        <div class="form-group">
            <label for="inputBranch" class="col-lg-2 control-label">SEU Branch</label>
            <div class="col-sm-8">
             <input type="text" name="seu_branch" class="form-control" id="inputBranch" placeholder="SEU Branch">
            </div>
      </div>


    <br>
<div class="form-group">
    <label for="inputUni">If you are not SEU student, tell us which institution are you from?</label>
    <div class="col-sm-8">
    <input type="text" name="other_uni"class="form-control" id="inputUni" >
  </div>
</div>

  <br><br> 
<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
 <button type="submit" class="btn btn-primary">Register</button>
    </div>
</div>
        </div>
  </form>
 
@stop

