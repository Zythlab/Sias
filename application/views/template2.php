<!DOCTYPE html>
<html>

<head>
    <head>
        <title><?php echo $pages ?><?php echo $sites ?></title>
        <link rel="shortcut icon" href="<?php echo base_url('assets'); ?>/img/idc.jpg" type="image/jpg">
        <meta charset="UTF-8">
        <link href="<?php echo base_url('assets'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets'); ?>/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet"
              type="text/css"/>
        <link href="<?php echo base_url('assets'); ?>/FA/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- Ionicons -->
        <script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jQuery-2.1.3.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets'); ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets'); ?>/js/jquery-ui.min.js" type="text/javascript"></script>

        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets'); ?>/plugins/datatables/jquery.dataTables.js"
                type="text/javascript"></script>
        <script src="<?php echo base_url('assets'); ?>/plugins/datatables/jquery.dataTables.columnFilter.js"
                type="text/javascript"></script>
        <script src="<?php echo base_url('assets'); ?>/plugins/datatables/dataTables.bootstrap.js"
                type="text/javascript"></script>
        <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url('assets'); ?>/js/jquery-ui.min.js" type="text/javascript"></script>

    </head>
</head>

<body>
<section class="top">
    <div class="bs-component">
        <nav class="navbar navbar-default siswa">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SIAS</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <?php $a = null;
                        $a2 = null;
                        if ($pages == "Nilai") $a = "active";
                        else if ($pages == "Pesan") $a2 = "active";
                        ?>
                        <li class="<?= $a; ?>"><a href="<?= base_url('Nilai'); ?>">Nilai</a></li>
                        <li class="<?= $a2; ?>"><a href="<?= base_url('Pesan/tampilFormPesan'); ?>">Pesan</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i
                                    class="fa fa-user fa-lg"></i> <?= $this->session->userdata('username'); ?><span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu admin" aria-labelledby="themes">
                                <li>
                                    <center><img src="<?php echo base_url('assets'); ?>/img/user.png"
                                                 class="img-circle"
                                                 alt="User Image"/></center>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url('Pengguna'); ?>/logout"><i
                                            class="fa fa-user-times"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search" action="<?= base_url('Biodata') ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" name="q" placeholder="Cari Guru">
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</section>
<section id="mid">
    <div class="bs-component">
        <div class="container-dewe">
            <div class="row">
                <div class="box pad col-lg-10">
                    <div class="box-header">
                        &nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span> <h4 class="box-title">&nbsp;Nama
                            Siswa :
                            <?= $this->session->userdata('username') ?> </h4>

                        <div class="pull-right">
                            <h4 class="box-title">NIS : <?= $this->session->userdata('nis') ?></h4>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-2">
                        <img src="<?php echo base_url('assets'); ?>/img/user.png" class="img-responsive"
                             alt="User Image" style="width: 60%"/>
                    </div>
                    <div class="biodata">
                        <div class="col-md-2">
                            <label><strong>Status</strong></label> : Active<br>
                            <label><strong>Kelas </strong>: <?= $this->session->userdata('kelas') ?></label>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-right:30px">
                        <button class="btn btn-sm btn-success" data-toggle="modal"
                                data-target="#kritik">Kritik Saran
                        </button>
                        <div class="modal fade" id="kritik" tabindex="-1"
                             role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title">Kritik & Saran</h4>
                                    </div>
                                    <hr>
                                    <form
                                        action="<?= base_url('CKritikSaran/kirimKritikSaran') ?>"
                                        method="post">
                                        <div class="modal-body">
                                            <table class="table table-stripped" id="data-posts">
                                                <tr>
                                                    <td>
                                                        <textarea class="form-control" cols="50" rows="10"
                                                                  name="ks"></textarea>
                                                    </td>
                                                </tr>
                                            </table>
                                            <input type="hidden" value="<?= $this->session->userdata('nis') ?>"
                                                   name="nis">
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
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cont">
    <div class="container-dewe">
        <div class="row">
            <?= $content ?>
        </div>
    </div>
</section>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        $("#search").autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: "<?php echo site_url('Biodata/search'); ?>",
                    data: {s: $("#search").val()},
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
                        response(data);
                    }
                });
            }
        });
    });
</script>
</html>