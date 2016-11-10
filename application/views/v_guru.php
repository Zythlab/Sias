<div id="msg" class="alert-success" role="alert" style="display: none">
    <span class="glyphicon glyphicon-ok-sign"></span> <label>Data Berhasil Disimpan!</label>
</div>
<div class="col-md-12">
    <div class='box pad'>
        <div class='box-header'>
            <h4 class='box-title'>Tambah Guru</h4>
            <!-- tools box -->
        </div>
        <!-- /.box-header -->
        <form method="post" id="form-user">
            <div class='box-body pad'>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <table class="table table-responsive">
                                <tr>
                                    <td>
                                        <label>NIP</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nip" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Nama</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nama" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Password</label>
                                    </td>
                                    <td>
                                        <input type="password" name="password" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Mata Pelajaran</label>
                                    </td>
                                    <td>
                                        <input type="telp" name="mapel" class="form-control" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Telepon</label>
                                    </td>
                                    <td>
                                        <input type="text" name="telp" class="form-control" required>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loader">
                <center>
                    <img class="loading-image" src="<?php echo base_url('assets'); ?>/img/loading.gif" alt="loading..">
                </center>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-success pull-right" value="Simpan" name="submit"
                               id="simpan">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class='box box-solid'>
        <div class="box-header">
        </div>
        <div class='box-body table-responsive'>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-stripped table-hover" id="data-posts">
                        <thead>
                        <tr>
                            <th>Nip</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Mata Pelajaran</th>
                            <th>Telp</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($biodata as $biodata) { ?>
                            <tr>
                                <td><?php echo $biodata->nip ?></td>
                                <td>
                                    <?php echo $biodata->nama ?>
                                </td>
                                <td><?php echo $biodata->password ?></td>
                                <td><?php echo $biodata->spesialis ?></td>
                                <td><?php echo $biodata->telp ?></td>

                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#myModal2<?php echo $biodata->nip; ?>">
                                        <span class="glyphicon glyphicon-edit" area-hidden="true"></span> Ubah
                                    </button>
                                    <div class="modal fade" id="myModal2<?php echo $biodata->nip; ?>" tabindex="-1"
                                         role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title">Ubah biodata</h4>
                                                </div>
                                                <form
                                                    action="<?= base_url('Biodata/ubah/') ?>/<?= $biodata->nip ?>"
                                                    method="post">
                                                    <div class="modal-body">
                                                        <table class="table table-stripped table-hover" id="data-posts">
                                                            <tr>
                                                                <td>
                                                                    nama
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                           name="nama"
                                                                           value="<?= $biodata->nama ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    password
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                           name="password"
                                                                           value="<?= $biodata->password ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    mata pelajaran
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                           name="mapel"
                                                                           value="<?= $biodata->spesialis ?>">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    telepon
                                                                </td>
                                                                <td>
                                                                    <input type="text" class="form-control"
                                                                           name="telp"
                                                                           value="<?= $biodata->telp ?>">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Kembali
                                                        </button>
                                                        <input type="submit" class="btn btn-success"
                                                               value="Save">
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#myModal<?= $biodata->nip ?>">
                                        <span class="glyphicon glyphicon-remove" area-hidden="true"></span> Hapus
                                    </button>
                                    <div class="modal fade" id="myModal<?= $biodata->nip ?>" tabindex="-1"
                                         role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="margin-top: 10%">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <center>Apakah Anda yakin ingin
                                                        menghapus <?= $biodata->nama ?></center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <a href="<?= base_url("Biodata/hapus") ?>/<?= $biodata->nip ?>"
                                                       class="btn btn-danger">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function () {
        $('#data-posts').dataTable();
        $("#form-user").submit(function (f) {
            f.preventDefault();
            $('#loading-image').show();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Biodata/tambah') ?>",
                data: $("#form-user").serialize(),
                success: function () {
                    $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('Biodata')?>",
                            success: function (result) {
                                $('#ganti').html(result);
                                $('#msg').show().fadeOut(7000).style.display = "block";
                            }
                        }
                    )
                },
                complete: function () {
                    $('#loading-image').hide();
                }
            });
        });
    });
</script>