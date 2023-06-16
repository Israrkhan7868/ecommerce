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
                        <form class="forms-sample" action="{{url('updateinstructor',$instructor->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" value="{{$instructor->name}}" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Qualification</label>
                                <input type="text" name="qualification" value="{{$instructor->qualification}}" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="email" name="email" value="{{$instructor->email}}" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>


                            <div class="col-sm-12 form-group">
                                <label for="qualification">Detail:</label>
                                <input type="text" name="summary" value="{{$instructor->summary}}" class="form-control summernote" id="summernote" placeholder="Enter your Detail">
                            </div>

                            <div class="form-group">

                                <input type="file" name="image">
                                <img src="../instructorimage/{{$instructor->image}}"  class="col-sm-3 my-1" alt="">


                            </div>


                            <div>
                                <button type="submit" class="btn btn-primary me-2 text-info">Submit</button>
                                <div style="position: relative; left:20%; bottom: 2.7em;">
                                    <a class="btn btn-success" href="{{url('back')}}">Back</a>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    @include('admin.script')

    <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</body>

</html>