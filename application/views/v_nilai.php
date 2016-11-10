<div id="msg" class="alert-success" role="alert" style="display: none">
    <span class="glyphicon glyphicon-ok-sign"></span> <label>Data Berhasil Disimpan!</label>
</div>
<div class='row'>
    <div class='col-md-12'>
        <div class="row">
            <div class="col-md-6 col-md-offset-7">
                <form action="" method="post" id="tampil">
                    <table>
                        <tr>
                            <td>
                                <label>Kelas &nbsp;</label>
                            </td>
                            <td>
                                <select name="kelas" id="kelas" class="form-control">
                                    <option value="default" selected="selected">Pilih Kelas</option>
                                    <option value="7A" >7A</option>
                                    <option value="7B" >7B</option>
                                    <option value="8A" >8A</option>
                                    <option value="8B" >8B</option>
                                    <option value="9A" >9A</option>
                                    <option value="9B" >9B</option>
                                </select>
                            </td>
                            <td>&nbsp;&nbsp;</td>
                            <td>
                                <select name="tipe" id="tipe" class="form-control">
                                    <option id="type" value="default" selected="selected">Pilih Nilai</option>
                                    <option id="type" value="ul1">Ulangan Harian 1</option>
                                    <option id="type" value="ul2">Ulangan Harian 2</option>
                                    <option id="type" value="ul3">Ulangan Harian 3</option>
                                    <option id="type" value="ul4">Ulangan Harian 4</option>
                                    <option id="type" value="uts">UTS</option>
                                    <option id="type" value="uas">UAS</option>
                                </select>
                            </td>
                            <td>&nbsp;&nbsp;</td>
                            <td>
                                <input type="submit" class="btn btn-primary btn-sm" value="Tampil">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
            </div>
        </div>
        <!-- /.box-header -->
        <!-- /.box -->
        <div class='box '>
            <div class="box-header">
                <h4 class='box-title'>
                    &nbsp;&nbsp;&nbsp;Nilai <?php if ($this->uri->segment(4) == 'ul1') echo "Ulangan ke 1" ?>
                    <?php if ($this->uri->segment(4) == 'ul2') echo "Ulangan ke 2" ?>
                    <?php if ($this->uri->segment(4) == 'ul3') echo "Ulangan ke 3" ?>
                    <?php if ($this->uri->segment(4) == 'ul4') echo "Ulangan ke 4" ?>
                    <?php if ($this->uri->segment(4) == 'uts') echo "UTS" ?>
                    <?php if ($this->uri->segment(4) == 'uas') echo "UAS" ?>

                    - Kelas <?= $this->uri->segment(3) ?></h4>
            </div>
            <hr>
            <div class='box-body table-responsive'>
                <div class="row">
                    <div class="col-md-12">
                        <form id="put" method="post">
                            <table class="table table-stripped table-hover" id="data-posts">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Agama</th>
                                    <th>PKN</th>
                                    <th>Matematika</th>
                                    <th>IPA</th>
                                    <th>IPS</th>
                                    <th>B.Indonesia</th>
                                    <th>B.Inggris</th>
                                    <th>Penjas</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                if ($this->uri->segment(3)) {
                                    foreach ($nilai as $nilai) { ?>
                                        <tr>
                                            <td><?= $nilai->nama ?></td>
                                            <td><input type="text" value="<?= $nilai->agama ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai1[]">
                                            </td>
                                            <td><input type="text" value="<?= $nilai->pkn ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai2[]">
                                            </td>
                                            <td><input type="text" value="<?= $nilai->mat ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai3[]">
                                            </td>
                                            <td><input type="text" value="<?= $nilai->ipa ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai4[]">
                                            </td>
                                            <td><input type="text" value="<?= $nilai->ips ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai5[]">
                                            </td>
                                            <td><input type="text" value="<?= $nilai->bindo ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai6[]">
                                            </td>
                                            <td><input type="text" value="<?= $nilai->bing ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai7[]">
                                            </td>
                                            <td><input type="text" value="<?= $nilai->penjas ?>"
                                                       class="form-control"
                                                       id="inputCek" size="2" maxlength="5" name="nilai8[]">
                                            </td>
                                            <input type="hidden" name="nis[]" value="<?= $nilai->nis ?>">
                                            <input type="hidden" name="kelas[]"
                                                   value="<?= $this->uri->segment(3) ?>">
                                            <input type="hidden" name="tipe[]"
                                                   value="<?= $this->uri->segment(4) ?>">
                                        </tr>
                                    <?php }
                                } ?>
                                </tbody>
                            </table>
                            <div class="box-footer col-md-offset-11">
                                <input type="submit" class="btn btn-primary btn-sm" value="Proses">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>


    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function () {
            $('#data-posts').dataTable();
            $("#put").submit(function (f) {
                f.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('Nilai/masukkanNilai/') ?>/<?= $this->uri->segment(3) ?>/<?= $this->uri->segment(4) ?> ",
                    data: $("#put").serialize(),
                    success: function () {
                        $.ajax({
                                type: "POST",
                                url: "<?php echo base_url('Nilai/tampil')?>/<?= $this->uri->segment(3) ?>/<?= $this->uri->segment(4) ?>",
                                success: function (result) {
                                    $('#ganti').html(result);
                                    $('#msg').show().fadeOut(5000).style.display = "block";
                                }
                            }
                        )
                    },
                });
            });
        });

        $("#tampil").submit(function (e) {
            e.preventDefault();
            submit();
        });
        function submit() {
            $.ajax({
                type: "POST",
                url: "<?=base_url("Nilai")?>/tampil/" + $("#kelas").val() + "/" + $("#tipe").val(),
                success: function (result) {
                    $('#ganti').html(result);
                }
            })
        }
        $("select option[value='<?= $this->uri->segment(3)?>']").attr("selected", "selected");
        $("select option[value='<?= $this->uri->segment(4)?>']").attr("selected", "selected");

    </script>
