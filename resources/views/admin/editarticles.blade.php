@include('admin.head')

<body>
    <div class="container-scroller">


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        @include('/admin.sidebar')
        <!-- partial -->
        <div class="container">

            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
            </div>
            @endif

            <h1>Update Article</h1>
            <div class="col-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{url('updatearticle',$articleinfo->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" name="title" value="{{$articleinfo->title}}" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Description</label>
                                <input type="text" name="description" value="{{$articleinfo->description}}" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Slug</label>
                                <input type="text" name="slug" value="{{$articleinfo->slug}}" class="form-control" id="exampleInputName1" placeholder="Name">
                            </div>




                            <div class="form-group">
                                <label for="exampleSelectGender">Status</label>
                                <select class="form-control" value="" id="exampleSelectGender" name="status">
                                    <option value="{{$articleinfo->status}}">{{$articleinfo->status}}</option>

                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">

                                <input type="file" value="../articlesimage/{{$articleinfo->image}}" name="image">
                                <img src="../articlesimage/{{$articleinfo->image}}" class="col-sm-3 my-1" alt="">

                            </div>





                            <button type="submit" class="btn btn-primary me-2 text-info">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial -->
    </div>
    @include('admin.script')
</body>

</html>