 {{-- sweetalert --}}
 <div class="toast text-bg-success position-fixed bottom-0 end-0 p-3 success-toast" role="alert" aria-live="assertive"
     aria-atomic="true">
     <div class="d-flex">
         <div class="toast-body success-toast-message"></div>
         <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
             aria-label="Close"></button>
     </div>
 </div>
 <div class="toast text-bg-danger position-fixed bottom-0 end-0 p-3 danger-toast" role="alert" aria-live="assertive"
     aria-atomic="true">
     <div class="d-flex">
         <div class="toast-body danger-toast-message"></div>
         <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
             aria-label="Close"></button>
     </div>
 </div>
 @if (Session::has('success'))
     <script>
         $('.success-toast-message').html('{!! Session::get('success ') !!}');
         const toast = new bootstrap.Toast('.success-toast');
         toast.show();
     </script>
 @endif
 @if (Session::has('error'))
     <script>
         $('.danger-toast-message').html('{!! Session::get(' error ') !!}');
         const toast = new bootstrap.Toast('.danger-toast');
         toast.show();
     </script>
 @endif
 {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script src="{{ asset('backend/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Vendor JS-->
 <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>

 <!-- BEGIN Vendor JS-->

 <!-- BEGIN: Page Vendor JS-->
 {{-- <script src="{{ asset('backend/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script> --}}
 <script src="{{ asset('backend/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
 <!-- END: Page Vendor JS-->

 <!-- BEGIN: Theme JS-->
 <script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}"></script>
 <script src="{{ asset('backend/app-assets/js/core/app.js') }}"></script>
 <!-- END: Theme JS-->

 <!-- BEGIN: Page JS-->

 <script src="{{ asset('backend/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
 <!-- END: Page JS-->

 <!-- BEGIN: Page JS-->
 <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
 <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
 <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
 <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('backend/app-assets/js/scripts/tables/table-datatables-basic.min.js') }}"></script>
 <!-- END: Page JS-->
 {{-- ck editor --}}


 {{-- END:CK EDITOR --}}


 @if (Session::has('success'))
     <script>
         toastr.options = {
             "debug": false,
             "positionClass": "toast-bottom-right",
             "onclick": null,
             "fadeIn": 300,
             "fadeOut": 80000,
             "timeOut": 5000,
             "extendedTimeOut": 1000
         }
         toastr.success("{!! Session::get('success') !!}");
     </script>
 @endif




 <script>
     $(window).on('load', function() {
         if (feather) {
             feather.replace({
                 width: 14,
                 height: 14
             });
         }
     });



     $(document).ready(function() {
         $('.dataTable').DataTable({
             "pageLength": 50

         });
     });
 </script>

 <script>
     $('.ConfirmDelete').on('click', function(event) {
         event.preventDefault();
         const url = $(this).attr('href');
         swal({
             title: 'Are you sure?',
             text: 'This record and it`s details will be permanantly deleted!',
             icon: 'warning',
             buttons: ["Cancel", "Yes!"],
         }).then(function(value) {
             if (value) {
                 location.href = url;
             }
         });
     });
 </script>

 <script type="text/javascript">
     $('.show_confirm').click(function(event) {
         var form = $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
                 title: `Are you sure you want to delete this record?`,
                 text: "If you delete this, it will be gone forever.",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
                 if (willDelete) {
                     form.submit();
                 }
             });
     });
 </script>

 <script>
     $(document).ready(function() {
         $(".offcanvas").on("hidden.bs.offcanvas", function() {

             $("form").trigger("reset");
             $(".invalid-feedback").remove();
         });
     });
 </script>
