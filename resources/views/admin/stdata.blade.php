@php
use App\Models\Courses;
@endphp

@include('admin.head')
    
    



<body>
  <div class="container-scroller">
    

    <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
    <!-- partial -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container">

      @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}
      </div>
      @endif

      <h1>Course Registration Form</h1>
      <form action="{{url('data')}}" method="POST" class="my-4">
        @csrf
        <div class="row">
          <div class="col-sm-5 mx-6">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="cnic">CNIC:</label>
              <input type="text" name="cnic" class="form-control" id="cnic" placeholder="Enter your CNIC number">
            </div>
            <div class="form-group">
              <label for="qualification">Qualification:</label>
              <input type="text" name="qualification" class="form-control" id="qualification" placeholder="Enter your highest qualification">
            </div>
            <div class="form-group">
              <label for="contact">Contact No:</label>
              <input type="text" name="phone" class="form-control" id="contact" placeholder="Enter your contact number">
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="Enter your address">
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth:</label>
              <input type="date" name="db" class="form-control" id="dob" placeholder="Enter your date of birth">
            </div>
          </div>
          <div class="col-sm-5 mx-6">
            <div class="form-group">
              <label for="course">Select a course:</label>
              <select name="title" id="course" class="form-control" onchange="updateCourseFee()">
                <option value="">Select</option>
                @foreach (App\Models\Courses::getCourseTitles() as $id => $title)
                <option value="{{ $title }}" data-fee="{{ App\Models\Courses::getCourseFee($id) }}">{{ $title }} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="fee">Course Fee:</label>
              <input type="text" name="coursefee" class="form-control" id="fee" placeholder="Enter the course fee" readonly>
            </div>
            
            <div class="form-group">
              <label for="status">Fee Status:</label>
              <select class="form-control" name="feestatus" id="status">
                <option value="">Select</option>
                <option value="Paid">Paid</option>
                <option value="Unpaid">Unpaid</option>
              </select>
            </div>
            <div class="form-group">
              <label for="start">Starting Date:</label>
              <input type="date" name="startingdate" class="form-control" id="start" placeholder="Enter the course starting date">
            </div>
            <div class="form-group">
              <label for="batch">Batch No:</label>
              <input type="text" name="batchno" class="form-control" id="batch" placeholder="Enter the course batch number">
            </div>
            <div class="form-group">
              <label for="coursestatus">Course Status:</label>
              <select class="form-control" name="coursestatus" id="coursestatus">
                <option value="">Select</option>
                <option value="Completed">Completed</option>
                <option value="Ongoing">Ongoing</option>
              </select>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary text-primary">Submit</button>
      </form>
    </div>

    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  <script>
        function updateCourseFee() {
            var courseSelect = document.getElementById('course');
            var courseFeeInput = document.getElementById('fee');
            var selectedCourse = courseSelect.options[courseSelect.selectedIndex];
            var courseFee = selectedCourse.getAttribute('data-fee');
            courseFeeInput.value = courseFee;
            }

            document.getElementById("fee").addEventListener("keydown", function(event) {
        event.preventDefault();});
    </script>
    @include('admin.script')

</body>

</html>