<script src="{{URL::to('/')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="{{URL::to('/')}}/assets/js/custom.js"></script>
    <script src="{{URL::to('/')}}/assets/js/owl.js"></script>
    <script src="{{URL::to('/')}}/assets/js/slick.js"></script>
    <script src="{{URL::to('/')}}/assets/js/isotope.js"></script>
    <script src="{{URL::to('/')}}/assets/js/accordions.js"></script>
    <!--footer script -->

    

    <!-- for admin sidbar in student area Scripts -->

    



    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>

