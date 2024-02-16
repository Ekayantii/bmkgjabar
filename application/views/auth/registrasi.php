
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-xl-5 col-lg-9 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-5">
                        <!-- Nested Row within Card Body -->
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun Admin</h1>
                                    </div>
                                        <form class="user" method="POST" action="<?php echo site_url('auth/registrasi'); ?>">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="nama" name="nama"
                                                placeholder="Nama Lengkap">
                                                <?= form_error('nama','<span class="text-danger ml-3">','</span>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" id="email" name="email"
                                                placeholder="Email Address">
                                                <?= form_error('email','<span class="text-danger ml-3">','</span>'); ?>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="password1" name="password1" placeholder="Password">
                                                    <?= form_error('password1','<span class="text-danger ml-3">','</span>'); ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user"
                                                    id="password2" name="password2" placeholder="Ulangi Password">
                                                    <?= form_error('password2','<span class="text-danger ml-3">','</span>'); ?>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block"> Registrasi Akun </button>
                                            <hr>
                                        </form>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo site_url('auth'); ?>">Sudah memiliki akun? Silahkan login!</a>
                                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>