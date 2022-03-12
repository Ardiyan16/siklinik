<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Obat</h1>
    <h5>
        <h5><?php Flasher::pesanobat(); ?></h5>
    </h5>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= BASEURL; ?>/obat/add" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Obat</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Jenis</th>
                            <th>Usia</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data['obat'] as $o) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $o['nama_obat'] ?></td>
                                <td><?= $o['jenis'] ?></td>
                                <td><?= $o['usia'] ?></td>
                                <td><?= $o['tgl_kadaluarsa'] ?></td>
                                <td>
                                    <a href="#edit<?= $o['id'] ?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= BASEURL ?>/obat/delete/<?= $o['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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
                    <form method="post" action="<?= BASEURL; ?>/obat/update">
                        <input name="id" type="hidden" value="<?= $edit['id'] ?>" placeholder="No Rekam Medis" class="form-control" required>
                        <label>Nama Obat</label>
                        <input name="nama_obat" value="<?= $edit['nama_obat'] ?>" type="text" placeholder="Nama Obat" class="form-control" required>
                        <br>
                        <label>Jenis</label>
                        <input name="jenis" type="text" value="<?= $edit['jenis'] ?>" placeholder="Jenis" class="form-control" required>
                        <br>
                        <label>Usia</label>
                        <input name="usia" type="text" value="<?= $edit['usia'] ?>" placeholder="Usia" class="form-control" required>
                        <br>
                        <label>Tanggal Kadaluarsa</label>
                        <input name="tgl_kadaluarsa" type="date" value="<?= $edit['tgl_kadaluarsa'] ?>" placeholder="Harga Grosir" class="form-control" required>
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