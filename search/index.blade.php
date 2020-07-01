@extends('layouts.app')
@section('admin_content')




    <div class="col-md-10 offset-md-2">
                    @if( session('status'))
                        <div class="alert alert-info">
                            {{ session('status')}}
                        </div>
                    @endif
                    <div class="row">

@foreach ($courses as $course)
<div class="col-md-4">
  <div class="card mb-4 shadow-sm">
  <img width="100%" class="bd-placeholder-img card-img-top" src="{{url('uploads/'.$course->image)}}"/>
    <div class="card-body">
    <p class="card-text">
    <a href="{{url('course/'.$course->id)}}">
      {{$course->title}}
    </a>
    </p>
      <div class="d-flex justify-content-between align-items-center">
        <small class="text-muted">{{$course->location}}</small>
      </div>
      </br>
      <div class="d-flex justify-content-between align-items-center">
        <small class="text-muted">{{$course->current_status}}</small>
      </div>
    </div>
  </div>
</div>
@endforeach
    


@endsection