@include('admin.head')
<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        @include('admin.sidebar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">


                <div class="card">
                    <div style="position: relative; left: 80%;top:13%">
                    <a class="btn btn-info btn-small" href="{{url('sliders')}}">Add Slider</a>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title">Sliders</h1>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;"> Sr No </th>
                                    <th style="text-align: center;"> Title </th>
                                    <th style="text-align: center;"> Subtitle </th>
                                    <th style="text-align: center;"> Status </th>
                                    <th style="text-align: center;"> Image </th>
                                    <th style="text-align: center;"> Action </th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliderinfo as $info)
                                <tr>
                                    <td style="text-align: center;">{{$info->id}}</td>
                                    <td style="text-align: center;">{{$info->title}}</td>
                                    <td style="text-align: center;">{{$info->subtitle}}</td>
                                    <td style="text-align: center;">{{$info->status}}</td>
                                    <td style="text-align: center;"><img style="align-items: center;" src="sliderimage/{{$info->image}}" alt=""></td>
                                    <td style="font-size: xx-small; text-align: center;">
                                        <a class="btn btn-success btn-sm"  href="{{url('edit',$info->id)}}">Update</a>
                                        <a class="btn btn-danger btn-sm"  href="{{url('deletesliders',$info->id)}}" >Delete</a>
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