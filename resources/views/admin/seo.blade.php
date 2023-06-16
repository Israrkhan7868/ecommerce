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

            <h1>About us</h1>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{url('updateseo')}}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="keyword">Keyword</label>
                                <input type="text" name="keyword" class="form-control" id="keyword" value="{{$setting->keyword  ?? ''}}" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description" value="{{$setting->description  ?? ''}}" placeholder="Name">
                            </div>

                            <div class="col-sm-12 form-group">
                                <label for="aboutus">About Us</label>
                                <textarea type="text" name="aboutus" class="form-control tinymce-editor" id="summernote" value="{{$setting->aboutus  ?? ''}}" placeholder="Enter your Detail">
                                {{$setting->aboutus ?? ''}}</textarea>
                            </div>

                            


                            <div class="form-group" id="map">
                                <label for="map">Map</label>

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.2168094492126!2d73.05016291477251!3d33.70333834348391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df950787a46b87%3A0x38d56dc761e05e4f!2sPIMS%20Hospital%20Islamabad!5e0!3m2!1sen!2s!4v1681113696320!5m2!1sen!2s" width="1000" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                
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
    @include('admin.script')

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    @include('admin.tinymceeditor')

    

    


</body>

</html>