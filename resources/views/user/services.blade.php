@php
use App\Models\Courses;
@endphp
@include('user.head')

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @include('user.header')

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">

    </div>


    @include('homepages.course')



    


    <!-- Bootstrap core JavaScript -->
    @include('user.script')



</body>

</html>