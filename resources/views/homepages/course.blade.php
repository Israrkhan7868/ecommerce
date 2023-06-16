<div style="display: flex; align-items: center; justify-content: center; background-color: midnightblue; width: 100vw; height: 16vh; position: relative; top: 15vh; bottom: 8vh;">
    <h1 style="font-size:3em;color:white; ">Our Courses </h1>
</div>

<div class="products" style="position: relative;top: 6vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All Categories</li>
                        <li data-filter=".des">IT</li>
                        <li data-filter=".dev">Medical</li>
                        <li data-filter=".gra">Arts</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid" style="height: 100%;">
                        @foreach (App\Models\Courses::getcourse() as $list)
                        <a href="{{url('coursedetail',$list->id)}}">
                            <div class="col-lg-4 col-md-4 all des">
                                <div class="product-item">

                                    <a class="card" href="{{url('coursedetail',$list->id)}}"><img style="width: 100%; height: 200px;" src="{{URL::to('/')}}/courseimage/{{$list->image}}" alt=""></a>
                                    <div class="down-content">
                                        <a href="{{url('coursedetail',$list->id)}}">
                                            <h4 class="col-12" style="position: relative; right: 10%;"> {{$list->title}}</h4>
                                        </a>
                                        <h6>RS:{{ number_format($list->fee) }}</h6>

                                        <p style="height: 12vh;overflow: hidden;">{{$list->shortdescription}}</p>


                                    </div>

                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>
            


            <div class="col-md-12" style="position: relative; left: 50%;">
                
                    {{ App\Models\Courses::getcourse()->links() }}
                
            </div>
        </div>
    </div>
    @include('user.whatsapp')


</div>