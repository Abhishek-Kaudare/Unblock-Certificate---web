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
                {{-- <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Library</li> --}}
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
                            {{-- <h5 >Basic Datatable</h5>
                            <a href={{ url( '/admin/view-category') }} class="btn btn-info float-right">View Category</a>
                        </div> --}}
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                
                                        <th>Certi Id</th>
                                        <th>Certi Name</th>
                                        <th>Status</th>
                                        <th>Re-apply</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($values as $item)
                                    <tr>
                                        
                                        
                                        <td>{{$item->full_name}}</td>
                                        <td>{{$item->contact_1}}</td>
                                        <td>{{$item->email}}</td>
                                        <td id=""><a class="btn btn-primary" href="viewaddressproof/{{$item->addprof}}">View Address Proof</a></td>
                                        <td id=""><a class="btn btn-primary" href="viewidproof/{{$item->idprof}}">View ID Proof</a></td>
                                        <td id=""><a class="btn btn-success" href="accpetuser/{{$item->user_Id}}">Accept User</a></td>
                                        <td id=""><a class="btn btn-danger" href="rejectuser/{{$item->user_Id}}">Reject User</a></td>
                                            
                                        
                                    </tr>  
                                    @endforeach --}}
                                </tbody>
                               
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


@section('title')
    New Users Applications
@endsection