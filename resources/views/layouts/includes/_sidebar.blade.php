<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIAKAD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Bastian Noor Wahyudi</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('jurusan')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jurusan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('prody')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program Studi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dosen')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dosen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tahunAkademik')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tahun Akademik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mataKuliah')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mata Kuliah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mahasiswa')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('krs')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>KRS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('inputnilai')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Nilai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('khs')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>KHS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('transkrip')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transkrip Nilai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">USERS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-registered"></i>
                        <p>
                            Login & Register
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-danger nav-icon"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle text-warning nav-icon"></i>
                                <p> Register</p>
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