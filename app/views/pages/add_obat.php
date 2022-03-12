<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Obat</h1>
    <div class="card shadow py-2">
        <div class="card-body">
            <a href="<?= BASEURL ?>/obat" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Kembali</a>
            <hr>

            <form action="<?= BASEURL; ?>/obat/save" method="POST" enctype="multipart/form-data">
                <label>Nama Obat</label>
                <input name="nama_obat" type="text" placeholder="Nama Obat" class="form-control" required>
                <br>
                <label>Jenis</label>
                <input name="jenis" type="text" placeholder="Jenis" class="form-control" required>
                <br>
                <label>Usia</label>
                <input name="usia" type="text" placeholder="Usia" class="form-control" required>
                <br>
                <label>Tanggal Kadaluarsa</label>
                <input name="tgl_kadaluarsa" type="date" placeholder="Harga Grosir" class="form-control" required>
                <br>
                <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                <button type="submit" class="btn btn-success"> <span class="fa fa-save"></span> Save</button>
            </form>
        </div>
    </div>
</div>