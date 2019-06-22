{{-- Extending Master Layout --}}
@extends('layouts.adminLayout.master')

{{-- Including Styles --}}
@section('styles')
   <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/assets/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('backend_assets/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('backend_assets/dist/css/style.min.css') }}" rel="stylesheet">
@endsection

{{-- Adding Main Title And Bread Crumb --}}
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
@endsection


@section('content')
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 >Basic Datatable</h5>
                            <a href={{ url( '/admin/view-category') }} class="btn btn-info float-right">View Category</a>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>PRN</th>
                                
                                        <th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Email id</th>
                                        <th>Address Proof</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($values as $item)
                                    <tr>
                                        
                                        <td>{{$item->PRN}}</td>
                                        
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->gender}}</td>
                                        <td>{{$item->contact_1}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->dob}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->addprof}}</td>
                                            
                                        
                                    </tr>  
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

@endsection

