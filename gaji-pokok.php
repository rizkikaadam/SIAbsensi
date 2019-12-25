<?php include 'view_template/head.html'; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Data Gaji Pokok</li>
            </ol>
        </nav>       
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Data Gaji Pokok
                <div class="float-right">
                    <!--Modal Edit nominal-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#editNama">
                        <i class="fas fa-plus"></i> Tambah Data Gaji Pokok
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="editNama" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Gaji Pokok</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label>Range Lama Kerja</label>
                                    <input type="text" class="form-control" name="range" value="">
                                </div>
                                <div class="form-group">
                                    <label>Nominal</label>
                                    <input type="text" class="form-control" name="nominal" value="">
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
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Lama Kerja</th>
                            <th scope="col">Nominal (Rp)</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lebih dari 0 Tahun s.d. 3 Tahun</td>
                                <td>1,000,000</td>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Lama Kerja dan Nominal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Range Lama Kerja</label>
                                                    <input type="text" class="form-control" name="range" value="Lebih dari 0 Tahun s.d. 3 Tahun">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nominal</label>
                                                    <input type="text" class="form-control" name="nominal" value="1,000,000">
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
                            <tr>
                                <th scope="row">2</th>
                                <td>Lebih dari 3 Tahun s.d. 5 Tahun</td>
                                <td>1,500,000</td>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Lama Kerja dan Nominal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Range Lama Kerja</label>
                                                    <input type="text" class="form-control" name="range" value="Lebih dari 0 Tahun s.d. 3 Tahun">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nominal</label>
                                                    <input type="text" class="form-control" name="nominal" value="1,000,000">
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
                            <tr>
                                <th scope="row">3</th>
                                <td>Lebih dari 5 Tahun</td>
                                <td>2,000,000</td>
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
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Lama Kerja dan Nominal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Range Lama Kerja</label>
                                                    <input type="text" class="form-control" name="range" value="Lebih dari 0 Tahun s.d. 3 Tahun">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nominal</label>
                                                    <input type="text" class="form-control" name="nominal" value="1,000,000">
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
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'view_template/footer.html'; ?>