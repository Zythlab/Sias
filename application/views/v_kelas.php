<div id="msg" class="alert-success" role="alert" style="display: none">
    <span class="glyphicon glyphicon-ok-sign"></span> <label>Data Berhasil Disimpan!</label>
</div>
<div class="col-md-12">
    <div class='box pad'>
        <div class='box-header'>
            <h4 class='box-title'>Tambah Kelas</h4>
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
                                        <label>Kelas</label>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="kelas">
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
                            <th>kelas</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($kelas as $kelas) { ?>
                            <tr>
                                <td><?php echo $kelas->kode ?></td>

                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#myModal<?= $kelas->id ?>">
                                        <span class="glyphicon glyphicon-remove" area-hidden="true"></span> Hapus
                                    </button>
                                    <div class="modal fade" id="myModal<?= $kelas->id ?>" tabindex="-1"
                                         role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="margin-top: 10%">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <center>Apakah Anda yakin ingin
                                                        menghapus <?= $kelas->kode ?></center>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                    <a href="<?= base_url("Kelas/hapus") ?>/<?= $kelas->id ?>"
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
                url: "<?php echo base_url('Kelas/tambah') ?>",
                data: $("#form-user").serialize(),
                success: function () {
                    $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('Kelas')?>",
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