@include('admin.head')

<body>
    @include('admin.settinglink')

    <div class="container-scroller">





        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')


        <!-- partial -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container">

            @include('admin.settinglink')


            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
            </div>
            @endif
            <div class="page-wrapper  font-robo my-3">
                <div class="">
                    <div class="card card-1">

                        <div class="card-body">

                            <form action="{{url('updatesocial')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="facebook" class="col-sm-2 col-form-label">

                                        <img src="{{URL::to('/')}}/admin/facbook.png" style="width: 40%; position: relative; bottom: 2.5vh;" alt="">

                                    </label>
                                    <div class="col-sm-10">
                                        <a href="{{$setting->fb ?? '#'}}" target="_blank">
                                            <input class="form-control" style="margin-left: 10px;" type="text" placeholder="Enter Your  Phone Number..." name="facebook" value="{{$setting->facebook  ?? ''}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="twitter" class="col-sm-2 col-form-label">
                                        <img src="{{URL::to('/')}}/admin/twitter.png" style="width: 40%; position: relative; bottom: 2.5vh;" alt="">

                                    </label>
                                    <div class="col-sm-10">
                                        <a href="{{$setting->twitter ?? '#'}}">
                                            <input class="form-control" style="margin-left: 10px;" type="text" placeholder="Enter Your Twitter URL..." name="twitter" value="{{$setting->twitter ?? ''}}">

                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="linkedln" class="col-sm-2 col-form-label">
                                        <img src="{{URL::to('/')}}/admin/linkedin.png" style="width: 40%; position: relative; bottom: 2.5vh;" alt="">

                                    </label>
                                    <div class="col-sm-10">
                                        <a href="{{$setting->linkedin ?? ''}}" target="_blank">
                                            <input class="form-control" style="margin-left: 10px;" type="url" placeholder="Enter Your  Phone Number..." name="linkedin" value="{{$setting->linkedin  ?? ''}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="insta" class="col-sm-2 col-form-label">
                                        <img src="{{URL::to('/')}}/admin/insta.png" style="width: 40%; position: relative; bottom: 2.5vh;" alt="">

                                    </label>
                                    <div class="col-sm-10">
                                        <a href="{{$setting->insta ?? ''}}">
                                            <input class="form-control" style="margin-left: 10px;" type="text" placeholder="Enter Your  Phone Number..." name="insta" value="{{$setting->insta  ?? ''}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button type="submit" class="btn btn-primary text-info">

                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>







                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    @include('admin.script');
</body>

</html>