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

            <h1>Course Registration Form</h1>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="{{url('updatecourse',$info->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-sm-6 form-group">
                                    <label for="exampleInputName1">Course Title</label>
                                    <input type="text" class="form-control" value="{{ $info->title}}" name="title">
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label for="exampleSelectGender">Instructor</label>
                                    <select class="form-control" id="exampleSelectGender" name="instructor">
                                        <option value="{{ $info->instructor }}">{{ $info->instructor }}</option>
                                        @foreach (App\Models\Instructor::getinstructor() as $id => $name)
                                        
                                        <option value="{{ $name }}">{{ $name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-6  form-group">
                                    <label for="course">Categories</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="">{{$info-> category }}</option>
                                        @foreach (App\Models\Category::getCategoryTitles() as $id => $title)
                                        <option value="{{ $title }}">{{ $title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class=" col-sm-6 form-group">
                                    <label for="exampleSelectGender">Duration</label>
                                    <select class="form-control" id="exampleSelectGender" name="duration">
                                        <option>{{$info-> duration}}</option>
                                        <option value="3 Month">3 Month</option>
                                        <option value="6 Month">6 Month</option>
                                        <option value="1 Year">1 Year</option>
                                        <option value="2 Year">2 Year</option>
                                    </select>
                                </div>


                                <div class="col-sm-6 form-group">
                                    <label for="exampleInputName1">Course Fee</label>
                                    <input type="text" value="{{$info->fee}}" name="fee" class="form-control" id="exampleInputName1" placeholder="Name">
                                </div>




                                <div class="col-sm-6 form-group">
                                    <label for="exampleInputName1">Pre-Requsit</label>
                                    <input type="text" name="pre" value="{{$info-> pre}}" class="form-control" id="exampleInputName1" placeholder="Name">
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label for="exampleInputName1">Short Description</label>
                                    <input type="text" name="shortdescription" value="{{$info->shortdescription}}" class="form-control" id="exampleInputName1" placeholder="Name">
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label for="exampleSelectGender">Course Status</label>
                                    <select class="form-control" id="status" name="status">
                                        
                                        <option value="Active">Active</option>
                                        <option value="Inactive" @if($info->status=='Inactive'){{'selected'}} @endif  >Inactive</option>
                                    </select>
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label for="exampleInputName1">Upload Image</label>
                                    <input type="file" name="file" class="form-control" id="exampleInputName1" placeholder="Name">
                                    <img src="../courseimage/{{$info-> image}}" style="width: 8rem; height: 8rem;" alt="">
                                    <a>Remove Image</a>
                                </div>

                                <div class="col-sm-6  form-group">
                                    <label for="contact">Video</label>
                                    <input type="file" name="video" class="form-control" id="video" placeholder="Enter your Slug">
                                    <p>@if($errors->has('video'))
                                        {{$errors->first('video')}}
                                        @endif
                                    </p>
                                </div>

                                


                                <div class="col-sm-12 form-group">
                                    <label for="qualification">Detail:</label>
                                    <textarea name="details" class="form-control tinymce-editor" id="details">
                                    {{$info->details}}
                                    </textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2 text-info">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    @include('admin.script')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
    <script type="text/javascript">
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link image | ' +
            'print preview media fullpage | ' +
            'forecolor backcolor emoticons | ' +
            'code help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>
</body>

</html>