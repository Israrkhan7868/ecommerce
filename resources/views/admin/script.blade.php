</div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{URL::to('/')}}/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{URL::to('/')}}/admin/assets/js/off-canvas.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/hoverable-collapse.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{URL::to('/')}}/admin/assets/js/dashboard.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/todolist.js"></script>
    <!--   js for settingtemplate this page -->
    <script src="settingtemplate/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="{{URL::to('/')}}/settingtemplate/vendor/select2/select2.min.js"></script>
    <script src="{{URL::to('/')}}/settingtemplate/vendor/datepicker/moment.min.js"></script>
    <script src="{{URL::to('/')}}/settingtemplate/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="{{URL::to('/')}}/settingtemplate/js/global.js"></script>
