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
                    <div class="card-body">
                        <h1 class="card-title">Courses</h1>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;font-size: xx-small;"> Sr No </th>
                                    <th style="text-align: center;font-size: xx-small;"> Course Title </th>
                                    <th style="text-align: center;font-size: xx-small;"> Duration </th>
                                    <th style="text-align: center;font-size: xx-small;"> Course Fee </th>
                                    <th style="text-align: center;font-size: xx-small;"> Pre-Requsit </th>
                                    <th style="text-align: center;font-size: xx-small;"> Status </th>
                                    <th style="text-align: center;font-size: xx-small;"> Image </th>
                                    <th style="text-align: center;font-size: xx-small;"> Action </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $list)
                                <tr>
                                    <td style="font-size: xx-small;">{{$list->id}}</td>
                                    <td style="font-size: xx-small;"> {{$list->title}} </td>
                                    <td style="font-size: xx-small;"> {{$list->duration}} </td>
                                    <td style="font-size: xx-small;"> {{$list->fee}} </td>
                                    <td style="font-size: xx-small;"> {{$list->pre}} </td>
                                    <td style="font-size: xx-small;"> {{$list->status}} </td>
                                    <td style="font-size: xx-small;">
                                        <img src="courseimage/{{$list->image}}" alt="">
                                    </td style="font-size: xx-small;">
                                    <td><a class="btn btn-success btn-sm" href="{{url('editcourse',$list->id)}}">Update</a>
                                        <a class="btn btn-danger btn-sm" href="{{url('deletecourse',$list->id)}}">Delete</a>
                                        <a class="btn btn-info btn-sm" href="{{url('showlesson',$list->id)}}">Show Lesson</a>
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