<?php include 'view_template/head.html'; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>       
    </div>

    <div class="col-lg-12">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Staf</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">90</div>
                      <a href="data-absensi.php" class="text-decoration-none text-xs text-muted"><i class="fas fa-eye"></i> Lihat Seluruh Staf</a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Staf Sudah Hadir Hari Ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">85</div>
                      <a href="lihat-kehadiran.php?status=hadir" class="text-decoration-none text-xs text-muted"><i class="fas fa-eye"></i> Lihat Staf Sudah Hadir</a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-check fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Staf Belum Hadir Hari Ini</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 15 </div>
                      <a href="lihat-kehadiran.php?status=belum" class="text-decoration-none text-xs text-muted"><i class="fas fa-eye"></i> Lihat Staf Belum Hadir</a>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-times fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Konfirmasi Lembur</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#konfirmasiLembur"><i class="fas fa-user-edit"></i> Konfirmasi Lembur</a>

                          <!--Modal Edit konfirmasi lembur-->

                            <!-- Modal -->
                            <div class="modal fade" id="konfirmasiLembur" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">
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
                                            <label>Nama :</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Staf">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Jam Lembur</label>
                                            <input type="text" class="form-control" name="jamLembur" placeholder="Jumlah Jam Lembur">
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
                            <!--//Modal Edit nominal-->

                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-edit fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>

    <!-- baris kedua  -->
    <div class="col-lg-12">
        <div class="row">
            <!-- time line  -->
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        Baru Saja Absen
                    </div>
                    <div class="card-body">
                        <div class="container py-2">
                          <?php
                          $namaAbsen = array ("Rismawati, S.Ak", "Onda Irawan", "Juju Kusnadi", "Meldy Radinal", "Taufik Gilang Ramadhan");
                          foreach ($namaAbsen as $nama) {
                            ?>
                            <!-- timeline item 1 -->
                            <div class="row">
                                <!-- timeline item 1 left dot -->
                                <div class="col-auto text-center flex-column d-none d-sm-flex">
                                    <div class="row h-50">
                                        <div class="col">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                    <h5 class="m-2">
                                        <span class="badge badge-pill bg-light border">&nbsp;</span>
                                    </h5>
                                    <div class="row h-50">
                                        <div class="col border-right">&nbsp;</div>
                                        <div class="col">&nbsp;</div>
                                    </div>
                                </div>
                                <!-- timeline item 1 event content -->
                                <div class="col py-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="float-right text-muted"><i class="fas fa-calendar"></i> Mon, Jan 9th 2019 7:00 AM</div>
                                            <h5 class="card-title font-weight-bold"><i class="fas fa-user"></i> <?= $nama;?></h5>
                                            <p class="card-text text-xs"><i class="fas fa-briefcase"></i> Staff Koni</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php }//akhir menampilkan data
                          ?>  
                        </div>
                    </div>
                </div>
            <!--container-->
            </div>
            <!-- //time line  -->
            <!-- //Pegawai Jumlah Jam kerja Terbanyak Bulan ini-->
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        Jumlah Kerja Personal
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col" class="text-right" >Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Rismawati, S.Ak</td>
                                    <td class="text-right">147 Jam</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Juju Kusnadi</td>
                                    <td class="text-right">140 Jam</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Onda Irawan</td>
                                    <td class="text-right">126 Jam</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Meldy Radinal</td>
                                    <td class="text-right">119 Jam</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Taufik Gilang Ramadhan</td>
                                    <td class="text-right">80Jam</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'view_template/footer.html'; ?>
