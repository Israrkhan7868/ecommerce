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

            <h1>Add Slider</h1>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{url('uploadbatches')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="course">Course Title</label>
                                <select name="coursetitle" id="course" class="form-control" onchange="updateCourseFee()">
                                    <option value="">Select</option>
                                    @foreach (App\Models\Courses::getCourseTitles() as $id => $title)
                                    <option value="{{ $title }}" data-id="{{ $id }}" data-fee="{{ App\Models\Courses::getCourseFee($id) }}">{{ $title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input type="hidden" name="course_id" id="course_id" value="{{ $id }}">


                            <div class="form-group">
                                <label for="exampleInputName1">Course Time</label>
                                <input type="text" name="coursetime" class="form-control" value=""  placeholder="Name">
                            </div>


                            <div class="form-group">
                                <label for="duration">Duration (in months)</label>
                                <input type="number" name="duration" class="form-control" id="duration">
                            </div>

                            <div class="form-group">
                                <label for="start_date">Starting Date</label>
                                <input type="date" name="coursestarting" class="form-control" id="start_date">
                            </div>

                            <div class="form-group">
                                <label for="end_date">Ending Date</label>
                                <input type="date" name="courseending" class="form-control" id="end_date" readonly>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary me-2 text-info">Submit</button>
                                <a class="btn btn-success" href="{{url('back')}}">Back</a>
                            </div>

                        </form>

                        <script>
                            const durationInput = document.getElementById('duration');
                            const startDateInput = document.getElementById('start_date');
                            const endDateInput = document.getElementById('end_date');

                            // Add event listeners to duration and start date inputs
                            durationInput.addEventListener('input', updateEndDate);
                            startDateInput.addEventListener('input', updateEndDate);

                            function updateEndDate() {
                                const duration = parseInt(durationInput.value, 10);
                                const startDate = new Date(startDateInput.value);
                                if (!isNaN(duration) && startDate instanceof Date && !isNaN(startDate.getTime())) {
                                    const endDate = new Date(startDate.getTime());
                                    endDate.setMonth(endDate.getMonth() + duration);
                                    endDateInput.value = endDate.toISOString().slice(0, 10);
                                }
                            }
                        </script>

                       
                        <div class="form-group">
                            <label for="exampleInputName1">Course Time</label>
                            <input type="text" name="coursetime" class="form-control" value="" id="coursetime" placeholder="Name">
                        </div>

                        <script>
                            // Get the input elements
                            var courseTimeInput = document.getElementById('coursetime');
                            var startdatenput = document.getElementById('start_date');
                            var enddateinput = document.getElementById('end_date');

                            // Listen for changes in the start and end date inputs
                            startdatenput.addEventListener('change', updateCourseTime);
                            enddateinput.addEventListener('change', updateCourseTime);

                            // Function to update the course time field
                            function updateCourseTime() {
                                // Get the selected course title and starting and ending dates
                                var courseTitle = document.getElementById('course').value;
                                var startDate = startdatenput.value;
                                var endDate = enddateinput.value;

                                // Set the value of the course time field
                                courseTimeInput.value = courseTitle + ' (' + startDate + ' - ' + endDate + ')';
                            }
                        </script>





                    </div>
                </div>
            </div>
        </div>

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    @include('admin.script')


</body>

</html>