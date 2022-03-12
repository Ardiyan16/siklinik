<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Penanganan Pasien</h1>
    <h5>
        <h5><?php Flasher::pesanpenanganan(); ?></h5>
    </h5>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#add" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus-circle"></i> Master Penanganan Pasien</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Tindakan</th>
                            <th>Obat</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['penanganan'] as $p) { ?>
                            <tr>
                                <td><?= $p['no_rekmed'] ?></td>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['tgl_lahir'] ?></td>
                                <td><?= $p['tindakan'] ?></td>
                                <td><?= $p['nama_obat'] ?></td>
                                <td>
                                    <a href="#edit<?= $p['id'] ?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= BASEURL ?>/user/delete/<?= $p['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Penanganan Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= BASEURL; ?>/pasien/save_penanganan">
                    <label>Tindakan</label>
                    <select name="id_tindakan" class="form-control">
                        <?php foreach ($data['tindakan'] as $t) { ?>
                            <option value="<?= $t['id'] ?>"><?= $t['tindakan'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <label>Nama</label>
                    <select name="no_rekmed" class="form-control">
                        <?php foreach ($data['pasien'] as $user) { ?>
                            <option value="<?= $user['no_rekmed'] ?>"><?= $user['nama'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <label>Obat</label>
                    <select name="id_obat" class="form-control">
                        <?php foreach ($data['obat'] as $obat) { ?>
                            <option value="<?= $obat['id'] ?>"><?= $obat['nama_obat'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <label>Keterangan</label>
                    <input name="keterangan" type="text" placeholder="Keterangan" class="form-control" required>
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

<?php foreach ($data['edit'] as $edit) { ?>
    <!-- Modal -->
    <div class="modal fade" id="edit<?= $edit['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Penanganan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= BASEURL; ?>/pasien/update_penanganan">
                        <label>Tindakan</label>
                        <input type="hidden" name="id" value="<?= $edit['id'] ?>">
                        <select name="id_tindakan" class="form-control">
                            <?php foreach ($data['tindakan'] as $t) { ?>
                                <option <?php if ($t['id'] == $edit['id_tindakan']) {
                                            echo 'selected="selected"';
                                        } ?> value="<?= $t['id'] ?>"><?= $t['tindakan'] ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <label>Nama</label>
                        <select name="no_rekmed" class="form-control">
                            <?php foreach ($data['pasien'] as $user) { ?>
                                <option <?php if ($user['no_rekmed'] == $edit['no_rekmed']) {
                                            echo 'selected="selected"';
                                        } ?> value="<?= $user['no_rekmed'] ?>"><?= $user['nama'] ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <label>Obat</label>
                        <select name="id_obat" class="form-control">
                            <?php foreach ($data['obat'] as $obat) { ?>
                                <option <?php if ($obat['id'] == $edit['id_obat']) {
                                            echo 'selected="selected"';
                                        } ?> value="<?= $obat['id'] ?>"><?= $obat['nama_obat'] ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <label>Keterangan</label>
                        <input name="keterangan" type="text" value="<?= $edit['keterangan'] ?>" placeholder="Keterangan" class="form-control" required>
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

</script>