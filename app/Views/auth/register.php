<?= $this->include('layouts/admin/layouts/head') ?>
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-3">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create Your Account</h1>
                            </div>
                            <form class="user" action="/register" method="post">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="example-email">Nama Perusahaan</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="namaperusahaan"
                                                placeholder="Nama Perusahaan" required name="namaperusahaan">
                                        </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="example-email">Email</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email"
                                                placeholder="Alamat Email" required name="email">
                                        </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="example-email">Alamat Perusahaan</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="alamatperusahaan" placeholder="Alamat Perusahaan" required name="alamatperusahaan">
                                        </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="example-email">Nomor Telephone</label>
                                        <div class="form-group">
                                            <input type="int" class="form-control form-control-user" id="notelp"
                                                placeholder="Nomor Telephone" required name="notelp">
                                        </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="example-email">Password</label>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                                    id="password" placeholder="Password" required name="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="example-email">Konfirmasi Password</label>
                                        <div class="form-group">
                                        <input type="konfirmasipassword" class="form-control form-control-user"
                                                    id="konfirmasipassword" placeholder="Konfirmasi Password" required name="konfirmasipassword">
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                            </form>
                            <a href="/login" class="btn btn-danger btn-user btn-block">Batal</a>
                            <br/>
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
