
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> <?= $judul;?> </h1>
                    </div>

                        <a href="" class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahPDCJModal">Tambah Prakiraan Cuaca Dini Jawa Barat</a>
                    
                        <?= $this->session->flashdata('pesan'); ?>


                         <!-- Basic Card Example -->
                        
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">PDCJ </h6>
                            </div>
                            <div class="card-body">
                                <img src="" class="img-tumbnail" alt="">
                            </div>
                        </div>

              


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- Tambah PDCJ Modal-->
            <div class="modal fade" id="tambahPDCJModal" tabindex="-1" role="dialog" aria-labelledby="tambahPDCJModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahPDCJModalLabel">Tambah Prakiraan Cuaca Dini Jawa Barat</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                    <form class="" method="POST" action="<?= base_url('admin_menu/PDJC') ?>">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Created by">
                                </div>
                                <div class="form-group mb-3">
                                    <textarea name="isi_blog" id="isi_blog" class="form-control" cols="30" rows="10" placeholder="Isi Berita"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="file" class="custom-file-input" id="image" name="image" placeholder="Image">
                                    <label for="image" class="custom-file-label">Gambar</label>
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


            