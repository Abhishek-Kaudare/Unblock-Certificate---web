{{-- Extending Master Layout --}}
@extends('layouts.adminLayout.master')

{{-- Including Styles --}}
@section('styles')
    <!-- Custom CSS -->
    <link href="{{ asset('backend_assets/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('backend_assets/dist/css/style.min.css') }}" rel="stylesheet">
@endsection

{{-- Adding Main Title And Bread Crumb --}}
{{-- @section('breadcrumb')
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

{{-- Adding Content --}}
@section('content')
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-left">
                    <h1 class="font-light text-dark">
                        
                    <h2 class="text-dark">Document A</h2>
                   <h6 class = "text-dark"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                            anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                
                   </h6>


                   <div class="border-top">
                    <div class="card-body">
                        <button class="btn btn-primary" type="button" onclick="window.location='{{ url('/applyA') }}'">Apply</button>
                    </div>
                </div>

                        </div>

            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-left">
                    <h1 class="font-light text-white">
                        
                    </h1>
                    <h2 class="text-dark">Document B</h2>
                    <h6 class = "text-dark"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                        nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                        probably haven't heard of them accusamus labore sustainable VHS.
            
               </h6>

               <div class="border-top">
                <div class="card-body">
                    <button class="btn btn-primary" type="button" href={{url('/applyA')}}>Apply</button>
                </div>
            </div>




                </div>
            </div>
        </div>
        
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
@endsection


{{-- Including Scripts --}}
@section('scripts')
    <script src="{{ asset('backend_assets/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('backend_assets/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('backend_assets/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('backend_assets/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('backend_assets/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{ asset('backend_assets/dist/js/pages/dashboards/dashboard1.js') }}"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('backend_assets/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('backend_assets/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('backend_assets/dist/js/pages/chart/chart-page-init.js') }}"></script>
@endsection
