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
                        <a class="btn btn-info btn-small" href="{{ url('lesson/'.$courseid) }}">Add Lesson</a>

                    </div>
                    <div class="card-body">
                        <h1 class="card-title">Course Lesson</h1>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"> Sr No </th>
                                    <th style="text-align: center;"> Course ID </th>
                                    <th style="text-align: center;"> Lesson Title </th>
                                    <th style="text-align: center;">Lesson Detail </th>
                                    <th style="text-align: center;"> Document </th>
                                    <th style="text-align: center;"> Video </th>
                                    <th style="text-align: center;"> Duration </th>
                                    <th style="text-align: center;"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articlesinfo as $info)
                                <tr>
                                    <th style="text-align: center;"> {{$info->id}} </th>
                                    <th style="text-align: center;"> {{$info->course_id}} </th>
                                    <th style="text-align: center;"> {{$info->lessontitle}} </th>
                                    <th style="text-align: center;"> {{$info->lessondetail}} </th>
                                    <th style="text-align: center;">{{$info->document}} </th>
                                    <th style="text-align: center;"><video width="40px"  controls>
                                            <source src="{{ asset('lessonvideos/'.$info->video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </th>
                                    <th style="text-align: center;"> {{$info->duration}} </th>
                                    <th style="font-size: xx-small; text-align: center;">
                                        <a class="btn btn-success btn-sm"  href="{{url('editlesson',$info->id)}}">Update</a>
                                        <a class="btn btn-danger btn-sm"  href="{{url('deletelesson',$info->id)}}" >Delete</a>
                                    </th>
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