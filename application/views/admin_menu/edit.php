
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Menu <?= $admin['nama'];?></h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                    <form class="" method="POST" action="<?= base_url('admin_menu/edit/') . $admin_menu['id']; ?>">
                    <input type="hidden" name="id" id="id" value="<?= $admin_menu['id']; ?> ">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $admin_menu['nama']; ?> ">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $admin_menu['icon']; ?> " >
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="url" name="url" value="<?= $admin_menu['url']; ?> ">
                                </div>
                             
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit" >Ubah</button>
                        </div>
                    </form>

                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

