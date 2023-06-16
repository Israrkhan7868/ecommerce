@include('admin.head')

<body>

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

                            <h2 class="title" style="font-size: x-large; text-align: center;">General Setting</h2>
                            <form method="POST" action="{{ url('update')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="input-group">
                                    <label for="name" class="font-robo" style="font-size: large; font-weight: 500;margin-right: 10px;">Company Name</label>
                                    <input class="" style="margin-left: 10px;" type="text" placeholder="Enter Company Name..." name="name" value="{{$setting->name  ?? ''}}">
                                </div>
                                <div class="input-group">
                                    <label for="address" class="font-robo" style="font-size: large; font-weight: 500;margin-right: 10px;">Address</label>
                                    <input class="" style="margin-left: 10px;" type="text" placeholder="Enter Company Name..." name="address" value="{{$setting->address  ?? ''}}">
                                </div>

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label for="contact" class="font-robo" style="font-size: large; font-weight: 500;margin-right: 10px;">Contact</label>
                                            <input class="" style="margin-left: 10px;" type="number" placeholder="Enter Your  Phone Number..." name="contact" value="{{$setting->contact  ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label for="email" class="font-robo" style="font-size: large; font-weight: 500;margin-right: 10px;">Email</label>
                                            <input class="" style="margin-left: 10px;" type="email" placeholder="Enter Your  Phone Number..." name="email" value="{{$setting->email  ?? ''}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label for="logo" class="font-robo" style="font-size: large; font-weight: 500;margin-right: 10px;">Logo</label>
                                            <input class="" style="margin-left: 10px;" type="file" multiple placeholder="Enter Your Phone Number..." name="logo[]">
                                            @if ($setting && $setting->logo)
                                            @foreach (json_decode($setting->logo) as $logo)
                                            <img src="{{ asset('logo/'.$logo) }}" style="width: 150px; margin-top: 3px;" alt="">
                                            <a href="{{ route('unlinklogo', $logo) }}" style="height: fit-content; position: relative; right: 13%;"><i class="mdi mdi-close" style="color: red;  font-size: x-large; position: relative; left: 1.5rem; bottom: 0.4rem;"></i></a>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>



                                    <div class="col-2">
                                        <div class="input-group">
                                            <label for="icon" class="font-robo" style="font-size: large; font-weight: 500;margin-right: 10px;">favicon</label>
                                            <input class="" style="margin-left: 10px;" type="file" placeholder="Enter Your  Phone Number..." name="icon[]" multiple>
                                            @if($setting && $setting->icon)
                                            @foreach(json_decode($setting->icon) as $icon)
                                            <img src="{{ asset('icon/'.$icon)  }}" style="width: 150px; margin-top: 3px;" alt="">
                                            <a href="{{ route('unlinkicon', $icon) }}" style="height: fit-content; position: relative; right: 13%;"><i class="mdi mdi-close" style="color: red;  font-size: x-large; position: relative; left: 1.5rem; bottom: 0.4rem;"></i></a>
                                            @endforeach
                                            
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                
                                


                                


                                <button type="submit" class="btn btn-primary me-2 text-info">Submit</button>
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