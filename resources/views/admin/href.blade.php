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
            <div class="col-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{url('updatecourse',$info->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Course Title</label>
                                <input type="text" value="{{$info->title}}" name="title" class="form-control" id="exampleInputName1" placeholder="Name">

                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Duration</label>
                                <select class="form-control" id="exampleSelectGender" name="duration">
                                    <option>Select</option>
                                    <option value="3 Month">3 Month</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="1 Year">1 Year</option>
                                    <option value="2 Year">2 Year</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputName1">Course Fee</label>
                                <input type="text" value="{{$info->fee}}" name="fee" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Pre-Requsit</label>
                                <input type="text" value="{{$info->pre}}" name="pre" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Upload Image</label>
                                <input type="file" value="{{$info->image}}" name="file" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectGender">Course Status</label>
                                <select class="form-control" id="exampleSelectGender" name="coursestatus">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>


                            <div class="form-group">

                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" name="textarea" value="{{$info->textarea}}" id="exampleTextarea1" rows="4" name="textarea"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary me-2 text-info">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    @include('admin.script');
</body>

</html>