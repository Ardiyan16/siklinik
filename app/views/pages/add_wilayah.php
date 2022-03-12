<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Wilayah</h1>
    <div class="card shadow py-2">
        <div class="card-body">
            <a href="<?= BASEURL ?>/wilayah" class="btn btn-success mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Kembali</a>
            <hr>

            <form action="<?= BASEURL; ?>/wilayah/save" method="POST" enctype="multipart/form-data">
                <label>Kabupaten/Kota</label>
                <input name="kota_kab" type="text" placeholder="Kabupaten/Kota" class="form-control" required>
                <br>
                <label>Provinsi</label>
                <input name="provinsi" type="text" placeholder="Provinsi" class="form-control" required>
                <br>
                <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                <button type="submit" class="btn btn-success"> <span class="fa fa-save"></span> Save</button>
            </form>
        </div>
    </div>
</div>