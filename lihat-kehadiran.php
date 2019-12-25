<?php 
    include 'view_template/head.html'; 
    $status = $_GET['status'];
    if ($status=="hadir") {
        $title = "Sudah Hadir";
        $badge = "<span class='badge badge-info'>Sudah Hadir</span>";
        $nama1 = "Rismawati, S.Ak";
        $nama2 = "Onda Irawan";
        $pukul = "09.00";
    } else {
        $title = "Belum Hadir";
        $badge = "<span class='badge badge-warning'>Belum Hadir</span>";
        $nama1 = "Deni Setiadi";
        $nama2 = "Dadang Gunawan";
    }
    
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Lihat Data Staff <?= $title; ?></li>
            </ol>
        </nav>       
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Data Staff <?= $title; ?>
            </div>
            <div class="card-body">
            <div class="float-left mb-3">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Cari Nama...." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>

            </div>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Staff</th>
                                <th scope="col">Kehadiran</th>
                                <th scope="col">
                                <?php
                                        if ($status == "hadir") {
                                            echo "Jam Datang";
                                        } else {
                                            echo "Aksi";
                                            
                                        }
                                        
                                    ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $nama1;?></td>
                                <td><?= $badge ;?></td>
                                <td>
                                    <?php
                                        if ($status == "hadir") {
                                            echo $pukul;
                                        } else {
                                            echo "<a href='#' class='btn btn-warning btn-sm'> Konfirmasi Ijin </a>";
                                            
                                        }
                                        
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><?= $nama2;?></td>
                                <td><?= $badge ;?></td>
                                <td>
                                <?php
                                        if ($status == "hadir") {
                                            echo $pukul;
                                        } else {
                                            echo "<a href='#' class='btn btn-warning btn-sm'> Konfirmasi Ijin </a>";
                                            
                                        }
                                        
                                    ?>
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