<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add User</h1>
    <div class="card shadow py-2">
        <div class="card-body">
            <a href="<?= BASEURL ?>/user" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Kembali</a>
            <hr>

            <form action="<?= BASEURL; ?>/user/save" method="POST" enctype="multipart/form-data">
                <label>No Rekam Medis</label>
                <input name="no_rm" type="text" placeholder="No Rekam Medis" class="form-control" required>
                <br>
                <label>Nama</label>
                <input name="nama" type="text" placeholder="Nama" class="form-control" required>
                <br>
                <label>Tempat Lahir</label>
                <input name="tempat_lahir" type="text" placeholder="Tempat Lahir" class="form-control" required>
                <br>
                <label>Tanggal Lahir</label>
                <input name="tgl_lahir" type="date" placeholder="Harga Grosir" class="form-control" required>
                <br>
                <!-- <label>Username</label>
                <input name="username" type="text" placeholder="Username" class="form-control" required>
                <br> -->
                <label>Password</label>
                <input name="password" type="hidden" value="12345678" placeholder="Stok" class="form-control" required>
                <br>
                <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                <button type="submit" class="btn btn-success"> <span class="fa fa-save"></span> Save</button>
            </form>
        </div>
    </div>
</div>