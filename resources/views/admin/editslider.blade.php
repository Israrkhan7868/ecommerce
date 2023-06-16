

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
                        <form class="forms-sample" action="{{url('updatesliders',$basicinfoo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" name="title" value="{{$basicinfoo->title}}"  class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Sub Title</label>
                                <input type="text" name="subtitle" value="{{$basicinfoo->subtitle}}"  class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            
                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" value="{{$basicinfoo->status}}" id="exampleSelectGender" name="status">
                                    <option>Select</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                
                                <input type="file" value="{{$basicinfoo->image}}" name="image">
                                <img src="../sliderimage/{{$basicinfoo->image}}" class="col-sm-3 my-1" alt="">
                            </div>


                            
                            <button type="submit" class="btn btn-primary me-2 text-info">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial -->
    </div>
    @include('admin.script');
</body>

</html>