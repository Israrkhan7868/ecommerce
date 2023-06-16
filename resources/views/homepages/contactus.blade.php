@php
use App\Models\Sociallink;
@endphp

<div class="best-features" style="position: relative; top: 13vh;">
    <div class="container">
        @foreach (App\Models\Sociallink::getlink() as $list)
        <div class="row">

            <div class="col-12">
                <div class="section-heading">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-0" style="height: 100vh;">
                <div class="embed-responsive embed-responsive-16by9" style="height: 65vh;" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.2168094492126!2d73.05016291477251!3d33.70333834348391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df950787a46b87%3A0x38d56dc761e05e4f!2sPIMS%20Hospital%20Islamabad!5e0!3m2!1sen!2s!4v1681113696320!5m2!1sen!2s" class="embed-responsive-item" style="border:0;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                <form class="form-style-9" action="{{url('send-whatsapp')}}" id="form" method="post" onsubmit="return validatePhoneNumber()">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" value="" placeholder="Please enter your Full Name..." required>
                    </div>


                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" value="" placeholder="Enter your Email..." required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="phone" name="phone" class="form-control" value="" placeholder="Enter your phone number..." required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea type="text" name="message" id="message" class="form-control" value="" placeholder="Leave a Message">
                            </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            @endforeach
        </div>
        @include('user.whatsapp')

    </div>