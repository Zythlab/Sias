<!DOCTYPE html>
<html>

<head>
    <title><?php echo $sites ?> | <?php echo $pages ?></title>
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

<body id="ganti">
<!-- wrapper-->
<!-- navbar -->
<div class="navbar navbar-default navbar-static-top my-nav">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand admin">SIAS</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#menu-toggle" style="border:0px;" id="menu-toggle"><i
                        class="fa fa-align-justify fa-lg"></i></a></li>
        </ul>
        <div class="navbar-collapse collapse" id="navbar-main">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i
                            class="fa fa-user fa-lg"></i> <?= $this->session->userdata('username') ?><span
                            class="caret"></span></a>
                    <ul class="dropdown-menu admin" aria-labelledby="themes">
                        <li>
                            <center><img src="<?php echo base_url('assets'); ?>/img/user2.png" class="img-circle"
                                         alt="User Image"/></center>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?= base_url('Pengguna/logout') ?>"><i class="fa fa-user-times"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <!-- navbar -->
</div>
<!-- aside-->
<?php

?>
<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <?php
            $active_s = null;
            $active_k = null;
            $active_n = null;
            $active_p = null;
            $active_b = null;
            $active_kel = null;
            ?>
            <?php if ($this->session->userdata('username') == 'admin') {
                if ($pages == "Tambah siswa") $active_s = "active";
                if ($pages == "Kritik & Saran") $active_k = "active";
                if ($pages == "Tambah kelas") $active_kel = "active";
                if ($pages == "Tambah Guru") $active_b = "active";

                ?>
                <li class="<?= $active_s ?>">
                    <a href="<?= base_url('Siswa') ?>">Tambah Siswa</a>
                </li>
                <li class="<?= $active_k ?>">
                    <a href="<?= base_url('CKritikSaran') ?>">Kritik Saran</a>
                </li>
                <li class="<?= $active_b ?>">
                    <a href="<?= base_url('Biodata') ?>">Tambah Guru</a>
                </li>
                <li class="<?= $active_kel ?>">
                    <a href="<?= base_url('Kelas') ?>">Kelas</a>
                </li>
            <?php } ?>
            <?php if ($this->session->userdata('username') == 'guru') {
                if ($pages == "Nilai") $active_n = "active";
                if ($pages == "Pesan") $active_p = "active";
                ?>
                <li class="<?= $active_n ?>">
                    <a href="<?= base_url('Nilai') ?>">Nilai</a>
                </li>
                <li class="<?= $active_p ?>">
                    <a href="<?= base_url('Pesan') ?>"></i>Pesan</a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="content">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <!-- wrapper-->
</div>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>