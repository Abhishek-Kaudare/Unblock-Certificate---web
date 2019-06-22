<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href={{ url('/') }} aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href={{ url('/status') }} aria-expanded="false">
                        <i class="fas fa-shopping-status"></i>
                        <span class="hide-menu">Status</span>
                    </a>
                    {{-- <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="fas fa-shopping-bag"></i>
                                <span class="hide-menu"> View Products </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">
                                <i class="mdi mdi-lock-plus"></i>
                                <span class="hide-menu"> Add Products </span>
                            </a>
                        </li>
                    </ul> --}}
                </li>

                {{-- ********************************************************************************************** --}}

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href={{ url('/certi') }} aria-expanded="false">
                        <i class="fas fa-certi"></i>
                        <span class="hide-menu">Sample Certificate</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
