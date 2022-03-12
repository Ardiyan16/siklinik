<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master User</h1>
    <h5>
        <h5><?php Flasher::pesanuser(); ?></h5>
    </h5>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= BASEURL; ?>/user/add_user" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No RM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['user'] as $u) { ?>
                            <tr>
                                <td><?= $u['no_rm'] ?></td>
                                <td><?= $u['nama'] ?></td>
                                <td><?= $u['tempat_lahir'] ?></td>
                                <td><?= $u['tgl_lahir'] ?></td>
                                <td>
                                    <a href="#edit<?= $u['id'] ?>" data-toggle="modal" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= BASEURL ?>/user/delete/<?= $u['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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
                    <form method="post" action="<?= BASEURL; ?>/user/update">
                        <input name="id" type="hidden" value="<?= $edit['id'] ?>" placeholder="No Rekam Medis" class="form-control" required>
                        <input name="no_rm" type="hidden" value="<?= $edit['no_rm'] ?>" placeholder="No Rekam Medis" class="form-control" required>
                        <label>Nama</label>
                        <input name="nama" type="text" value="<?= $edit['nama'] ?>" placeholder="Nama" class="form-control" required>
                        <br>
                        <label>Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" value="<?= $edit['tempat_lahir'] ?>" placeholder="Tempat Lahir" class="form-control" required>
                        <br>
                        <label>Tanggal Lahir</label>
                        <input name="tgl_lahir" type="date" placeholder="Harga Grosir" value="<?= $edit['tgl_lahir'] ?>" class="form-control" required>
                        <input name="password" value="<?= $edit['password'] ?>" type="hidden" value="12345678" placeholder="Stok" class="form-control" required>
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