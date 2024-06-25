<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Sinitro</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
</head>

<body class="bg-gradient-primary">
    <div class="container" style="width: 630px;">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row" style="width: 542px;">
                            <div class="col-lg-7 offset-lg-1" style="width: 422px;">
                                <div class="p-5" style="width: 400px;">
                                    <div class="text-center">
                                        <h4 class="fs-1 text-dark mb-4"><strong>SINitro</strong></h4>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input class="form-control form-control-user @error('name') is-invalid @enderror" type="text" placeholder="Nama Petugas" name="name">
                                            @error('name')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <input class="form-control form-control-user @error('notelp') is-invalid @enderror" type="text" placeholder="No. Telp" name="notelp">
                                            @error('notelp')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <select class="form-control form-control-user @error('shift') is-invalid @enderror" name="shift">
                                                <option value="" selected="">Pilih Shift</option>
                                                <option value="1">Shift 1</option>
                                                <option value="2">Shift 2</option>
                                            </select>
                                            @error('shift')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <input class="form-control form-control-user @error('email') is-invalid @enderror" type="email" aria-describedby="emailHelp" placeholder="Alamat Email" name="email">
                                            @error('email')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <input class="form-control form-control-user @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password">
                                            @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <input class="form-control form-control-user @error('password_confirmation') is-invalid @enderror" type="password" placeholder="Konfirmasi Password" name="password_confirmation">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="mb-3">
                                            <select class="form-control form-control-user @error('roles') is-invalid @enderror" name="roles">
                                                <option value="" selected="">Pilih Roles</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Petugas">Petugas</option>
                                            </select>
                                            @error('roles')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <button class="btn btn-primary d-block btn-user w-100" type="submit">Register</button>
                                        <hr>
                                        <div class="text-center">
                                            Punya akun? klik <a class="small" href="{{ route('login') }}">Login</a>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>