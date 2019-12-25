<?php include 'view_template/head.html'; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
        <div class="col-lg-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="data-absensi.php">Data Absen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rismawati, S.Ak</li>
                </ol>
            </nav>       
        </div>
        <div class="col-lg-12">
            <div class="row">
                <!--<div class="col-lg-2">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            Informasi Staf
                        </div>
                        <div class="card-body">
                            <img src="img/userphoto.jpg" alt="" class="img-thumbnail">
                            <div class="text-center">
                                <h5 class="text-gray-900 mb-2 mt-2">Rizkika Adam Pratama</h5>
                                <h5 class="mb-2">Staff</h5>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- week hours -->
                        <div class="col-lg-4 mb-4 mt-4">
                            <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Gaji Pokok : </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 1,250,000</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Diterima : </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 2,150,000 *</div>
                                    <div class="text-xs text-danger">*Cat: Dengan Perhitungan Lebih Lanjut </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- week hours -->
                        <div class="col-lg-4 mb-4 mt-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tunjangan Kinerja Bulan Desember</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 800,000 *</div>
                                    <div class="mb-0 text-gray-500">Jumlah Jam Kerja : 80 Jam </div>
                                    <div class="text-xs text-danger">*Cat: Dengan Perhitungan Lebih Lanjut </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mt-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tunjangan Lembur Bulan Desember</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 75,000 *</div>
                                    <div class="mb-0 text-gray-500">Jumlah Jam Lembur : 10 Jam</div>
                                    <div class="text-xs text-danger">*Cat: Dengan Perhitungan Lebih Lanjut </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            Informasi Absensi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive mt-4">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Bulan</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Kehadiran</th>
                                            <th scope="col">Jumlah Diterima</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Desember <span class="badge badge-pill badge-success">Running...</span></td>
                                            <td>2018</td>
                                            <td><span class="badge badge-warning">Tidak Hadir : 3 Hari</span></td>
                                            <td>Rp 2,150,000</td>
                                            <td>
                                                <a href="detail-bulan.php" class="btn btn-info btn-sm"> Detail </a>
                                                <a href="" class="btn btn-primary btn-sm" > Download </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>November <span class="badge badge-pill badge-info">Finish</span></td>
                                            <td>2018</td>
                                            <td><span class="badge badge-success">Kehadiran Terpenuhi 100%</span> </td>
                                            <td>Rp 2,915,000</td>
                                            <td>
                                                <a href="detail-bulan.php" class="btn btn-info btn-sm"> Detail </a>
                                                <a href="" class="btn btn-primary btn-sm" > Download </a>
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
        </div>

</div>
<!-- /.container-fluid -->
<?php include 'view_template/footer.html'; ?>