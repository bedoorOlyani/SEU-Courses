<header>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/create')}}">Add Course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/ticket/create')}}">Add Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/home')}}">List of Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/profile')}}">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/user/register/student')}}">Register Student</a>
      </li>
    </ul>
    
  <form action="/find" method="post" class="form-inline my-2 my-lg-0">
                    @csrf
                    <input type="text" name="q" id="q" class="form-control mr-sm-2" placeholder="Search">
                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0"> Search</button>
                </form>
            </div>
        </div>
</nav>

</header>