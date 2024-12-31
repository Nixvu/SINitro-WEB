<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome-all.min.css')); ?>">
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
                    <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('dashboard')); ?>"><i
                                class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('pelanggan')); ?>"><i
                                class="fas fa-table"></i><span>&nbsp;Pelanggan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('profile')); ?>"><i
                                class="far fa-user-circle"></i><span>&nbsp;Profile</span></a><a class="nav-link"
                            href="<?php echo e(route('logout')); ?>"><i
                                class="far fa-caret-square-left"></i><span>&nbsp;Keluar</span></a></li>
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
                        <h3 class="text-dark mb-0">Halo, <?php echo e($user->name); ?></h3><a
                            class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#"><i
                                class="fas fa-download fa-sm text-white-50"></i>&nbsp; Buat Laporan</a>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                                                <span>Motor</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo e($totalMotor); ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-motorcycle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1"><span
                                                    class="text-info">MOBIL</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span><?php echo e($totalMobil); ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-car-side fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span
                                                    class="text-success">PENDAPATAN</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>Rp <?php echo e(number_format($totalPendapatan, 0, ',', '.')); ?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1">
                                                <span>PETUGAS</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>Shift <?php echo e($user->shift); ?> -
                                                    <?php echo e($user->name); ?></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Start: Chart -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Tambah data</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="<?php echo e(route('transaksi.store')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="username"><strong>Plat
                                                            Nomer</strong></label>
                                                    <input class="form-control" type="text" id="username"
                                                        placeholder="Contoh : E 510 FB" name="nopol"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label"><strong>Jenis Kendaraan</strong></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            id="formCheck-2" name="kendaraan" value="Motor" checked>
                                                        <label class="form-check-label"
                                                            for="formCheck-2">Motor</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            id="formCheck-1" name="kendaraan" value="Mobil">
                                                        <label class="form-check-label"
                                                            for="formCheck-1">Mobil</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="layanan"><strong>Jenis
                                                            Layanan</strong></label>
                                                    <select class="form-select" required name="layanan">
                                                        <optgroup label="Jenis Layanan">
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="last_name"><strong>Qty Ban / Titik
                                                            Tambal</strong></label>
                                                    <input class="form-control" type="text"
                                                        placeholder="Contoh : 2" required="" inputmode="numeric"
                                                        name="qty">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        for="first_name"><strong>Petugas</strong></label>
                                                    <select class="form-select" required="" name="shift">
                                                        <optgroup label="Petugas Shift">
                                                            <option value="<?php echo e($user->id_users); ?>" selected="">Shift
                                                                <?php echo e($user->shift); ?></option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        for="last_name"><strong>Tanggal</strong></label>
                                                    <input class="form-control" type="date" required=""
                                                        name="tanggal">
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
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Data Transaksi</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 text-nowrap">
                                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                                        <label class="form-label">Show&nbsp;
                                                            <select class="d-inline-block form-select form-select-sm">
                                                                <option value="10" selected="">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>&nbsp;
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                                        <label class="form-label">
                                                            <input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                                <table class="table my-0" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nopol</th>
                                                            <th>Kendaraan</th>
                                                            <th>Layanan</th>
                                                            <th>Qty</th>
                                                            <th>Biaya</th>
                                                            <th>Shift</th>
                                                            <th>Petugas</th>
                                                            <th>Tanggal</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $trx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td style="display: none;"><?php echo e($trx->id); ?></td> 
                                                            <td><?php echo e($key + 1); ?></td>
                                                            <td><?php echo e($trx->nopol); ?></td>
                                                            <td><?php echo e($trx->jns_kendaraan); ?></td>
                                                            <td><?php echo e($trx->layanan->jns_layanan); ?></td>
                                                            <td><?php echo e($trx->qty); ?></td>
                                                            <td>Rp <?php echo e(number_format($trx->biaya, 0, ',', '.')); ?></td>
                                                            <td><?php echo e($trx->shift); ?></td>
                                                            <td><?php echo e($trx->user->name); ?></td>
                                                            <td><?php echo e($trx->tanggal->format('d/m/Y')); ?></td>
                                                            <td>
                                                                <a class="btn btn-primary btn-sm" role="button" href="<?php echo e(route('view',$trx->id_transaksi)); ?>">
                                                                    <i class="fas fa-print"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="10">
                                                                
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © SINitro 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
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
<?php /**PATH C:\laragon\www\sinitro\resources\views/sinitro/dashboard.blade.php ENDPATH**/ ?>