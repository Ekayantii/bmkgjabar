
                <!-- Begin Page Content -->
                <div class="container-fluid">

                <div class="col-8">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Menu <?= $about['hb'];?></h1>
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

                    <form class="" method="POST" action="<?= base_url('admin_menu/edit_about/').$about['id']; ?>">
                    <input type="hidden" name="id" id="id" value="<?= $about['id']; ?> ">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="hb" name="hb" value="<?= $about['hb']; ?> ">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="jb" name="jb" value="<?= $about['jb']; ?> " >
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="detail_bio" name="detail_bio" value="<?= $about['detail_bio']; ?> ">
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

