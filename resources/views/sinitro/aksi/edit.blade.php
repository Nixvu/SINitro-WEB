<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SINitro - Edit Data</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                    href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span class="fs-2">SINITRO</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}"><i
                                class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pelanggan') }}"><i
                                class="fas fa-table"></i><span>&nbsp;Pelanggan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}"><i
                                class="far fa-user-circle"></i><span>&nbsp;Profile</span></a><a class="nav-link"
                            href="{{ route('logout') }}"><i class="far fa-caret-square-left"></i><span>&nbsp;Keluar</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-bs-toggle="dropdown" href="#"><i
                                        class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Halo, Admin</h3><a
                            class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('pelanggan') }}"><i
                                class="fas fa-caret-square-left text-white fa-sm text-white-50"></i>&nbsp; Kembali</a>
                    </div><!-- Start: Chart -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Edit Data</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('update', $transaksi->id_transaksi) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nopol"><strong>Plat
                                                            Nomer</strong></label>
                                                    <input class="form-control" type="text" id="nopol"
                                                        name="nopol" value="{{ $transaksi->nopol }}"
                                                        placeholder="Contoh : E 510 FB" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Jenis Kendaraan</strong></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            id="kendaraan_motor" name="kendaraan" value="Motor"
                                                            {{ $transaksi->jns_kendaraan == 'Motor' ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="kendaraan_motor">Motor</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            id="kendaraan_mobil" name="kendaraan" value="Mobil"
                                                            {{ $transaksi->jns_kendaraan == 'Mobil' ? 'checked' : '' }}>
                                                        <label class="form-check-label"
                                                            for="kendaraan_mobil">Mobil</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="layanan"><strong>Jenis
                                                            Layanan</strong></label>
                                                    <select class="form-select" id="layanan" name="layanan"
                                                        required>
                                                        @foreach ($layananList as $layanan)
                                                            <option value="{{ $layanan->id_layanan }}"
                                                                {{ $transaksi->id_layanan == $layanan->id_layanan ? 'selected' : '' }}>
                                                                {{ $layanan->nama_layanan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="qty"><strong>Qty Ban / Titik
                                                            Tambal</strong></label>
                                                    <input class="form-control" type="number" id="qty"
                                                        name="qty" value="{{ $transaksi->qty }}"
                                                        placeholder="Contoh : 2" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        for="shift"><strong>Shift</strong></label>
                                                    <select class="form-select" id="shift" name="shift"
                                                        required>
                                                        <option value="1"
                                                            {{ $transaksi->shift == 1 ? 'selected' : '' }}>Shift 1
                                                        </option>
                                                        <option value="2"
                                                            {{ $transaksi->shift == 2 ? 'selected' : '' }}>Shift 2
                                                        </option>
                                                        <option value="3"
                                                            {{ $transaksi->shift == 3 ? 'selected' : '' }}>Shift 3
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        for="tanggal"><strong>Tanggal</strong></label>
                                                    <input class="form-control" type="date" id="tanggal"
                                                        name="tanggal" value="{{ $transaksi->tanggal }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-sm" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                                                    width="1em" height="1em" fill="currentColor">
                                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                                    <path
                                                        d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z">
                                                    </path>
                                                </svg>&nbsp; Simpan&nbsp;
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- End: Chart -->
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © SINitro 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script>
        function updateLayananOptions() {
            var kendaraan = document.querySelector('input[name="kendaraan"]:checked').value;
            var layananSelect = document.querySelector('select[name="layanan"]');
            layananSelect.innerHTML = '<optgroup label="Jenis Layanan"></optgroup>';

            var layananOptions = {
                'Motor': [{
                        id: 1,
                        label: 'Isi Tambah'
                    },
                    {
                        id: 2,
                        label: 'Isi Awal'
                    },
                    {
                        id: 3,
                        label: 'Tambal Ban'
                    }
                ],
                'Mobil': [{
                        id: 4,
                        label: 'Isi Tambah'
                    },
                    {
                        id: 5,
                        label: 'Isi Awal'
                    },
                    {
                        id: 6,
                        label: 'Tambal Ban'
                    }
                ]
            };

            layananOptions[kendaraan].forEach(function(option) {
                var optionElement = document.createElement('option');
                optionElement.value = option.id;
                optionElement.textContent = option.label;
                layananSelect.firstElementChild.appendChild(optionElement);
            });
        }

        var kendaraanRadios = document.querySelectorAll('input[name="kendaraan"]');
        kendaraanRadios.forEach(function(radio) {
            radio.addEventListener('change', updateLayananOptions);
        });

        updateLayananOptions();
    </script>
</body>

</html>
