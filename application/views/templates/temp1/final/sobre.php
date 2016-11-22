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
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-content editable" elemento="#conteudo_sobre" funcao="edicao_fundo" id_caixa="#conteudo_sobre" id="conteudo_sobre">
                                <div class="text-center article-title">
                                    <h1 class="editable" elemento="#titulo_sobre" funcao="edicao_texto_fundo" id_caixa="#titulo_sobre" id="titulo_sobre">
                                        Behind the word mountains
                                    </h1>
                                </div>
                                <div class="editable" elemento="#texto_sobre" funcao="edicao_texto_fundo" id_caixa="#texto_sobre" id="texto_sobre">
                                <img src="http://localhost/construtor2/assets/img/p3.jpg" style="float: left; margin-right: 15px; margin-bottom: 10px;">
                                <p>
                                    Many desktop publishing packages and web page editors now use <strong>Lorem Ipsum as their default model text</strong>, and a search for 'lorem ipsum' will uncover many web
                                </p>
                                <p>
                                    One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops
                                </p>
                                <p>
                                    <i>
                                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                                    </i>
                                </p>
                                <p>
                                    The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek,
                                </p>
                                <p>
                                    Two driven jocks help fax my big quiz. Quick, Baz, get my woven flax jodhpurs! "Now fax quiz Jack!" my brave ghost pled. Five quacking zephyrs jolt my wax bed. Flummoxed by job, kvetching W. zaps Iraq. Cozy sphinx waves quart jug of bad milk. A very bad quack might jinx zippy fowls. Few quips galvanized the mock jury box. Quick brown dogs jump over the lazy fox. The jay, pig, fox, zebra, and my wolves quack! Blowzy red vixens fight for a quick jump. Joaquin Phoenix was gazed by MTV for luck. A wizard’s job is to vex chumps quickly in fog. Watch "Jeopardy!", Alex Trebek's fun TV quiz game. Woven silk pyjamas exchanged for blue quartz. Brawny gods just
                                </p>
                                <p>
                                    Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex.
                                </p>
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