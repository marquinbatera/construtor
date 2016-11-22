<?php $this->load->view('templates/temp1/visual/partials/header');?>
<input type="hidden" id="id_page" value="home">
<!-- Header -->
    <div class="container-fluid">
        <header class="row">
            
            <?php $this->load->view('templates/temp1/visual/partials/menu');?>
        </header>
    </div>

    <!-- Banner -->
    <div class="wrapper dropzone js-drop bloco resize-bloco" id="drop111">
        Arraste um Slideshow aqui!
    </div>

    <!-- Container -->
    <div class="container-fluid">
        <div class="fundo_content row" id="fundo_cont">
            <div role="main" class="col-md-8 col-md-push-2" id="ordem">
                <div class="row dropzone js-drop bloco" id="drop1" data-pos="1">
                    recipiente 1
                </div>
                <div class="row dropzone js-drop bloco" id="drop2" data-pos="2">
                    recipiente 2
                </div>

                <!-- teste grid de produtos -->  
                <div class="row" id="drop3" data-pos="3">
                    <div id="produtos" class="content">
                        <div class="col-md-2">
                            <div class="panel panel-primary" id="format-corpo-categoria" style="border: none;">
                                <div class="luis panel-heading" id="format-titulo-categoria">
                                    <h3 class="panel-title" id="categoria">Categorias</h3>
                                </div>
                                <div class="panel-body" id="listCategoria"> 
                                    <a href="javascript:" class="botao-categoria btn btn-default btn-block" id="botao-cat">Categoria 1</a>
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
                                        <div class="product-box ibox-content" id="box-prod">
                                            <div class="product-imitation" id="fundo_product">
                                                <img alt="image" class="img-responsive" src="http://placehold.it/260x200">
                                            </div>
                                            <div class="product-desc">
                                                <span class="product-price" id="price_prod">
                                                    $10
                                                </span>
                                                <small class="texto-categoria text-muted" id="desc_prod">Category</small>
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name" id="nome_prod"> Product</a>

                                                <div class="m-t text-righ">

                                                    <a href="javascript:" class="botao-adicionar btn btn-xs btn-outline btn-primary" id="btn_adicionar">Adicionar <i class="fa fa-long-arrow-right"></i> </a>
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
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name"> Product</a>

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
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name"> Product</a>

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
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name"> Product</a>

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
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name"> Product</a>

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
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name"> Product</a>

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
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name"> Product</a>

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
                                                <a href="<?php echo base_url('visual/detalhe') ?>" class="product-name"> Product</a>

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
                
                <div class="row dropzone js-drop bloco" id="drop4" data-pos="4">
                    
                </div>
                <!-- fim teste -->

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer" id="drop5" data-pos="5">
        
        <?php $this->load->view('templates/temp1/visual/partials/footer'); ?>
        
    </div>