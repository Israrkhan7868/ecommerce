@include('admin.head')

<body>
    <div class="container-scroller">


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        @include('admin.sidebar')

        <!-- partial -->






        <div class="col-lg-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Students</h1>
                    <div class="table-responsive" style="overflow: hidden;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="font-size: xx-small;">ID</th>
                                    <th class="text-center" style="font-size: xx-small;">Name</th>
                                    <th class="text-center" style="font-size: xx-small;">Phone</th>
                                    <th class="text-center" style="font-size: x-small;">Address</th>
                                    <th class="text-center" style="font-size: x-small;">Course Title</th>
                                    <th class="text-center" style="font-size: x-small;">Course Fee</th>
                                    <th class="text-center" style="font-size: x-small;">Fee Status</th>
                                    <th class="text-center" style="font-size: x-small;">Starting Date</th>
                                    <th class="text-center" style="font-size: x-small;">Batch No</th>
                                    <th class="text-center" style="font-size: x-small;">Course Status</th>
                                    <th class="text-center" style="font-size: x-small;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($basicinfo as $info)
                                <tr>
                                    <td style="font-size: xx-small;">{{ $info->id }}</td>
                                    <td style="font-size: xx-small;">{{ $info->name }}</td>
                                    <td style="font-size: xx-small;">{{ $info->phone }}</td>
                                    <td style="font-size: xx-small;">{{ $info->address }}</td>
                                    <td style="font-size: xx-small;">{{ $info->acadmicinfo->coursetitle }}</td>
                                    <td style="font-size: xx-small;">{{ $info->acadmicinfo->coursefee }}</td>
                                    <td style="font-size: xx-small;">{{ $info->acadmicinfo->feestatus }}</td>
                                    <td style="font-size: xx-small;">{{ $info->acadmicinfo->startingdate }}</td>
                                    <td style="font-size: xx-small;">{{ $info->acadmicinfo->batchno }}</td>
                                    <td style="font-size: xx-small;">{{ $info->acadmicinfo->coursestatus }}</td>
                                    <td style="font-size: xx-small;">
                                        <a class="btn btn-success btn-sm"  href="{{url('editstd',$info->id)}}">Update</a>
                                        <a class="btn btn-danger btn-sm" href="{{url('delete',$info->id)}}" >Delete</a>
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
        </div>

        <!-- main-panel ends -->

        <!-- page-body-wrapper ends -->

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
</body>

</html>