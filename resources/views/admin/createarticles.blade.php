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


            <h1>Add Aritcal</h1>
            <form action="{{url('uploadarticles')}}" method="POST" class="my-4" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-sm-6  form-group">
                        <label for="name">Title:</label>
                        <input type="text" name="title" class="form-control" id="name" placeholder="Enter your Title">
                    </div>
                    <div class="col-sm-6  form-group">
                        <label for="contact">Slug:</label>
                        <input type="text" name="slug" class="form-control" id="contact" placeholder="Enter your Slug">
                    </div>



                    <div class="col-sm-6  form-group">
                        <label for="course">Status:</label>
                        <select class="form-control" name="status" id="status">
                            <option>select</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>

                    <div class="col-sm-6   form-group">
                        <label for="course_fee">Page image:</label>
                        <input type="file" name="image" class="form-control" id="course_fee_input">
                    </div>

                    
                    <div class="col-sm-12 form-group">
                        <label for="qualification">Detail:</label>
                        <textarea type="text" name="description" class="form-control tinymce-editor" id="summernote" placeholder="Enter your Detail"> 
                        </textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary text-primary col-sm-5 my-4" style="margin-left: 16rem;">Submit</button>


        </div>

    </div>
    @include('admin.script')
    @include('admin.tinymceeditor')


    <!-- End custom js for this page -->
</body>

</html>