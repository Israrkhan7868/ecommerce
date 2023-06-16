@include('admin.head')

<body>
    <div class="container-scroller">


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        @include('admin.sidebar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">


                <div class="card">
                    <div style="position: relative; left: 80%;top:13%">
                        <a class="btn btn-info btn-small" href="{{url('category')}}">Add Category</a>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">Categories</h1>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"> Sr No </th>
                                    <th style="text-align: center;"> Title </th>
                                    <th style="text-align: center;"> Parent Id </th>
                                    <th style="text-align: center;"> Image </th>
                                    <th style="text-align: center;"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($articlesinfo as $info)    
                            <tr>
                               
                                <td style="text-align: center;">{{$info->id}}</td>
                                <td style="text-align: center;">{{$info->title}}</td>
                                <td style="text-align: center;">{{$info->parentid}}</td>
                                <td style="text-align: center;"><img style="align-items: center;" src="categoryimage/{{$info->image}}" alt=""></td>
                                    <td style="font-size: xx-small; text-align: center;">
                                        <a class="btn btn-success btn-sm"  href="{{url('editcategory',$info->id)}}">Update</a>
                                        <a class="btn btn-danger btn-sm"  href="{{url('deletecategory',$info->id)}}" >Delete</a>
                                    </td>
                               
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                        <div class="my-3">
                            <a class="btn btn-success" href="{{url('back')}}">Back</a>
                        </div>

                    </div>

                </div>
            </div>





            @include('admin.script')
</body>

</html>