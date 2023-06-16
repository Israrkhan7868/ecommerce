@php
use App\Models\Courses;
@endphp




@include('user.head')
<style>
    @media only screen and (max-width: 768px) {
        #coursefeerow {
            margin-bottom: 5vh;
        }
    }

    @media only screen and (max-width: 600px) {
        #fee {
            position: relative;
            bottom: 3.9vh;
            left: 50vw;
        }
    }

    .form-style-9 {
        max-width: 450px;
        background: #FAFAFA;
        padding: 30px;
        margin: 50px auto;
        box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
        border-radius: 10px;
        border: 6px solid #305A72;
    }

    .form-style-9 ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .form-style-9 ul li {
        display: block;
        margin-bottom: 10px;
        min-height: 35px;
    }

    .form-style-9 ul li .field-style {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        padding: 8px;
        outline: none;
        border: 1px solid #B0CFE0;

    }

    .form-style-9 ul li .field-style:focus {
        box-shadow: 0 0 5px #B0CFE0;
        border: 1px solid #B0CFE0;
    }

    .form-style-9 ul li .field-split {
        width: 49%;
    }

    .form-style-9 ul li .field-full {
        width: 100%;
    }

    .form-style-9 ul li input.align-left {
        float: left;
    }

    .form-style-9 ul li input.align-right {
        float: right;
    }

    .form-style-9 ul li textarea {
        width: 100%;
        height: 100px;
    }

    .form-style-9 ul li input[type="button"],
    .form-style-9 ul li input[type="submit"] {
        -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
        -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
        box-shadow: inset 0px 1px 0px 0px #3985B1;
        background-color: #216288;
        border: 1px solid #17445E;
        display: inline-block;
        cursor: pointer;
        color: #FFFFFF;
        padding: 8px 18px;
        text-decoration: none;
        font: 12px Arial, Helvetica, sans-serif;
    }

    .form-style-9 ul li input[type="button"]:hover,
    .form-style-9 ul li input[type="submit"]:hover {
        background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
        background-color: #28739E;
    }
</style>

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

    @include('user.header')

    <!-- Page Content -->
    <section class="bg-light rounded-3" style="min-height: 100vh; position: relative; top: 18vh; ">
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('message')}}
        </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-4" style="height: min-content;">
                    <div class="card  p-4 rounded-3" style="background-color: midnightblue;">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h2 style="color:aliceblue">{{ $course->title }}</h2>
                                <div class="row" id="coursefeerow" style="position: relative; top: 2vh;">
                                    <div class="col-sm-6" style="color:sandybrown"><b>Course Fee</b></div>
                                    <p id="fee" style="color:sandybrown">PKR:{{$course->fee}}</p>
                                </div>


                            </div>




                        </div>
                        <p class="mt-5 " style="height: 20vh; overflow-y: auto;color:aliceblue;line-height: 2;">{{ $course->shortdescription }}</p>


                    </div>
                    <div class="card col-12 my-3 p-4 " style="background-color: #959596;line-height: 2;">
                        <p>{!! ($course->details) !!}</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-light p-4 rounded-3">
                        <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <div class="mask"></div>
                        </div>
                        <video id="courseVideo" class="w-100" controls>
                            <source src="{{asset('introvideos/'. $course->video) }}" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title m-0"><b>{{ $course->title }}</b></h5>
                                <h6 class="text-muted m-0">PKR:{{number_format ($course->fee) }}</h6>
                            </div>
                            <hr class="my-3">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <b>Duration (In months)</b>
                                </div>
                                <div class="text-muted">{{ $course->duration }}</div>
                            </div>
                            <hr class="my-3">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <b>Status</b>
                                </div>
                                <div class="text-muted">{{ $course->status }}</div>
                            </div>
                            <hr class="my-3">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <b>Prerequisite</b>
                                </div>
                                <div class="text-muted">{{ $course->pre }}</div>
                            </div>
                            <hr class="my-3">


                        </div>
                        <!-- Laravel Blade code for the link and the popup form -->
                        <!-- Laravel Blade code for the link and the popup form -->
                        <div class="d-flex justify-content-center align-items-center" style="width: 100%; height: 10vh; background-color: midnightblue; border-radius: 10px;">

                            <a href="#" style="color: aliceblue;" id="enroll-link">Enroll Now (PKR:{{number_format ($course->fee) }})</a>



                            <div id="enroll-form" style="display: none;position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                @if(Auth::check())
                                <form class="form-style-9" action="{{url('stdenroll')}}" method="post" onsubmit="return validatePhoneNumber()">
                                    @csrf
                                    <ul>
                                        <li>
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="col-12 field-style " placeholder="Full Name" />
                                        </li>
                                        <li>
                                            <label for="email">Email</label>

                                            <input type="email" name="email" class="field-style field-full" placeholder="Email" />
                                        </li>

                                        <li>
                                            <label for="coursetitle">Course Title</label>

                                            <input type="text" name="coursetitle" class="col-12 field-style" value="{{ $course->title }}" placeholder="Course Title" onchange="fetchDuration()" readonly />
                                        </li>




                                        <li class="my-3">
                                            <input type="number" name="phone" class="field-style field-split align-left" placeholder="Phone/Whatsapp" />
                                            <select name="batch" class="field-style field-split align-right">
                                                <option value="">Select Batch</option>
                                                @foreach($course->batches()->where('shortdescription', $course->id)->get() as $batch)
                                                <option value="{{ $batch->coursetime }} ({{$batch->coursestarting}} to {{ $batch->courseending }})">starting from ({{$batch->coursestarting}} to {{$batch->courseending}}) || ({{ $batch->coursetime }} )</option>
                                                @endforeach
                                            </select>
                                        </li>
                                        <li>


                                            <input type="submit" value="Enroll" />
                                        </li>

                                    </ul>

                                </form>
                                @else

                                <x-validation-errors class="mb-4" />

                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif



                                <form class="form-style-9" method="POST" action="{{ route('login') }}">
                                    <p style="color: red;">Please Login first</p>
                                    @csrf

                                    <div>
                                        <x-label for="email" value="{{ __('Email') }}" />
                                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    </div>

                                    <div class="mt-4">
                                        <x-label for="password" value="{{ __('Password') }}" />
                                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                    </div>

                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                        @endif



                                        <input type="submit" value="Login" class="btn btn-info ml-4 bg-primary">

                                    </div>
                                    <div class="row mt-2">
                                        <p style="color: red;" class="col-6 my-2">If you don't have account</p>
                                        <a href="{{ route('register') }}" style="height: 7vh;" class="btn bg-info text-white">Create Account</a>
                                    </div>


                                </form>






                                @endif
                                <div class="alert" style="display:none;"></div>

                            </div>

                        </div>












                    </div>
                </div>
            </div>

            @include('homepages.course')


        </div>
        @include('user.footer')
    </section>




    @include('user.script')
    <!-- JavaScript code to handle the popup form -->
    <script>
        // Get references to the link and the form elements
        const enrollLink = document.getElementById("enroll-link");
        const enrollForm = document.getElementById("enroll-form");

        // Add a click event listener to the link
        enrollLink.addEventListener("click", function(event) {
            // Prevent the default link behavior
            event.preventDefault();

            // Show the form
            enrollForm.style.display = "block";
        });

        document.addEventListener("click", function(event) {
            // If the click target is not inside the form or the link, hide the form
            if (!enrollForm.contains(event.target) && event.target !== enrollLink) {
                enrollForm.style.display = "none";
            }
        });

        function validatePhoneNumber() {
            var phoneNumber = document.getElementsByName("phone")[0].value;
            if (phoneNumber.length < 11 || phoneNumber.length > 11) {
                alert("Please enter a valid phone number");
                return false;
            }
            return true;
        }
    </script>

    <script>
        const durationInput = document.getElementById('duration');
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');

        // Add event listeners to duration and start date inputs
        durationInput.addEventListener('input', updateEndDate);
        startDateInput.addEventListener('input', updateEndDate);

        function updateEndDate() {
            const duration = parseInt(durationInput.value, 10);
            const startDate = new Date(startDateInput.value);
            if (!isNaN(duration) && startDate instanceof Date && !isNaN(startDate.getTime())) {
                const endDate = new Date(startDate.getTime());
                endDate.setMonth(endDate.getMonth() + duration);
                endDateInput.value = endDate.toISOString().slice(0, 10);
            }
        }
    </script>


</body>



</html>