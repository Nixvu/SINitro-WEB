<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SINitro - Data Pelanggan</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/fontawesome-all.min.css')); ?>">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span class="fs-2">SINITRO</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('dashboard')); ?>"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('pelanggan')); ?>"><i class="fas fa-table"></i><span>&nbsp;Pelanggan</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('profile')); ?>"><i class="far fa-user-circle"></i><span>&nbsp;Profile</span></a><a class="nav-link" href="<?php echo e(route('logout')); ?>"><i class="far fa-caret-square-left"></i><span>&nbsp;Keluar</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Halo, <?php echo e($user->name); ?></h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="<?php echo e(route('dashboard')); ?>"><i class="fas fa-caret-square-left text-white fa-sm text-white-50"></i>&nbsp; Kembali</a>
                    </div>
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
                                                        <a class="btn btn-primary btn-sm" role="button" href="<?php echo e(route('view',$trx->id_transaksi)); ?>"><i class="fas fa-eye text-white"></i></a>
                                                        <span>&nbsp;</span><a class="btn btn-primary btn-sm" role="button" href="<?php echo e(route('edit',$trx->id_transaksi)); ?>"><i class="fas fa-edit text-white"></i></a>
                                                        <form action="<?php echo e(route('delete', $trx->id_transaksi)); ?>" method="POST" style="display: inline;">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button class="btn btn-primary btn-sm" type="submit">
                                                                <i class="fas fa-trash text-white"></i>
                                                            </button>
                                                        </form>
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
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © SINitro 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/theme.js')); ?>"></script>
</body>

</html><?php /**PATH C:\laragon\www\sinitro\resources\views/sinitro/pelanggan.blade.php ENDPATH**/ ?>