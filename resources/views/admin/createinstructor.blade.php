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
                        <form class="forms-sample" action="{{url('uploadinstructor')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Qualification</label>
                                <input type="text" name="qualification" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>


                            <div class="col-sm-12 form-group">
                                <label for="qualification">Detail:</label>
                                <textarea type="text" name="summary" class="form-control tinymce-editor" id="summernote" placeholder="Enter your Detail">
                                </textarea>
                            </div>

                            <div class="form-group">

                                <input type="file" name="image">


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
    @include('admin.tinymceeditor')


    

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</body>

</html>