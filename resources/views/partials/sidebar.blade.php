<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/img/duwa-logo.png">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/user2-128x128.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Chấm công
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Theo Ca và Sản Lượng</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Công Công Nhân</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Kiểm Tra Chấm Công</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a href="{{route('time-keeping-machine.time-keeping-for-workers.index')}}" class="nav-link" onclick="ShowTimeToDay()">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Công Công Nhân</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Quản Lý Lương
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-item nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('salary-management.SalaryCalculation.index')}}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Tính Lương</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('salary-management.payroll.index')}}" class="nav-link">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Bảng Lương</p>
                            </a>
                        </li>
{{--                        Unhide when release --}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle"></i>--}}
{{--                                <p>Phiếu Lương Online</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle"></i>--}}
{{--                                <p>Xuất báo cáo</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="nav-icon far fa-circle"></i>--}}
{{--                                <p>Quản lý ngày phép</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Nhập Liệu
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{--                                <li class="nav-item">--}}
                        {{--                                    <a href="#" class="nav-link">--}}
                        {{--                                        <i class="far fa-dot-circle nav-icon"></i>--}}
                        {{--                                        <p>Nhập Sản Lượng</p>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        <li class="nav-item">
                            <a href="{{route('Importer.index')}}" class="nav-link">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Nhập Từ File </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
