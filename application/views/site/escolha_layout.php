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

<body class="red-bg" id="fundo">

    <div class="row" style="padding: 5px">
        <div class="col-lg-2">
            <img src="<?php echo base_url('assets/img/logomarca-branca.png'); ?>" alt="Turbosite" class="img-responsive" />
        </div>
    </div>

    <div class="container" style="margin-top:10em;">
        <div class="col-lg-12" style="text-align: center;">
            <h1 style="font-weight: bolder; font-size: 2.5em; color:#fff">Escolha um layout para sua loja</h1>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="col-lg-4">
            <div class="jumbotron text-center">
                <h2>Layout 1</h2>
                <img src="<?php echo base_url('assets/img/layout1.png'); ?>">
                <!-- <p>Barra de categorias na lateral esquerda.</p> -->
                <br>
                <br>
                <p><a role="button" class="btn btn-primary btn-lg" onclick="escolheTemplate(1);">Escolher</a>
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="jumbotron text-center">
                <h2>Layout 2</h2>
                <img src="<?php echo base_url('assets/img/layout2.png'); ?>">
                <!-- <p>Barra de categorias na lateral direita.</p> -->
                <br>
                <br>
                <p><a role="button" class="btn btn-primary btn-lg">Escolher</a>
                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="jumbotron text-center">
                <h2>Layout 3</h2>
                <img src="<?php echo base_url('assets/img/layout3.png'); ?>">
                <!-- <p>Categoria no menu.</p> -->
                <br>
                <br>
                <p><a role="button" class="btn btn-primary btn-lg">Escolher</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function(){


        });

        function escolheTemplate(template)
        {
            $.ajax({
                type:'POST',
                url:'<?php echo base_url('template')?>',
                data: {
                    template: template
                },
                success: function(data){
                    location.href = '<?php echo base_url('welcome/easy/').$this->session->userdata('id_loja'); ?>';
                }
            });
        }
    </script>

</body>

</html>
