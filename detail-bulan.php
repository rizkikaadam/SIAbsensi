<?php include 'view_template/head.html'; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" >Data Absen</li>
                <li class="breadcrumb-item" >Rismawati, S.Ak</li>
                <li class="breadcrumb-item" >2019</li>
                <li class="breadcrumb-item active" aria-current="page">Desember</li>
            </ol>
        </nav>       
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informasi Gaji
                <div class="float-right">
                    <!--Modal Edit nominal-->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#download">
                        <i class="fas fa-download"></i> Download
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Download Dokumen</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="m-2">
                                <a href="" class="btn btn-info" ><i class="fas fa-download"></i> Download Informasi Gaji</a>
                            </div>
                            <div class="m-2">
                                <a href="" class="btn btn-info" ><i class="fas fa-download"></i> Download Informasi Absen</a>
                            </div>
                            <div class="m-2">
                                <a href="" class="btn btn-info" ><i class="fas fa-download"></i> Download Informasi Gaji & Absen</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!--//Modal Edit nominal-->
                    <!--Modal Edit nominal-->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editNominal">
                            <i class="fas fa-cogs"></i> Setting Nominal Gaji
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="editNominal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Setting Nominal Tunjangan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Gaji Pokok (Rp)</label>
                                        <input type="text" class="form-control" name="gajiPokok" value="1250000">
                                    </div>
                                    <div class="form-group">
                                        <label>Tunjangan Kinerja (Rp)</label>
                                        <input type="text" class="form-control" name="tunjanganKinerja" value="10000">
                                    </div>
                                    <div class="form-group">
                                        <label>Tunjangan Lembur (Rp)</label>
                                        <input type="text" class="form-control" name="tunjanganLembur" value="7500">
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
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th scope="col">Jumlah Jam Kerja</th>
                            <th scope="col">Jumlah Jam Lembur</th>
                            <th scope="col">Nominal Tunjangan Kinerja (per Jam)</th>
                            <th scope="col">Nominal Tunjangan Lembur (per Jam)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">147</th>
                            <td>26</td>
                            <td>Rp 10.000</td>
                            <td>Rp 7.500</td>
                        </tr>
                    </tbody>
                </table>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col">#</th>
                                <th scope="col">Gaji Pokok</th>
                                <th scope="col">Tunjangan Kinerja</th>
                                <th scope="col">Lembur</th>
                                <th scope="col">Jumlah Diterima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr >
                                <th scope="row">1</th>
                                <td>Rp 1,250,000</td>
                                <td>Rp 1,470,000</td>
                                <td>Rp 195,000</td>
                                <th scope="row">Rp 2,915,000</th>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informasi Absen
            </div>
            <div class="card-body">
                <div class="table-responsive mt-4">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr class="table-secondary">
                                <th scope="col">#</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jam Masuk</th>
                                <th scope="col">Jam Pulang</th>
                                <th scope="col">Lembur</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>18 Desember 2018</td>
                                <td>09:00</td>
                                <td>17:00</td>
                                <td>
                                    <!--Modal Edit nominal-->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#konfirmasiLembur">
                                        <i class="fas fa-edit"></i> Konfirmasi Lembur
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="konfirmasiLembur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Lembur</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Jumlah Jam Lembur</label>
                                                    <input type="text" class="form-control" name="jamLembur" placeholder="Jumlah Jam Lembnur">
                                                </div>
                                                <div class="form-group">
                                                    <label>Pemberi Perintah</label>
                                                    <select name="pemberiPerintah" id="" class="custom-select" id="inputGroupSelect01">
                                                        <option value="">-- Pilih Pemberi Perintah --</option>
                                                        <option value="manager">Manager 1</option>
                                                        <option value="manager">Manager 2</option>
                                                    </select>
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
                                </td>
                                <td>
                                    <!--Modal Edit nominal-->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editJam">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editJam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Jam</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Jam Masuk</label>
                                                    <input type="time" class="form-control" name="tunjanganKinerja" value="10000">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jam Pulang</label>
                                                    <input type="time" class="form-control" name="tunjanganLembur" value="7500">
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