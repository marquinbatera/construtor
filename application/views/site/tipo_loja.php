<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TURBOSITE | E-Commerce | Tipo de E-Commerce</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg" id="fundo">

    <div class="row" style="padding: 5px">
        <div class="col-lg-2">
            <img src="<?php echo base_url('assets/img/logomarca.png'); ?>" alt="Turbosite" class="img-responsive" />
        </div>
    </div>

    <div class="container" style="margin-top:10em;">
        <div class="col-lg-12" style="text-align: center;">
            <h1 style="font-weight: bolder; font-size: 2.5em;">Que tipo de solução de E-Commerce você deseja?</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="col-lg-3 col-lg-offset-3">
            <a href="<?php echo base_url('welcome/escolha_layout/1') ?>"> <img src="<?php echo base_url('assets/img/carrinho.png'); ?>" alt="Loja Virtual" class="img-responsive" /> </a>
             <h1 style="text-align:center">Loja virtual</h1>
        </div>
        <div class="col-lg-3">
            <a href="<?php echo base_url('welcome/escolha_layout/2') ?>"> <img src="<?php echo base_url('assets/img/catalogo.png'); ?>" alt="Catalogo Virtual" class="img-responsive" /> </a>
            <h1 style="text-align:center">Catálogo</h1>
        </div>


    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

</body>

</html>
