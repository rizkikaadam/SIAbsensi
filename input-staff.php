<?php include 'view_template/head.html'; ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-lg-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Data Absen Seluruh Staf</li>
                <li class="breadcrumb-item active" aria-current="page">Masukan Data Staf</li>
            </ol>
        </nav>       
    </div>
    <div class="col-lg-12">
        <div class="card shadow">
            <div class="card-header">
                Masukan Data Staf
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ID Finger Print</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="14132">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama Staf">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="alamat@email.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori Staf</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Staf KONI</option>
                            <option>Staf BINPRES</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Gaji Pokok</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="1250000">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tunjangan Kinerja</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="10000">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tunjangan Lembur</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="7500">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" >Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->
<?php include 'view_template/footer.html'; ?>