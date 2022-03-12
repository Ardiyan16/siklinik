<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Master Pasien</h1>
    <h5>
        <h5><?php Flasher::pesanpasien(); ?></h5>
    </h5>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#add" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus-circle"></i> Pendaftaran Pasien</a>
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
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['pasien'] as $p) { ?>
                            <tr>
                                <td><?= $p['no_rekmed'] ?></td>
                                <td><?= $p['nama'] ?></td>
                                <td><?= $p['tempat_lahir'] ?></td>
                                <td><?= $p['tgl_lahir'] ?></td>
                                <td><?= $p['jk'] ?></td>
                                <td><?= $p['usia'] ?></td>
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
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= BASEURL; ?>/pasien/save">
                    <label>Nama</label>
                    <select name="no_rekmed" class="form-control">
                        <?php foreach ($data['user'] as $user) { ?>
                            <option value="<?= $user['no_rm'] ?>"><?= $user['nama'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <br>
                    <label>Usia</label>
                    <input name="usia" type="number" placeholder="Usia" class="form-control" required>
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= BASEURL; ?>/pasien/update">
                        <label>Nama</label>
                        <select name="no_rekmed" class="form-control">
                            <?php foreach ($data['user'] as $user) { ?>
                                <option <?php if ($edit['no_rekmed'] == $user['no_rm']) {
                                            echo 'selected="selected"';
                                        } ?> value="<?= $user['no_rm'] ?>"><?= $user['nama'] ?></option>
                            <?php } ?>
                        </select>
                        <br>
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option <?php if ($edit['jk'] == 'laki-laki') {
                                            echo 'selected="selected"';
                                        } ?> value="laki-laki">Laki-Laki</option>
                            <option <?php if ($edit['jk'] == 'perempuan') {
                                            echo 'selected="selected"';
                                        } ?> value="perempuan">Perempuan</option>
                        </select>
                        <br>
                        <label>Usia</label>
                        <input name="usia" type="number" value="<?= $edit['usia'] ?>" placeholder="Usia" class="form-control" required>
                        <input name="id" type="hidden" value="<?= $edit['id'] ?>" placeholder="Usia" class="form-control" required>
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

<!-- Modal -->
<div class="modal fade" id="data_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">List User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Centang</th>
                                <th>No RM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['user'] as $u) { ?>
                                <tr>
                                    <td><input type="checkbox" class="checklist" id="checlist" value="<?= $u['id'] ?>"></td>
                                    <td><?= $u['no_rm'] ?></td>
                                    <td><?= $u['nama'] ?></td>
                                    <td><?= $u['tempat_lahir'] ?></td>
                                    <td><?= $u['tgl_lahir'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary pilihan" data-dismiss="modal">Pilih</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(".checklist").on("click", function() {
        if ($(".checklist:checked").length < 2) {
            $('.pilihan').prop('disabled', false);
            // $('.dipilihan').prop('disabled', false);
        } else {
            $('.pilihan').prop('disabled', true);
            // $('.diambil').prop('disabled', true);
        }
    });


    $('.pilihan').click(function(e) {
        e.preventDefault();
        var arr = [];
        var checkedValue = $(".checklist:checked").val();
        console.log('checked', checkedValue);
        //$('#tambahpenggajian').modal('show');
        $.ajax({
            url: "<?= BASEURL; ?>/pasien/by_user" + checkedValue,
            type: "GET",
            dataType: "JSON",
            success: function(result) {
                $('[name="no_rm"]').val(result.no_rm);
                $('[name="nama"]').val(result.nama);
                $('[name="tempat_lahir"]').val(result.id_service);
                $('[name="tgl_lahir"]').val(result.tgl_lahir);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Data Eror');
            }
        })
    });
</script>