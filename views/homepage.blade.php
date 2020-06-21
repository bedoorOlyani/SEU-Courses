@extends('layout')

@section('content')
    
<div> <h1> List of Courses </h1>
    <hr>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope='col'>Course id</th>
          <th scope="col">Image</th>
          <th scope="col">Course Name</th>
          <th scope="col">Location</th>
          <th scope="col">Start Day</th>
          <th scope="col">End Day</th>
          <th scope="col">Keyword</th>
          <th scope="col">Enroll now </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <th><img src="{{$item->image}}" alt="{{$item->image}}" width="200px;" height="200px;"></th> 
          <td>{{$item->name}}</td>
          <td>{{$item->location}}</td>
          <td>{{$item->start_day}}</td>
          <td>{{$item->end_day}}</td>
          <td>{{$item->keyword}}</td>
          <td> <a href="/register">
            <button type="button" class="btn btn-primary">Register</button>
              </a> 
          </th> 
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@stop