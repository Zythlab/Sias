<!DOCTYPE html>
<html>

<head>
    <title>SIAS Login</title>
    <meta charset="UTF-8">
    <link href="<?php echo base_url('assets'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets'); ?>/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url('assets'); ?>/FA/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->

</head>
<body>
<div class="login-box">
    <div class="login-logo">
        <i class="fa fa-sign-in"></i> Sign in
    </div>
    <div class="login-box-body">
        <form action="<?= base_url('Pengguna/getLoginAuth'); ?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="email" placeholder="Username"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="pass" placeholder="Password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <?= $notice ?>
            <div class="row">
                <div class="col-xs-4 pull-right">
                    <button type="submit" class="btn btn-primary btn-block">login</button>
                </div><!-- /.col -->
            </div>
        </form>
    </div>
</div>

<!-- jQuery 2.1.3 -->
<script src="<?php echo base_url('assets'); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/plugins/jQuery/jQuery-2.1.3.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets'); ?>/js/jquery-ui.min.js" type="text/javascript"></script>
</body>
</html