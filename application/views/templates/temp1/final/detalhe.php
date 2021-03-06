<!-- Header -->
    <div class="container-fluid">
        <header class="row">
            
            <?php $this->load->view('templates/temp1/final/partials/menu');?>
        </header>
    </div>

    <!-- Banner -->
    <!-- <div class="modif wrapper dropzone js-drop bloco resize-bloco" id="drop111">
        Arraste um Slideshow aqui!
    </div> -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>E-commerce product detail</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a>E-commerce</a>
                </li>
                <li class="active">
                    <strong>Product detail</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
            <div role="main" class="col-md-8 col-md-push-2">
                <div class="modif row bloco" id="drop1" data-pos="1">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-images">

                                    <div>
                                        <div class="image-imitation">
                                            [IMAGE 1]
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-imitation">
                                            [IMAGE 2]
                                        </div>
                                    </div>
                                    <div>
                                        <div class="image-imitation">
                                            [IMAGE 3]
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="col-md-7">

                                <h2 class="font-bold m-b-xs editable" elemento="#title_prod" funcao="edicao_texto_fundo" id_caixa="#title_prod" id="title_prod">
                                    Desktop publishing software
                                </h2>
                                <div class="m-t-md">
                                    <h2 class="product-main-price editable" elemento="#txt_price" funcao="edicao_texto_fundo" id_caixa="#txt_price" id="txt_price">$406,602</h2>
                                </div>
                                <hr>

                                <div class="small text-muted editable" elemento="#desc_prod" funcao="edicao_texto_fundo" id_caixa="#desc_prod" id="desc_prod">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is

                                    <br/>
                                    <br/>
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.
                                </div>
                                <dl class="small m-t-md editable" elemento="#detalhe_prod" funcao="edicao_texto_fundo" id_caixa="#detalhe_prod" id="detalhe_prod">
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                </dl>
                                <hr>

                                <div>
                                    <div class="btn-group">
                                        <button class="btn btn-primary btn-sm editable" elemento="#btn_adicionar" funcao="edicao_botao" id_caixa="#btn_adicionar" id="btn_adicionar"><i class="fa fa-cart-plus"></i> Adicionar ao carrinho</button>
                                        <!-- <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> adicionar a lista </button> -->
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="modif row dropzone js-drop bloco" id="drop2" data-pos="2">
                    recipiente 2
                </div>

                <!-- teste grid de produtos -->  
                <div class="modif row dropzone js-drop bloco" id="drop3" data-pos="3">
                    recipiente 3
                </div>
                
                <div class="modif row dropzone js-drop bloco" id="drop4" data-pos="4">
                    recipiente 4
                </div>
                <!-- fim teste -->

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="modif footer" id="drop5" data-pos="5">
        <?php $this->load->view('templates/temp1/final/partials/footer'); ?>
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

            $('.product-images').slick({
                dots: true
            });
            
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