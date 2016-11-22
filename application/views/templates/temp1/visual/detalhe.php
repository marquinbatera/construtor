<?php $this->load->view('templates/temp1/visual/partials/header');?>
<input type="hidden" id="id_page" value="detalhe">
<!-- Header -->
    <div class="container-fluid">
        <header class="row">
            
            <?php $this->load->view('templates/temp1/visual/partials/menu');?>
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
                <div class="row bloco" id="drop1" data-pos="1">
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

                                <h2 class="title_prod font-bold m-b-xs" id="title_prod">
                                    Desktop publishing software
                                </h2>
                                <div class="m-t-md">
                                    <h2 class="txt_price product-main-price editable" id="txt_price">$406,602</h2>
                                </div>
                                <hr>

                                <div class="desc_prod small text-muted" id="desc_prod">
                                    It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is

                                    <br/>
                                    <br/>
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by injected humour, or randomised words
                                    which don't look even slightly believable.
                                </div>
                                <dl class=" detalhe_prod small m-t-md" id="detalhe_prod">
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
                                        <button class="btn_adicionar btn btn-primary btn-sm" id="btn_adicionar"><i class="fa fa-cart-plus"></i> Adicionar ao carrinho</button>
                                        <!-- <button class="btn btn-white btn-sm"><i class="fa fa-star"></i> adicionar a lista </button> -->
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="row dropzone js-drop bloco" id="drop2" data-pos="2">
                    recipiente 2
                </div>

                <!-- teste grid de produtos -->  
                <div class="row dropzone js-drop bloco" id="drop3" data-pos="3">
                    recipiente 3
                </div>
                
                <div class="row dropzone js-drop bloco" id="drop4" data-pos="4">
                    recipiente 4
                </div>
                <!-- fim teste -->

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer" id="drop5" data-pos="5">
        <?php $this->load->view('templates/temp1/visual/partials/footer'); ?>
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