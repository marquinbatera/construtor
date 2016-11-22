<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg" id="fundo">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="<?php echo base_url('assets/img/logo.png'); ?>"></h1>

            </div>
            <br>
            <!-- <h3>Register to IN+</h3> -->
            <p>Crie sua conta.</p>
            <?php if(!empty($message)){ ?>
            <div class="alert alert-<?php echo $alert; ?> alert-dismissable" id="alerta">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <?php echo $message;?>
            </div>
            <?php } ?>
            <?php echo form_open("auth/create_user");?>
            <!-- <form class="m-t" role="form" method="post" action="<?php echo base_url('auth/create_user'); ?>"> -->
                <div class="form-group">
                    <?php echo form_input($nome_site);?>
                </div>
                <div class="form-group">
                    <?php echo form_input($first_name);?>
                </div>
                <div class="form-group">
                    <?php echo form_input($email);?>
                </div>
                <div class="form-group">
                    <?php echo form_input($password);?>
                </div>
                <div class="form-group">
                    <?php echo form_input($password_confirm);?>
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Aceito os termos e política </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Cadastrar</button>

                <p class="text-muted text-center"><small>Já tem uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url('auth/login'); ?>">Login</a>
            </form>
            <p class="m-t"> <small>Turbosite &copy; 2016</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/funcoes.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
