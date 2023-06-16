@php
use App\Models\Sociallink;
@endphp
<body>
    
    @foreach (App\Models\Sociallink::getlink() as $list)
    <footer class="footer-08">
        <div class="container-fluid px-lg-5">

        <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 py-5">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">Aikcadmy</h2>
                            <p>We believe in redefining the future of mobile world in a most interesting way by requiring minimal human interaction..</p>
                            <ul class="ftco-footer-social p-0">
                                <li class="ftco-animate"><a href="{{$list->twitter ?? ''}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="{{$list->facebook ?? ''}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="{{$list->whatsapp ?? ''}}" target="_blank" data-toggle="tooltip" data-placement="top" title="whatsapp"><span class="ion-logo-whatsapp"></span></a></li>
                                <li class="ftco-animate"><a href="{{$list->linkesin ?? ''}}" target="_blank" data-toggle="tooltip" data-placement="top" title="linkrdin"><span class="ion-logo-linkedin"></span></a></li>

                            </ul>
                        </div>
                        @endforeach
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-9">
                                    <div class="row">
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Quick Links</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="{{url('services')}}" class="py-1 d-block">Our Courses</a></li>
                                                <li><a href="{{url('aboutus')}}" class="py-1 d-block">Know About Aikcadmy</a></li>
                                                <li><a href="{{url('cotactus')}}" class="py-1 d-block">Contact Us</a></li>
                                                <li><a href="{{url('services')}}" class="py-1 d-block">Enroll Now</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">About</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Our Instructor</a></li>
                                                <li><a href="{{url('services')}}" class="py-1 d-block">Courses</a></li>
                                                <li><a href="#" class="py-1 d-block">Careers</a></li>
                                                <li><a href="{{url('articals')}}" class="py-1 d-block">Articals</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <h2 class="footer-heading">Resources</h2>
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="py-1 d-block">Security</a></li>
                                                <li><a href="#" class="py-1 d-block">Global</a></li>
                                                <li><a href="#" class="py-1 d-block">Charts</a></li>
                                                <li><a href="#" class="py-1 d-block">Privacy</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5">
                        <div class="col-md-12">
                            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="" target="_blank">Israr Khan</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>



</body>

</html>