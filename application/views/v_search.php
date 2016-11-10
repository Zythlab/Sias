<div class="container-fluid">
    <div class="row">
        <div class="box pad col-lg-10" id="ganti" style="border-top : transparent">
            <div class='box-body table-responsive'>
                <?php foreach ($biodata as $biodata) { ?>
                <div class="box-header">
                    &nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span>
                    <h4 class="box-title">&nbsp;Nama : <?= $biodata->nama ?> </h4>

                    <div class="pull-right">
                        <h4 class="box-title">NIP : <?= $biodata->nip ?></h4>
                    </div>
                </div>
                <hr>
                <div class="col-md-2">
                    <img src="<?= base_url('assets') ?>/img/user.png" class="img-responsive"
                         alt="User Image" style="width: 60%"/>
                </div>
                <div class="biodata">
                    <div class="col-md-2">
                        <table>
                            <tr>
                                <td>
                                    <label><strong>Status</strong></label>
                                </td>
                                <td>
                                    <label> : Active</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><strong>Mata Pelajaran </strong></label>
                                </td>
                                <td>
                                    <label> : <?= $biodata->spesialis ?> </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label><strong>Telp</strong></label>
                                </td>
                                <td>
                                    <label> : <?= $biodata->telp ?></label>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="pull-right" style="margin-right:30px">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                            data-target="#pesan">
                        <i class="fa fa-envelope-o"></i> Pesan
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
                                <h4 class="modal-title">Pesan ke <?= $biodata->nama ?></h4>
                            </div>
                            <hr>
                            <form
                                action="<?= base_url('Pesan/simpan') ?>"
                                method="post">
                                <div class="modal-body">
                                    <table class="table table-stripped" id="data-posts">
                                        <tr>
                                            <td>
                                                <textarea class="form-control" cols="50" rows="10" name="pes"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="nis" value="<?=$this->session->userdata('nis')?>">
                                    <input type="hidden" name="nip" value="<?=$biodata->nip?>">
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
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>