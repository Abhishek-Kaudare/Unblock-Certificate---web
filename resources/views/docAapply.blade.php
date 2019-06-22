@extends('layouts.adminLayout.master')


{{-- Including Styles --}}
@section('styles')
   <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/assets/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('backend_assets/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('backend_assets/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend_assets/assets/libs/select2/dist/css/select2.min.') }}" rel="stylesheet" type="text/css">
@endsection


{{-- 
@section('breadcrumb')
    <h4 class="page-title">Dashboard</h4>
    <div class="ml-auto text-right">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </div>
@endsection --}}








@section('content')

<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <form class="form-horizontal" method="POST" action="{{ action('Users@DocA') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 
                    <div class="card-body">
                        <h4 class="card-title">Apply For DocA</h4>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label" for="fname">Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="fname" name="fullname" type="text" placeholder="Name Here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label" for="age">Age</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="age" name="age" type="number" placeholder="Age Here">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label" for="ad">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="address" name="add" type ="text" placeholder = "Address Here"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 text-right control-label col-form-label">File Upload 1</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input class="custom-file-input" id="validatedCustomFile" name="fileA" required="" type="file">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 text-right control-label col-form-label">File Upload 2</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input class="custom-file-input" name="fileB" id="validatedCustomFile" required="" type="file">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>



                        
                        <div class="border-top">
                            <div class="card-body">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>


                        

    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
    
@endsection





@section('scripts')

<script src="{{ asset('backend_assets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('backend_assets/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('backend_assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('backend_assets/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('backend_assets/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('backend_assets/dist/js/custom.min.js') }}"></script>
    <!-- this page js -->
    <script src="{{ asset('backend_assets/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/extra-libs/DataTables/datatables.min.js') }}"></script>



    {{-- <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script> --}}




@endsection