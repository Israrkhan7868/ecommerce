@php
use App\Models\Courses;
@endphp
<div class="best-features" style="position: relative; top: 13vh;">
        <div class="container">
        @foreach (App\Models\Seo::getseo() as $list)
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                    <h1>{!! ($list->description) !!}</h1>
                        <p>{!! ($list->aboutus) !!}</p>
                        
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/feature-image.jpg" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('user.whatsapp')

    </div>

