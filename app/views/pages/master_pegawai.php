<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Pegawai</h1>
    <h5>
        <h5><?php Flasher::pesanpegawai(); ?></h5>
    </h5>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= BASEURL; ?>/pegawai/add" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add Pegawai</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Jabatan</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data['pegawai'] as $p) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['nama_lengkap'] ?></td>
                                <td><?= $p['alamat'] ?></td>
                                <td><?= $p['no_telp'] ?></td>
                                <td><?= $p['jabatan'] ?></td>
                                <td>
                                    <a href="#edit<?= $p['id'] ?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= BASEURL ?>/pegawai/delete/<?= $p['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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
                    <form method="post" action="<?= BASEURL; ?>/pegawai/update">
                        <label>Nama Lengkap</label>
                        <input name="id" value="<?= $edit['id'] ?>" type="hidden" placeholder="Nama Lengkap" class="form-control" required>
                        <input name="nama_lengkap" value="<?= $edit['nama_lengkap'] ?>" type="text" placeholder="Nama Lengkap" class="form-control" required>
                        <br>
                        <label>Alamat</label>
                        <input name="alamat" type="text" value="<?= $edit['alamat'] ?>" placeholder="Alamat" class="form-control" required>
                        <br>
                        <label>No Telepon</label>
                        <input name="no_telp" type="number" value="<?= $edit['no_telp'] ?>" placeholder="No Telepon" class="form-control" required>
                        <br>
                        <label>Jabatan</label>
                        <input name="jabatan" type="text" value="<?= $edit['jabatan'] ?>" placeholder="Jabatan" class="form-control" required>
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