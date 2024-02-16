
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> <?= $judul;?> </h1>
                    </div>

                        <a href="" class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahaboutModal">Tambah About </a>
                    
                        <?= $this->session->flashdata('pesan'); ?>


                         <!-- Basic Card Example -->
                         <?php foreach ($about as $a) : ?>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"> <?= $a['hb'] ?> </h6>
                                <a class="btn btn-warning btn-sm" href="<?= base_url('admin_menu/edit_about/') . $a['id']; ?>"> Edit </a>
                            </div>
                            <div class="card-body">
                                <strong>  <?= $a['jb'] ?> </strong> <br><br>
                                <?= $a['detail_bio'] ?>
                            </div>
                        </div>

                        <?php endforeach; ?>



                    

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Tambah Menu Modal-->
            <div class="modal fade" id="tambahaboutModal" tabindex="-1" role="dialog" aria-labelledby="tambahaboutModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahaboutModalLabel">Tambah About</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                    <form class="" method="POST" action="<?= base_url('admin_menu/about') ?>">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="hb" name="hb" placeholder="Header Bio">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="jb" name="jb" placeholder="Judul Bio">
                                </div>
                                <div class="form-group mb-3">
                                    <textarea class="form-control" name="detail_bio" id="detail_bio" cols="30" rows="10" placeholder="Detail Bio"></textarea>
                                </div>
                             
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit" >Tambah</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>


            