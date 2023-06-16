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
            <form action="{{url('updatecategory',$category->id)}}" method="POST" class="my-4" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-sm-10 form-group">
                        <label for="name">Title:</label>
                        <input type="text" name="title" value="{{$category->title}}" class="form-control" id="name" placeholder="Enter your Title">
                    </div>


                    <div class="col-sm-6  form-group">
                        <label for="course">Parent ID:</label>
                        <select name="parentid" id="course" class="form-control">
                            <option value="">{{$category->title}}</option>
                            @foreach (App\Models\Category::getCategoryTitles() as $id => $title)
                            <option value="{{ $title }}">{{ $title }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-6   form-group">
                        <label for="image">Image:</label>
                        <input type="file" name="image" class="form-control" id="course_fee_input">
                        <img src="../categoryimage/{{$category->image}}" class="col-sm-3 my-1" alt="">
                    </div>



                </div>
                <button type="submit" class="btn btn-primary text-primary col-sm-5 my-4" style="margin-left: 16rem;">Submit</button>


        </div>

    </div>
    @include('admin.script')
    


    <!-- End custom js for this page -->
</body>

</html>