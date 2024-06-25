<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SINitro - Profiles</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('pelanggan')); ?>"><i class="fas fa-table"></i><span>&nbsp;Pelanggan</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?php echo e(route('profile')); ?>"><i class="far fa-user-circle"></i><span>&nbsp;Profile</span></a><a class="nav-link" href="<?php echo e(route('dashboard')); ?>"><i class="far fa-caret-square-left"></i><span>&nbsp;Keluar</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <i class="fas fa-search"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group">
                                            <input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary py-0" type="button">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Halo, <?php echo e($user->name); ?></h3>
                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="<?php echo e(route('dashboard')); ?>">
                            <i class="fas fa-caret-square-left text-white fa-sm text-white-50"></i>&nbsp; Kembali
                        </a>
                    </div>
                    <!-- Start: Chart -->
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-3">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Profile</p>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="username"><strong>Nama Petugas</strong></label>
                                                    <input class="form-control" type="text" id="username" placeholder="Nama Petugas" name="petugas" value="<?php echo e($profileUser->name); ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email"><strong>Email</strong></label>
                                                    <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo e($profileUser->email); ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="shift"><strong>Shift&nbsp;</strong></label>
                                                    <input class="form-control" type="text" name="shift" placeholder="Shift" value="<?php echo e($user->shift); ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nohp"><strong>No Hp</strong></label>
                                                    <input class="form-control" type="text" name="nohp" placeholder="No Hp" value="<?php echo e($profileUser->notelp); ?>" readonly>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="shift"><strong>Pertama Dibuat&nbsp;</strong></label>
                                                    <input class="form-control" type="text" name="shift" placeholder="Shift" value="<?php echo e($user->created_at); ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label" for="nohp"><strong>Terakhir Di Update</strong></label>
                                                    <input class="form-control" type="text" name="nohp" placeholder="No Hp" value="<?php echo e($profileUser->created_at); ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: Chart -->
                </div>
            </div>
            
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © SINitro 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html><?php /**PATH C:\laragon\www\sinitro\resources\views/sinitro/profile.blade.php ENDPATH**/ ?>