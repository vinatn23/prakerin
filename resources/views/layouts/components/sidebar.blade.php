<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset ('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Awpineee</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="{{asset('assets/dist/img/pin.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block">Vinatn</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Kasus Global
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">


                            <li class="nav-item">
                                <a href="pages/charts/inline.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Negara</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/charts/uplot.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kasus Negara</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Kasus Lokal
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('provinsi.index')}}"class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Provinsi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('kota.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kota</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('kecamatan.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kecamatan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('kelurahan.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kelurahan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('rw.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Rw</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('kasus2.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kasus</p>
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