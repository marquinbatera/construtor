<!-- Header -->
    <div class="container-fluid">
        <header class="row">
            
            <?php $this->load->view('partials/menu');?>
        </header>
    </div>

    <!-- Banner -->
    <div class="wrapper dropzone js-drop bloco resize-bloco" id="drop111">
        Arraste um Slideshow aqui!
    </div>

    <!-- Container -->
    <div class="container-fluid">
        <div class="modif fundo_content row editable" elemento=".fundo_content" funcao="edicao_fundo" id_caixa="#fundo_cont" id="fundo_cont">
            <div role="main" class="col-md-8 col-md-push-2" id="ordem">
                <div class="modif row dropzone js-drop bloco" id="drop1" data-pos="1">
                    recipiente 1
                </div>
                <div class="modif row dropzone js-drop bloco" id="drop2" data-pos="2">
                    recipiente 2
                </div>

                <!-- teste grid de produtos -->  
                <div class="modif row" id="drop3" data-pos="3">
                    <div id="produtos" class="content">
                        <div class="col-md-2">
                            <div class="modif panel panel-primary editable" id="format-corpo-categoria" style="border: none;">
                                <div class="modif luis panel-heading editable" elemento=".panel" funcao="edicao_fundo" id_caixa="#format-corpo-categoria" id="format-titulo-categoria">
                                    <h3 class="panel-title editable" elemento=".luis" funcao="edicao_texto_fundo" id_caixa="#categoria" id="categoria">Categorias</h3>
                                </div>
                                <div class="panel-body editable" elemento=".botao-categoria" funcao="edicao_botao" id_caixa="#listCategoria" id="listCategoria"> 
                                    <a href="javascript:" class="modif botao-categoria btn btn-default btn-block" id="botao-cat">Categoria 1</a>
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block">Categoria 2</a>
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block">Categoria 3</a>
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block">Categoria 4</a>
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block">Categoria 5</a>
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block">Categoria 6</a>
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block">Categoria 7</a>
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block">Categoria 8</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="modif product-box ibox-content" id="box-prod">
                                            <div class="product-imitation editable" elemento=".product-box" funcao="edicao_fundo" id_caixa="#fundo_product" id="fundo_product">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="modif product-price editable" elemento=".product-price" funcao="edicao_texto_fundo" id_caixa="#price_prod" id="price_prod">
                                                    $10
                                                </span>
                                                <small class="modif texto-categoria text-muted editable" elemento=".texto-categoria" funcao="edicao_texto_fundo" id_caixa="#desc_prod" id="desc_prod">Category</small>
                                                <a href="javascript:" class="modif product-name editable" elemento=".product-name" funcao="edicao_texto_fundo" id_caixa="#nome_prod" id="nome_prod"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="modif botao-adicionar btn btn-xs btn-outline btn-primary editable" elemento=".botao-adicionar" funcao="edicao_botao" id_caixa="#btn_adicionar" id="btn_adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-content product-box">

                                            <div class="product-imitation">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price">
                                                    $10
                                                </span>
                                                <small class="text-muted texto-categoria">Category</small>
                                                <a href="javascript:" class="product-name"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="btn btn-xs btn-outline btn-primary botao-adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-content product-box">

                                            <div class="product-imitation">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price">
                                                    $10
                                                </span>
                                                <small class="text-muted texto-categoria">Category</small>
                                                <a href="javascript:" class="product-name"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="btn btn-xs btn-outline btn-primary botao-adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-content product-box">

                                            <div class="product-imitation">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price">
                                                    $10
                                                </span>
                                                <small class="text-muted texto-categoria">Category</small>
                                                <a href="javascript:" class="product-name"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="btn btn-xs btn-outline btn-primary botao-adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-content product-box">
                                            <div class="product-imitation">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price">
                                                    $10
                                                </span>
                                                <small class="text-muted texto-categoria">Category</small>
                                                <a href="javascript:" class="product-name"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="btn btn-xs btn-outline btn-primary botao-adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-content product-box">

                                            <div class="product-imitation">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price">
                                                    $10
                                                </span>
                                                <small class="text-muted texto-categoria">Category</small>
                                                <a href="javascript:" class="product-name"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="btn btn-xs btn-outline btn-primary botao-adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-content product-box">

                                            <div class="product-imitation">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price">
                                                    $10
                                                </span>
                                                <small class="text-muted texto-categoria">Category</small>
                                                <a href="javascript:" class="product-name"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="btn btn-xs btn-outline btn-primary botao-adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ibox">
                                        <div class="ibox-content product-box">

                                            <div class="product-imitation">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price">
                                                    $10
                                                </span>
                                                <small class="text-muted texto-categoria">Category</small>
                                                <a href="javascript:" class="product-name"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="btn btn-xs btn-outline btn-primary botao-adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modif row dropzone js-drop bloco" id="drop4" data-pos="4">
                    
                </div>
                <!-- fim teste -->

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="modif footer" id="drop5" data-pos="5">
        
        <?php $this->load->view('partials/footer'); ?>
        
    </div>

    <style>
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    #owl-vitrine .item{
      margin: 5px;
    }
    #owl-vitrine .item img{
      display: block;
      width: 100%;
      height: auto;
    }
    </style>
    
    <script>
        $(document).ready(function(){

            $("#owl-vitrine").owlCarousel({
 
              autoPlay: 3000, //Set AutoPlay to 3 seconds
         
              items : 4,
              itemsDesktop : [1199,3],
              itemsDesktopSmall : [979,3]
         
          });
        });

    </script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/bootstrap-tab.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/application.js"></script>