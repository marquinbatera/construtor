<!-- <body class="modifbody fundo_site editable" elemento=".fundo_site" funcao="edicao_fundo" id_caixa=".conteudoLogo" id="body_site"> -->
    <!-- <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>"> -->
<!-- Navigation -->
            <nav class="menuAll navbar navbar-default resize-bloco" id="menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand conteudoLogo" href="<?php echo base_url('visual/index') ?>">
                            <img class="img-responsive" src="<?php echo base_url().$logo[0]['img']; ?>" style="max-width: 190px; max-height: 80px;">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="conteudoMenu collapse navbar-collapse text-righ" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right" id="textMenu">
                            <li>
                                <a class="links_menu" id="links-menu" id_tipo="texto_menu" href="<?php echo base_url('visual/sobre') ?>">Sobre</a>
                            </li>
                            <li>
                                <a class="links_menu" href="<?php echo base_url('visual/grid') ?>">Produtos</a>
                            </li>
                            <li>
                                <a class="links_menu" href="<?php echo base_url('visual/contato') ?>">Contato</a>
                            </li>
                            <li>
                                <a class="links_menu" href="<?php echo base_url('visual/carrinho') ?>">0 Item(s) <i class="flaticon-shopping-cart texte-center"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>