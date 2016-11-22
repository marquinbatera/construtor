<!-- Navigation -->
<style type="text/css">
    .menuAll{
        height: 100px;
        margin-top: 61px;
    }
</style>
            <nav class="modifmenu menuAll navbar navbar-default resize-bloco editable" elemento=".menuAll" funcao="edicao_fundo" id_caixa="#menu" id="menu" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand conteudoLogo" href="#">
                            <img class="img-responsive" src="<?php echo base_url().$logo[0]['img']; ?>" style="max-width: 190px; max-height: 80px;">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="conteudoMenu collapse navbar-collapse text-righ" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right editable" elemento=".links_menu" funcao="edicao_texto_link" id_caixa="#textMenu" id="textMenu">
                            <li>
                                <a class="modifmenu links_menu" id="links-menu" id_tipo="texto_menu" href="#">Sobre</a>
                            </li>
                            <li>
                                <a class="links_menu" href="#">Produtos</a>
                            </li>
                            <li>
                                <a class="links_menu" href="#">Contato</a>
                            </li>
                            <li>
                                <a class="links_menu" href="#">0 Item(s) <i class="flaticon-shopping-cart texte-center"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>