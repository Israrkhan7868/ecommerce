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


            <h1>Add Aritcal</h1>
            <form action="{{url('uploadlesson')}}" method="POST" class="my-4" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="course_id" value="{{ $courseid }}">


                    <div class="col-sm-6  form-group">
                        <label for="name">Lesson Title:</label>
                        <input type="text" name="lessontitle" class="form-control" id="name" placeholder="Enter your Title">
                    </div>
                    <div class="col-sm-6  form-group">
                        <label for="contact">Lesson Detail</label>
                        <input type="text" name="lessondetail" class="form-control" id="contact" placeholder="Enter your Slug">
                    </div>

                    <div class="col-sm-6  form-group">
                        <label for="contact">Document</label>
                        <input type="text" name="document" class="form-control" id="contact" placeholder="Enter your Slug">
                    </div>
                    <div class="col-sm-6  form-group">
                        <label for="contact">Video</label>
                        <input type="file" name="video" class="form-control" id="video" placeholder="Enter your Slug">
                        <p style="color: red;">@if($errors->has('video'))
                            {{$errors->first('video')}}
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-6  form-group">
                        <label for="contact">Duration</label>
                        <input type="time" name="duration" class="form-control" id="contact" placeholder="Enter your Slug">
                    </div>






                </div>
                <button type="submit" class="btn btn-primary text-primary col-sm-5 my-4" style="margin-left: 16rem;">Submit</button>

                <div class="my-3">
                            <a class="btn btn-success" href="{{ url()->previous() }}">Back</a>
                        </div>
        </div>

    </div>
    @include('admin.script')
    <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


    <!-- End custom js for this page -->
</body>

</html>