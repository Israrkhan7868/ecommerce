<div class="banner header-text">
        <div class="owl-banner owl-carousel">
            @foreach($sliders as $slider)
            <div>
                <img style="height: 90vh; width: 100vw; object-fit: cover; " src="sliderimage/{{$slider->image}}">
                <div class="text-content">
                    <h4>{{$slider->title}}</h4>
                    <h2>{{$slider->subtitle}}</h2>
                    <a style="position: relative;right: 23em; top: 2rem; background: linear-gradient(to right,#bf953F,#fcf6ba,#b38728,#fbf5b7,#aa771c); padding: 8px;" href="#">Show Details</a>
                </div>
                </img>
            </div>
            @endforeach
        </div>
    </div>