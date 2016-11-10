<div class="box pad col-lg-10" id="ganti" style="border-top : transparent">
    <div class='box-body table-responsive'>
        <div class="row">
            <div class="col-md-12">
                <table class="table" id="data-posts">
                    <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Isi</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($pesan as $pesan) { ?>
                        <tr>
                            <td>
                                <?= $pesan->nip ?>
                            </td>
                            <td>
                                <?= $pesan->nama ?>
                            </td>
                            <td>
                                <?= $pesan->isi ?>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-success" data-toggle="modal"
                                        data-target="#modal<?= $pesan->id ?>">
                                    <span class="fa fa-send" area-hidden="true"></span> Balas
                                </button>
                                <div class="modal fade" id="modal<?= $pesan->id ?>" tabindex="-1"
                                     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Balas Pesan ke <?= $pesan->nama ?></h4>
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
                                                <input type="hidden" value="<?= $pesan->nip; ?>" name="nip">
                                                <input type="hidden"
                                                       value="<?= $this->session->userdata('nis') ?>"
                                                       name="nis">
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
