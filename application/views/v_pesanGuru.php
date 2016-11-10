<div class="row pad">
    <div class="pull-right" style="margin-right:30px">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                data-target="#pesan">
            <i class="fa fa-envelope-o"></i> Kirim Pesan
        </button>
    </div>
    <div class="modal fade" id="pesan" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Kirim Pesan </h4>
                </div>
                <hr>
                <form
                    action="<?= base_url('Pesan/simpan') ?>"
                    method="post">
                    <div class="modal-body">
                        <table class="table table-stripped" id="data-posts">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" name="nis" placeholder="Ke (NIS)">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea class="form-control" cols="50" rows="10" name="pes"
                                              placeholder="isi pesan"></textarea>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="nip" value="<?= $this->session->userdata('nip') ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"
                                data-dismiss="modal">Kembali
                        </button>
                        <input type="submit" class="btn btn-success"
                               value="Kirim">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class='box pad'>
            <div class="box-header">
                <h4 class='box-title'>
                    &nbsp;&nbsp;&nbsp;Pesan</h4>
            </div>
            <hr>
            <div class='box-body table-responsive'>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-stripped table-hover" id="data-posts">
                            <thead>
                            <tr>
                                <th>Nis</th>
                                <th>Isi</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($pes as $pes) { ?>
                                <tr>
                                    <td>
                                        <?= $pes->nis ?>
                                    </td>
                                    <td>
                                        <?= $pes->isi ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#myModal2<?php echo $pes->id; ?>">
                                            <span class="fa fa-send" area-hidden="true"></span> Balas
                                        </button>
                                        <div class="modal fade" id="myModal2<?php echo $pes->id; ?>" tabindex="-1"
                                             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h4 class="modal-title">Balas pesan
                                                            ke <?php echo $pes->nis; ?></h4>
                                                    </div>
                                                    <hr>
                                                    <?= form_open('Pesan/simpan') ?>
                                                    <div class="modal-body">
                                                        <table class="table table-stripped" id="data-posts">
                                                            <tr>
                                                                <td>
                                                                    <textarea class="form-control" cols="50" rows="10"
                                                                              name="pes"></textarea>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <input type="hidden" value="<?= $pes->nis; ?>" name="nis">
                                                        <input type="hidden"
                                                               value="<?= $this->session->userdata('nip') ?>"
                                                               name="nip">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Kembali
                                                        </button>
                                                        <input type="submit" class="btn btn-success"
                                                               value="Kirim">
                                                    </div>
                                                    <?= form_close() ?>
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
