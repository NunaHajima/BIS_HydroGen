<?= $this->include('layouts/admin/layouts/head') ?>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>
                                    <?php if(session()->getFlashData('success')) { ?>
                                        <div class="alert alert-success">
                                            <?= session()->get('success') ?>
                                        </div>
                                    <?php } ?>
                                    <?php if(session()->getFlashdata('errors')) { ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('errors') ?>
                                        </div>
                                    <?php } ?>
                                    <form class="user" action="/login" method="post">
                                        <div class="form-group">
                                        <label for="example-email">Email</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Masukkan alamat email...." required name="email">
                                        </div>
                                        <div class="form-group">
                                        <label for="example-email">Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" required name="password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <a href="/register" ><p class="text-center">Daftar Akun ?</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/views/vendor/jquery/jquery.min.js"></script>
    <script src="/views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/views/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/views/js/sb-admin-2.min.js"></script>

</body>