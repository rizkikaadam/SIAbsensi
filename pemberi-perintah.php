<?php include 'view_template/head.html'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Setting</li>
                    <li class="breadcrumb-item active" aria-current="page">Data Pemberi Perintah</li>
                </ol>
            </nav>       
        </div>
        <div class="col-lg-12">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                    <div class="float-left mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Nama Atau Id.." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="float-right mb-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#tambah">
                            <i class="fas fa-user-plus"></i> Tambah Pemberi Perintah
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pemberi Perintah</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Nama :</label>
                                        <input type="text" class="form-control" name="nama" value="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Jabatan :</label>
                                        <input type="text" class="form-control" name="jabatan" value="Sekretaris">
                                    </div>
                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                                </form>
                            </div>
                        </div>
                        </div>
                        <!--//Modal Edit nominal-->
                    </div>
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Jabatan</th>
                              <th scope="col">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                              <th scope="row">1</th>
                              <td>Drs. Ruby Handono</td>
                              <td>Wakil Sekretaris 1</td>
                              <td>
                                  <!--Modal Edit nominal-->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editNama">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editNama" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Nama Dan Jabatan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Nama :</label>
                                                    <input type="text" class="form-control" name="nama" value="Drs. Ruby Handono">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jabatan :</label>
                                                    <input type="text" class="form-control" name="jabatan" value="Wakil Sekretaris 1">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                    <!--//Modal Edit nominal-->
                              </td>
                              </tr>
                          </tbody>
                          </table>

                          <div class="d-flex justify-content-center">
                              <nav aria-label="...">
                                  <ul class="pagination">
                                      <li class="page-item disabled">
                                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                      </li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item active" aria-current="page">
                                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item">
                                      <a class="page-link" href="#">Next</a>
                                      </li>
                                  </ul>
                              </nav>

                          </div>
    
                    </div>
                </div>
            </div>
        </div>



        </div>
        <!-- /.container-fluid -->
<?php include 'view_template/footer.html'; ?>