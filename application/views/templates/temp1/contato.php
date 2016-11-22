<!-- Header -->
    <div class="container-fluid">
        <header class="row">
            
            <?php $this->load->view('partials/menu');?>
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
                    <div class="col-md-12">
                            
                        <div class="ibox">
                            <div class="ibox-content editable" elemento="#conteudo_contato" funcao="edicao_fundo" id_caixa="#conteudo_contato" id="conteudo_contato">
                                <div class="row">
                                    <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Contato</h3>
                                        <p>Fale conosco.</p>
                                        <form role="form">
                                            <div class="form-group"><label>Nome</label> <input type="email" placeholder="Enter email" class="form-control"></div>
                                            <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" class="form-control"></div>
                                            <div class="form-group"><label>Assunto</label> <input type="email" placeholder="Enter email" class="form-control"></div>
                                            <div class="form-group"><label>Mensagem</label> <textarea class="form-control" rows="4" placeholder="Mensagem"></textarea></div>
                                            <div>
                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs editable" elemento="#btn_contato" funcao="edicao_botao" id_caixa="#btn_contato" id="btn_contato" type="submit"><strong>Enviar</strong></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ibox ">
                                            <div class="ibox-content">
                                                <p>
                                                    Nossa Localização.
                                                </p>
                                                <div class="google-map" id="map4"></div>
                                            </div>
                                        </div>
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

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

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
    <script type="text/javascript">
        // When the window has finished loading google map
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Options for Google map
            // More info see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

            var mapOptions4 = {
                zoom: 11,
                center: new google.maps.LatLng(40.6700, -73.9400),
                // Style for Google Maps
                styles: [{"stylers":[{"hue":"#18a689"},{"visibility":"on"},{"invert_lightness":true},{"saturation":40},{"lightness":10}]}]
            };

    
            var mapElement4 = document.getElementById('map4');

            // Create the Google Map using elements
            var map4 = new google.maps.Map(mapElement4, mapOptions4);
        }
    </script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/bootstrap-tab.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/owl/application.js"></script>