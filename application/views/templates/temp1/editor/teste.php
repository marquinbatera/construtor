<!-- Header -->
<?php echo($css); ?>
    <div class="container-fluid">
        <header class="row">
            <nav class="navbar navbar-inverse resize-bloco">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Brand</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        </header>
    </div>

    <!-- Banner -->
    <div class="modif wrapper dropzone bloco resize-bloco" id="drop6">
        
    </div>

    <!-- Container -->
    <div class="container-fluid">
        <div class="row">
            <div role="main" class="col-md-8 col-md-push-2" id="ordem">
            
            <?php if(isset($conteudo[1])){?>
                <div class="modif row bloco" id="drop1" data-pos="1">
                	<?php $this->load->view('partials/blocos/'.$conteudo[1]); ?>
                </div>
            <?php }else{ ?>
            	<div class="modif row dropzone js-drop bloco" id="drop1" data-pos="1">
                	recipiente 1
                </div>
            <?php } ?>
            <?php if(isset($conteudo[2])){?>
                <div class="modif row bloco" id="drop2" data-pos="2">
                    <?php $this->load->view('partials/blocos/'.$conteudo[2]); ?>
                </div>
            <?php }else{ ?>
                <div class="modif row dropzone js-drop bloco" id="drop2" data-pos="2">
                    recipiente 2
                </div>
            <?php } ?>
            <?php if(isset($conteudo[3])){?>
                <div class="modif row bloco" id="drop3" data-pos="3">
                    <?php $this->load->view('partials/blocos/'.$conteudo[3]); ?>
                </div>
            <?php }else{ ?>
                <div class="modif row dropzone js-drop bloco" id="drop3" data-pos="3">
                    recipiente 3
                </div>
            <?php } ?>


            <?php if(isset($conteudo[4])){?>
                <div class="modif row bloco" id="drop4" data-pos="4">
                    <?php $this->load->view('partials/blocos/'.$conteudo[4]); ?>
                </div>
            <?php }else{ ?>
                <div class="modif row dropzone js-drop bloco" id="drop4" data-pos="4">
                    recipiente 4
                </div>
            <?php } ?>
                <!-- fim teste -->

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="modif footer container-fluid dropzone js-drop bloco" id="drop7" data-pos="4">
        
    </div>

    <script>
        $(document).ready(function(){

            $('.slick_demo_2').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    </script>