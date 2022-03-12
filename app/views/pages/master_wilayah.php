<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Wilayah</h1>
    <h5>
        <h5><?php Flasher::pesanwilayah(); ?></h5>
    </h5>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= BASEURL; ?>/wilayah/add" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Wilayah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kabupaten/Kota</th>
                            <th>Provinsi</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data['wilayah'] as $w) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $w['kota_kab'] ?></td>
                                <td><?= $w['provinsi'] ?></td>
                                <td>
                                    <a href="#edit<?= $w['id'] ?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= BASEURL ?>/wilayah/delete/<?= $w['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php foreach ($data['edit'] as $edit) { ?>
    <!-- Modal -->
    <div class="modal fade" id="edit<?= $edit['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= BASEURL; ?>/wilayah/update">
                        <label>Kabupaten/Kota</label>
                        <input name="id" value="<?= $edit['id'] ?>" type="hidden" placeholder="Kabupaten/Kota" class="form-control" required>
                        <input name="kota_kab" value="<?= $edit['kota_kab'] ?>" type="text" placeholder="Kabupaten/Kota" class="form-control" required>
                        <br>
                        <label>Provinsi</label>
                        <input name="provinsi" value="<?= $edit['provinsi'] ?>" type="text" placeholder="Provinsi" class="form-control" required>
                        <br>
                        <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                        <button type="submit" class="btn btn-success"> <span class="fa fa-save"></span> Save</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>