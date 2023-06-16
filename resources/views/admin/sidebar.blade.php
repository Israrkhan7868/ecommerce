<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="{{URL::to('/')}}/courseimage/israr.jpg" >
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">Punjab College</span>
            <span class="text-secondary text-small">Principle</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{url('back')}}">
          <span class="menu-title">Dashboard</span>
          <i class=" "></i>
        </a>
      </li>

      <li class="nav-item">
        <select class="form-select my-1 text-success  menu-title btn btn-outline-secondary btn-fh" style="font-size: 13px;" onchange="location.href = this.value;">
        <option value="" class="bg-light text-dark" style="text-align: center;"> Menage Student</option>
    <option value="{{url('stdata')}}" class="bg-light text-dark">Add Student</option>
    <option value="{{url('viewstudentdata')}}" class="bg-light text-dark">Student List</option>
        </select>
      </li>


      <li class="nav-item ">
        <select class="form-select my-1 text-success  btn btn-outline-secondary btn-fh" onchange="location.href = this.value;" >
        <option value="" class="bg-light text-dark">Menage Course</option>
    <option value="{{url('addcourse')}}" class="bg-light text-dark">Add Course</option>
    <option value="{{url('viewcourse')}}" class="bg-light text-dark">Course List</option>
    <option value="{{url('addbatches')}}" class="bg-light text-dark">Add Batches</option>

        </select>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('showsliders')}}">
          <span class="menu-title">Show Sliders</span>
          <i class=" "></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('showarticles')}}">
          <span class="menu-title">Show Articles</span>
          <i class=" "></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('showcategory')}}">
          <span class="menu-title">Categories</span>
          <i class=" "></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('showinstructor')}}">
          <span class="menu-title">Instructors</span>
          <i class=" "></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('setting')}}">
          <span class="menu-title">Setting</span>
          <i class=" "></i>
        </a>
      </li>

      
    </ul>
  </nav>