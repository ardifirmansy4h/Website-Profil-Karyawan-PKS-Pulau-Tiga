@include('layouts.header')
@include('layouts.sidebar')
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </form>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder=""
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">7</span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                    problem I've been having.</div>
                                <div class="small text-gray-500">Emily Fowler · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                <div class="status-indicator"></div>
                            </div>
                            <div>
                                <div class="text-truncate">I have the photos that you ordered last month, how
                                    would you like them sent to you?</div>
                                <div class="small text-gray-500">Jae Chun · 1d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                <div class="status-indicator bg-warning"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Last month's report looks great, I am very happy with
                                    the progress so far, keep up the good work!</div>
                                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                    alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                    told me that people say this to all dogs, even if they aren't good...</div>
                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle" src="{{ asset('Admin') }}/img/radi.jpg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800 text-center">Data Karyawan PKS-Pulau Tiga</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <a href="/" class="btn btn-primary btn-icon-split ">
                    <span class="text">Kembali</span>
                </a>
                <div class="card-body">
                    <div class="row">
                        <!-- Bagian Kiri -->
                        <div class="col-md-6 text-black">
                            <h5 class="font-weight-bold">Nama Karyawan</h5>
                            <p>{{ $data->nama }}</p>
                            <h5 class="font-weight-bold">Jabatan</h5>
                            <p>{{ $data->jabatan }}</p>
                            <h5 class="font-weight-bold">Bagian</h5>
                            <p>{{ $data->bagian }}</p>
                            <h5 class="font-weight-bold">Golongan</h5>
                            <p>{{ $data->gol }}</p>
                            <h5 class="font-weight-bold">Pendidikan</h5>
                            <p>{{ $data->pendidikan }}</p>
                            <h5 class="font-weight-bold">No KTP</h5>
                            <p>{{ $data->no_ktp }}</p>
                            <h5 class="font-weight-bold">Nama Istri/Suami</h5>
                            <p>{{ $data->nama_istri }}</p>
                            <h5 class="font-weight-bold">Jumlah Tanggungan</h5>
                            <p>{{ $data->jml_anak }}</p>
                        </div>
                        <!-- Bagian Kanan -->
                        <div class="col-md-6 text-black">
                            <h5 class="font-weight-bold">Sisa Cuti Tahunan</h5>
                            <p>{{ $data->cuti_tahunan }}</p>
                            <h5 class="font-weight-bold">Sisa Cuti Panjang</h5>
                            <p>{{ $data->cuti_panjang }}</p>
                            <h5 class="font-weight-bold">Tanggal Lahir</h5>
                            <p>{{ $data->tgl_lahir }}</p>
                            <h5 class="font-weight-bold">Tanggal Masuk</h5>
                            <p>{{ $data->tgl_masuk }}</p>
                            <h5 class="font-weight-bold">Masa Kerja</h5>
                            @php
                                $masaKerja = \Carbon\Carbon::parse($data->tgl_masuk)->diff(\Carbon\Carbon::now());
                            @endphp
                            <p>{{ $masaKerja->format('%y tahun %m bulan %d hari') }}</p>
                            <h5 class="font-weight-bold">Tanggal Pensiun</h5>
                            <p>{{ $data->tgl_pensiun }}</p>
                            <h5 class="font-weight-bold">Pelatihan Diikuti</h5>
                            <p>{{ $data->pelatihan }}</p>
                            <h5 class="font-weight-bold">Penghargaan Didapatkan</h5>
                            <p>{{ $data->penghargaan }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body mt-5 text-center">
                    <p>Foto KTP</p>
                    <img src="{{ url('foto') . '/' . $data->foto_ktp }}" alt="" style="height: 500px;"
                        class="img-fluid max-w-max">
                </div>
                <div class="card-body mt-5 text-center">
                    <p>Foto Kartu Keluarga</p>
                    <img src="{{ url('foto_kk') . '/' . $data->foto_kk }}" alt="" style="height: 500px;"
                        class="img-fluid max-w-max">
                </div>
                <div class="card-body mt-5 text-center">
                    <p>Foto Ijazah</p>
                    <img src="{{ url('foto_ijazah') . '/' . $data->foto_ijazah }}" alt=""
                        style="height: 500px;" class="img-fluid max-w-max">
                </div>
                <div class="card-body mt-5 text-center">
                    <p>Foto Akte</p>
                    <img src="{{ url('foto_akte') . '/' . $data->foto_akte }}" alt="" style="height:500px;"
                        class="img-fluid max-w-max">
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Ardi Firmansyah 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
@include('layouts.footer')
