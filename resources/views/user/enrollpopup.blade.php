<div class="modal" id="enroll-modal">

    <div class="modal-body">
        <form class="form-style-9" action="{{url('stdenroll')}}" method="post" onsubmit="return validatePhoneNumber()">
            @csrf
            <div class="row">
                <div style="position: relative;bottom: 3vh;">Enroll Now For {{ $course->title }}</div>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <hr style="position: relative;bottom: 30px;font-weight: 900;">
            <ul>
                <li>
                    <input type="text" name="name" class="col-12 field-style " placeholder="Full Name" />
                </li>
                <li>
                    <input type="email" name="email" class="field-style field-full" placeholder="Email" />
                </li>
                <li class="my-3">
                    <input type="number" name="phone" class="field-style field-split align-left" placeholder="Phone/Whatsapp" />
                    <select name="category" id="course" class="form-control">
                        <option value="">Select</option>
                        <option value="">{{ }} </option>
                    </select>
                </li>
                <li>


                    <input type="submit" value="Enroll" />
                </li>

            </ul>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


        </form>


    </div>

</div>

</div>
</div>


<script>
    $(document).ready(function() {
        $("#enroll-link").click(function() {
            $("#enroll-modal").modal("show");
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>