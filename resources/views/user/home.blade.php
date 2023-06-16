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
    <!-- Banner Starts Here -->
    @include('user.carousel')
    @include('user.whatsapp')

        <!-- Banner Ends Here -->
    @include('homepages.course')
    @include('homepages.about')
    @include('homepages.contactus')
    @include('user.footer')
    @include('user.script')
</body>

</html>