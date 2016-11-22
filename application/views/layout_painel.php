<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{!title!}}</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/dropzone/dropzone.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url(); ?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- DROPZONE -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/dropzone/dropzone.js"></script>

    <!-- Color picker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>




</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <span>
                                <img alt="image" class="img-circle" src="<?php echo base_url(); ?>assets/img/profile_small.jpg" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->ion_auth->user()->row()->username; ?></strong>
                                </span> 
                                <span class="text-muted text-xs block">Art Director </span> </span> 
                            </a>
                            
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href="#" class="setarpag" data-pagina="temp1home" id="designHome"><i class="fa fa-th-large"></i> <span class="nav-label">Design Home</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout1">Cores</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout7">Fontes</a></li>
                            <!-- <li><a href="#">Dashboard v.3</a></li>
                            <li><a href="#">Dashboard v.4</a></li>
                            <li><a href="#">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="setarpag" data-pagina="temp1listaprod"><i class="fa fa-th-large"></i> <span class="nav-label">Design Lista Produtos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout2">Cores</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout8">Fontes</a></li>
                            <!-- <li><a href="#">Dashboard v.3</a></li>
                            <li><a href="#">Dashboard v.4</a></li>
                            <li><a href="#">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li> -->
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#" class="setarpag" data-pagina="temp1detprod"><i class="fa fa-th-large"></i> <span class="nav-label">Design Produto</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout3">Cores</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout9">Fontes</a></li>
                            <!-- <li><a href="#">Dashboard v.3</a></li>
                            <li><a href="#">Dashboard v.4</a></li>
                            <li><a href="#">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="setarpag" data-pagina="temp1carrinho"><i class="fa fa-th-large"></i> <span class="nav-label">Design Carrinho</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout4">Cores</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout10">Fontes</a></li>
                            <!-- <li><a href="#">Dashboard v.3</a></li>
                            <li><a href="#">Dashboard v.4</a></li>
                            <li><a href="#">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="setarpag" data-pagina="temp1pag"><i class="fa fa-th-large"></i> <span class="nav-label">Design Pagamento</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout5">Cores</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout11">Fontes</a></li>
                           <!--  <li><a href="#">Dashboard v.3</a></li>
                            <li><a href="#">Dashboard v.4</a></li>
                            <li><a href="#">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="setarpag" data-pagina="temp1contato"><i class="fa fa-th-large"></i> <span class="nav-label">Design Contato</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout6">Cores</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#modalLayout12">Fontes</a></li>
                            <!-- <li><a href="#">Dashboard v.3</a></li>
                            <li><a href="#">Dashboard v.4</a></li>
                            <li><a href="#">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li> -->
                        </ul>
                    </li>

                </ul>

            </div>
        </nav> <!-- Final do menu lateral -->

        <div id="page-wrapper" class="gray-bg">
            <?php $this->load->view('partials/topo');?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>{{!head!}}</h2>
                    <!-- <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol> -->
                </div>
               <!--  <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content">
                <?php $this->load->view($view); ?>
                
            </div>
            <div class="footer">
                <?php $this->load->view('partials/footer');?>
            </div>

        </div>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/funcoes.js"></script>


</body>
</html>
