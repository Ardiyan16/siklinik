<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Pegawai</h1>
    <div class="card shadow py-2">
        <div class="card-body">
            <a href="<?= BASEURL ?>/pegawai" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Kembali</a>
            <hr>

            <form action="<?= BASEURL; ?>/pegawai/save" method="POST" enctype="multipart/form-data">
                <label>Nama Lengkap</label>
                <input name="nama_lengkap" type="text" placeholder="Nama Lengkap" class="form-control" required>
                <br>
                <label>Alamat</label>
                <input name="alamat" type="text" placeholder="Alamat" class="form-control" required>
                <br>
                <label>No Telepon</label>
                <input name="no_telp" type="number" placeholder="No Telepon" class="form-control" required>
                <br>
                <label>Jabatan</label>
                <input name="jabatan" type="text" placeholder="Jabatan" class="form-control" required>
                <br>
                <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                <button type="submit" class="btn btn-success"> <span class="fa fa-save"></span> Save</button>
            </form>
        </div>
    </div>
</div>