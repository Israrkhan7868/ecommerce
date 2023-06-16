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
            <div class="col-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{url('uploadsliders')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Sub Title</label>
                                <input type="text" name="subtitle" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>


                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" id="exampleSelectGender" name="status">
                                    <option>Select</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
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
</body>

</html>