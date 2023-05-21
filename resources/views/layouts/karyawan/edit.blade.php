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
            <h1 class="h3 mb-2 text-gray-800 text-center">Edit Data Karyawan PKS-Pulau Tiga</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <a href="/" class="btn btn-primary btn-icon-split ">
                    <span class="text">Kembali</span>
                </a>
                <div class="m-3">
                    @if ($errors->any())
                        <div class="pt-3">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <form action="/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Karyawan</label>
                            <input type="text" name="nama" value="{{ $data->nama }}" class="form-control"
                                id="nama" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">No Registrasi SAP</label>
                            <input type="text" name="no_regis" value="{{ $data->no_regis }}" class="form-control"
                                id="nama" placeholder="Masukkan No Registrasi" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan Terakhir</label>
                            <input type="text" name="jabatan" value="{{ $data->jabatan }}" class="form-control"
                                id="jabatan" placeholder="Masukkan Posisi Terakhir" required>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan Saat Ini</label>
                            <input type="text" name="jabatan_saat" value="{{ $data->jabatan_saat }}"
                                class="form-control" id="jabatan" placeholder="Masukkan Jabatan Saat Ini" required>
                        </div>
                        <div class="mb-3">
                            <label for="bagian" class="form-label">Bagian</label>
                            <input type="text" name="bagian" value="{{ $data->bagian }}" class="form-control"
                                id="bagian" placeholder="Masukkan Bagian Bekerja" required>
                        </div>
                        <div class="mb-3">
                            <label for="gol" class="form-label">Golongan</label>
                            <input type="text" name="gol" value="{{ $data->gol }}" class="form-control"
                                id="ct" placeholder="Masukkan Golongan">
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <input type="text" name="agama" value="{{ $data->agama }}" class="form-control"
                                id="agama" placeholder="Masukkan Agama">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tangal Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{ $data->tgl_lahir }}"
                                class="form-control" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_masuk" class="form-label">Tangal Masuk Kerja</label>
                            <input type="date" name="tgl_masuk" value="{{ $data->tgl_masuk }}"
                                class="form-control" id="tgl_masuk" placeholder="Masukkan Tanggal Masuk">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_pensiun" class="form-label">Tangal Pensiun</label>
                            <input type="date" name="tgl_pensiun" value="{{ $data->tgl_pensiun }}"
                                class="form-control" id="tgl_pensiun" placeholder="Masukkan Tanggal Pensiun">
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                            <input type="text" name="pendidikan" value="{{ $data->pendidikan }}"
                                class="form-control" id="pendidikan" placeholder="Masukkan Pendidikan Terakhir">
                        </div>
                        <div class="mb-3">
                            <label for="no_ktp" class="form-label">No KTP</label>
                            <input type="text" name="no_ktp" value="{{ $data->no_ktp }}" class="form-control"
                                id="no_ktp" placeholder="Masukkan No KTP">
                        </div>
                        <div class="mb-3">
                            <label for="no_ktp" class="form-label">Status</label>
                            <input type="text" name="status" value="{{ $data->status }}" class="form-control"
                                id="no_ktp" placeholder="Masukkan Status">
                        </div>
                        <div class="mb-3">
                            <label for="nama_istri" class="form-label">Nama Istri/Suami</label>
                            <input type="text" name="nama_istri" value="{{ $data->nama_istri }}"
                                class="form-control" id="nama_istri" placeholder="Masukkan Nama Istri">
                        </div>
                        <div class="mb-3">
                            <label for="jml_anak" class="form-label">Jumlah Tanggungan</label>
                            <input type="text" name="jml_anak" value="{{ $data->jml_anak }}"
                                class="form-control" id="jml_anak" placeholder="Masukkan Jumlah Tanggungan">
                        </div>
                        <div class="mb-3">
                            <label for="ct" class="form-label">Sisa Cuti Tahunan</label>
                            <input type="text"value="{{ $data->cuti_tahunan }}" name="cuti_tahunan"
                                class="form-control" id="cuti_tahunan" placeholder="Masukkan Sisa Cuti Tahunan">
                        </div>
                        <div class="mb-3">
                            <label for="cp" class="form-label">Sisa Cuti Panjang</label>
                            <input type="text" value="{{ $data->cuti_panjang }}" name="cuti_panjang"
                                class="form-control" id="cuti_panjang" placeholder="Masukkan Sisa Cuti Panjang">
                        </div>
                        <div class="mb-3">
                            <label for="pelatihan" class="form-label">Pelatihan Diikuti</label>
                            <textarea name="pelatihan" class="form-control" rows="3" id="pelatihan" placeholder="Masukkan Pelatihan">{{ $data->pelatihan }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto_pelatihan" class="form-label">Sertifikat Pelatihan</label>
                            <p>*File yang di upload hanya boleh berupa PDF</p>
                            <input type="file" name="foto_pelatihan" class="form-control" id=""
                                placeholder="Masukkan Sertifikat Pelatihan">
                        </div>
                        <div class="mb-3">
                            <label for="penghargaan" class="form-label">Penghargaan di Dapatkan</label>
                            <textarea name="penghargaan" class="form-control" rows="3" id="penghargaan"
                                placeholder="Masukkan Penghargaan">{{ $data->penghargaan }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Sertifikat Penghargaan</label>
                            <p>*File yang di upload hanya boleh berupa PDF</p>
                            <input type="file" name="foto_penghargaan" class="form-control" id=""
                                placeholder="Masukkan Sertifikat Penghargaan">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Surat Peringatan</label>
                            <p>*File yang di upload hanya boleh berupa PDF</p>
                            <input type="file" name="foto_peringatan" class="form-control" id=""
                                placeholder="Masukkan Surat Peringatan">
                        </div>
                        @if ($data->foto_ktp)
                            <div class="div mb-3">
                                <img src="{{ url('foto') . '/' . $data->foto_ktp }}" alt=""
                                    style="max-width:80px;max-height:80px;">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto KTP</label>
                            <p>*File yang di upload hanya boleh berupa JPG,JPEG atau PNG</p>
                            <input type="file" name="foto_ktp" class="form-control" id="foto_ktp"
                                placeholder="Masukkan Foto">
                        </div>
                        @if ($data->foto_kk)
                            <div class="div mb-3">
                                <img src="{{ url('foto_kk') . '/' . $data->foto_kk }}" alt=""
                                    style="max-width:80px;max-height:80px;">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto KK</label>
                            <p>*File yang di upload hanya boleh berupa JPG,JPEG atau PNG</p>
                            <input type="file" name="foto_kk" class="form-control" id="foto_kk"
                                placeholder="Masukkan Foto">
                        </div>
                        @if ($data->foto_ijazah)
                            <div class="div mb-3">
                                <img src="{{ url('foto_ijazah') . '/' . $data->foto_ijazah }}" alt=""
                                    style="max-width:80px;max-height:80px;">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Ijazah</label>
                            <p>*File yang di upload hanya boleh berupa JPG,JPEG atau PNG</p>
                            <input type="file" name="foto_ijazah" class="form-control" id="foto_ijazah"
                                placeholder="Masukkan Foto">
                        </div>
                        @if ($data->foto_akte)
                            <div class="div mb-3">
                                <img src="{{ url('foto_akte') . '/' . $data->foto_akte }}" alt=""
                                    style="max-width:80px;max-height:80px;">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto Akte</label>
                            <p>*File yang di upload hanya boleh berupa JPG,JPEG atau PNG</p>

                            <input type="file" name="foto_akte" class="form-control" id="foto_akte"
                                placeholder="Masukkan Foto">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
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
