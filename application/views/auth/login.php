<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TURBOSITE | E-Commerce | Login</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg" id="fundo">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="<?php echo base_url('assets/img/logo.png'); ?>"></h1>

            </div>
            <br>
            <p>Faça seu login.</p>
            <?php if(!empty($message)){ ?>
            <div class="alert alert-<?php echo $alert;?> alert-dismissable" id="alerta">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <?php echo $message;?>
            </div>
            <?php } ?>
            <form class="m-t" role="form" method="post" action="<?php echo base_url('auth/login') ?>" >
                <div class="form-group">
                    <?php echo form_input($identity);?>
                </div>
                <div class="form-group">
                    <?php echo form_input($password);?>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>

                <a href="<?php echo base_url('auth/forgot_password') ?>"><small>Esqueceu a senha?</small></a>
                <p class="text-muted text-center"><small>Nao tem uma conta?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url('auth/create_user') ?>">Criar uma conta</a>
            </form>
            <p class="m-t"> <small>Turbosite &copy; 2016</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/funcoes.js"></script>

</body>

</html>
