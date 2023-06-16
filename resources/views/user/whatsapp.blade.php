<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatsapp</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-JB1WzN+Kc44RVZtkUH/+MnBzj87wyx4qHfmd6OQ9EVBcbxUW53KJx7UkyC7cJ8Hsq+1aK8Ctvv8Jll28d9+oOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha512-k+CcVtC4l46Zr4stvnIiURGj6DZ5lBJp7/vmkv+1YdeR6zRG5M6aflldD+WZcS8tqM+T7BqKHQDyfo2hY1jDKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .modal-backdrop {
            background: none !important;
        }

        .modal-content {

            border: none;
            box-shadow: none;

        }

        .modal-body form {
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <!-- Add a WhatsApp button that triggers the modal -->
    <div>
    <a class="" style="width: 100%;" data-toggle="modal" data-target="#enroll-modal" target="-blank"  ><img src="{{URL::to('/')}}/courseimage/whatsapp.png" style="
  position: fixed;
  right: 20px; /* adjust this value to move the button left or right */
  top: 80%; /* adjust this value to move the button up or down */
  transform: translateY(-50%);
  width: 80px;
  z-index:9999;
"></a>
   
    </div>

   


    <!-- Create a modal for the form -->
    <div class="modal fade mt-5" id="enroll-modal" tabindex="-1" role="dialog" aria-labelledby="enroll-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enroll-modal-label">Contact Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-focus="triggering-element">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

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

                <div class="modal-body">
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
                            <textarea type="text" name="message" id="message" class="form-control" placeholder="Please Leave a Message..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#enroll-modal').on('hidden.bs.modal', function() {
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
        });
    </script>
    
</body>

</html>