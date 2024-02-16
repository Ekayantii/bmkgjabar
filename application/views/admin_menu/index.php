
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Menu Management</h1>
                    </div>

                    <?= $this->session->flashdata('pesan'); ?>

                    <div class="btn">
                    <a href="" class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#tambahmenuModal"> Tambah Menu</a>
                    </div>
                    <!-- Table -->

                    <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Menu</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Url</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <span hidden><?= $nomor = 1; ?></span>
                    <?php foreach ($admin_menu as $am ): ?>
                        <tr>
                            <th scope="row"><?= $nomor++; ?></th>
                                <td><?= $am['nama']; ?></td>
                                <td><?= $am['icon']; ?></td>
                                <td><?= $am['url']; ?></td>
                                <td> 
                                    <a class="btn btn-warning btn-sm" href="<?= base_url('admin_menu/edit/') . $am['id']; ?>"> Edit </a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?= base_url('admin_menu/hapus/') . $am['id']; ?>"> Hapus </a>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    </table>

                    <!-- End Table -->

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
            <div class="modal fade" id="tambahmenuModal" tabindex="-1" role="dialog" aria-labelledby="tambahmenuModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                    <form class="" method="POST" action="<?= base_url('admin_menu') ?>">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama menu">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="icon">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="url">
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
