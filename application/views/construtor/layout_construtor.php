<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/css/ect_style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/css/plugins/slice/slicebox.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/css/plugins/slice/custom.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/icons/icons12/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/icons/icons11/font/flaticon.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link href="<?php echo base_url(); ?>assets/construtor/css/plugins/spectrum/spectrum.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/construtor/css/style_alt.css" />
    <link href="<?php echo base_url(); ?>assets/construtor/css/plugins/rangeslider/rangeslider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/construtor/css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/construtor/css/plugins/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/construtor/css/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/construtor/css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="<?php echo base_url(); ?>assets/construtor/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="<?php echo base_url(); ?>assets/construtor/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/construtor/css/owl.theme.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/construtor/css/prettify.css" rel="stylesheet">

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/construtor/js/jquery-2.1.0.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/construtor/js/modernizr.custom.46884.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/construtor/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/construtor/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/construtor/js/jquery.slicebox.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/construtor/js/interact.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/owl/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/spectrum/spectrum.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/spectrum/jquery.spectrum-pt-br.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/jquery.ballon.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQTpXj82d8UpCi97wzo_nKXL7nYrd4G70"></script>
    <!-- NouSlider -->
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/rangeslider/rangeslider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/nouslider/wNumb.js"></script>
    <!-- slick carousel-->
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/slick/slick.min.js"></script>
    <!-- TouchSpin -->
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Sweet alert -->
    <script src="<?php echo base_url(); ?>assets/construtor/js/plugins/sweetalert/sweetalert.min.js"></script>
    

    <script src="<?php echo base_url(); ?>assets/construtor/js/funcoes.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/blocos.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/construtor/js/modal.js"></script>




</head>

<body class="modifbody fundo_site" elemento=".fundo_site" funcao="edicao_fundo" id_caixa=".conteudoLogo" id="body_site">
    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
    <?php $this->load->view('construtor/partials/topo');?>

    <?php $this->load->view($view);?>

    <div class="theme-config">
        <div class="theme-config-box">
            <div class="spin-icon fecha-box">
                <i class="fa fa-cogs fa-spin"></i>
            </div>
            <div class="skin-setttings">
                <div class="title">Ferramentas</div>
                <div class="setings-item" id="ect_ferramentas">
                     <span>selecione um elemento</span>   
   
                </div>
            </div>
        </div>
    </div>
    <div class="ect_ferramentas">
        <div class="ect_group_options">
            <a class="btn-circle ect_menu_item" btnNum="1"><img class="img-responsive" style="max-height:60px;" src="<?php echo base_url(); ?>assets/construtor/icons/icons4/png/pictures.png"></a>
            <a class="btn-circle ect_menu_item" btnNum="2"><img class="img-responsive" style="max-height:60px;" src="<?php echo base_url(); ?>assets/construtor/icons/icons4/png/cloud.png"></a>
            <a class="btn-circle ect_menu_item" btnNum="3"><img class="img-responsive" style="max-height:60px;" src="<?php echo base_url(); ?>assets/construtor/icons/icons12/png/add.png"></a>
            <a class="btn-circle add-conteudo" btnNum="4"><img class="img-responsive" style="max-height:60px;" src="<?php echo base_url(); ?>assets/construtor/icons/icons12/png/add.png"></a>
        </div>
        <div class="col-md-6 opcoes animated">
            <div class="col-md-2 menuOpcao" style="width: 150px; min-height: 500px; border-radius: 0.50em 0px 0px 0.50em; background-color: #1ab394; padding: 5px; padding-left: 0;">
                
            </div>
            <div class="col-md-4 menuConteudo" style="width: 240px; height: 500px; padding-left: 3px; margin-top: 10px;">
                
            </div>
        </div>
    </div>
    
    <style class="modifLinks links-loja" id="links_loja" id_tipo="texto_menu">
        
    </style>
    <script>

        $(function(){

            $("#saveStyleTemplate").click(function(){
                swal("Salvo com sucesso!", "todas as alterações foram salvas?", "success");
            });

        });
            
        (function (interact) {

            interact('.resize-bloco').resizable({
                // preserveAspectRatio: true,
                // edges: {bottom: true},
                inertia: true,
                restrict: {
                  // restriction: "parent",
                  elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
                  endOnly: true
                }
              })
            .on('resizemove', function (event) {
                var target = event.target,
                    x = (parseFloat(target.getAttribute('data-x')) || 0),
                    y = (parseFloat(target.getAttribute('data-y')) || 0);

                // update the element's style
                target.style.width  = event.rect.width + 'px';
                target.style.height = event.rect.height + 'px';

                // translate when resizing from top or left edges
                x += event.deltaRect.left;
                y += event.deltaRect.top;

                target.style.webkitTransform = target.style.transform =
                    'translate(' + x + 'px,' + y + 'px)';

                target.setAttribute('data-x', x);
                target.setAttribute('data-y', y);
                // target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
              });
            
            interact('.resize-drag')
              .draggable({
                onmove: window.dragMoveListener,
                autoScroll: true,
                inertia: true,
                restrict: {
                  restriction: "parent",
                  elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
                  endOnly: true
                }
              })
              .resizable({
                // preserveAspectRatio: true,
                edges: { top: true, bottom: true},
                inertia: true,
                restrict: {
                  // restriction: "parent",
                  elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
                  endOnly: true
                }
              })
              .on('resizemove', function (event) {
                var target = event.target,
                    x = (parseFloat(target.getAttribute('data-x')) || 0),
                    y = (parseFloat(target.getAttribute('data-y')) || 0);

                // update the element's style
                target.style.width  = event.rect.width + 'px';
                target.style.height = event.rect.height + 'px';

                // translate when resizing from top or left edges
                x += event.deltaRect.left;
                y += event.deltaRect.top;

                target.style.webkitTransform = target.style.transform =
                    'translate(' + x + 'px,' + y + 'px)';

              });

              function dragMoveListener (event) {
                var target = event.target,
                    // keep the dragged position in the data-x/data-y attributes
                    x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
                    y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

                // translate the element
                target.style.webkitTransform =
                target.style.transform =
                  'translate(' + x + 'px, ' + y + 'px)';

                // update the posiion attributes
                target.setAttribute('data-x', x);
                target.setAttribute('data-y', y);
              }

             // this is used later in the resizing and gesture demos
              window.dragMoveListener = dragMoveListener;



            'use strict';

            var transformProp;

            interact.maxInteractions(Infinity);

            // setup draggable elements.
            interact('.js-drag')
                .draggable({ 
                    max: Infinity,
                    inertia: true,
                    restrict: {
                      restriction: '.js-drag',
                      elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
                      endOnly: true
                    } 
                })
                .on('dragstart', function (event) {
                    event.interaction.x = parseInt(event.target.getAttribute('data-x'), 10) || 0;
                    event.interaction.y = parseInt(event.target.getAttribute('data-y'), 10) || 0;
                })
                .on('dragmove', function (event) {
                    event.interaction.x += event.dx;
                    event.interaction.y += event.dy;

                    if (transformProp) {
                        event.target.style[transformProp] =
                            'translate(' + event.interaction.x + 'px, ' + event.interaction.y + 'px)';
                    }
                    else {
                        event.target.style.left = event.interaction.x + 'px';
                        event.target.style.top  = event.interaction.y + 'px';
                    }
                })
                .on('dragend', function (event) {
                    event.target.setAttribute('data-x', event.interaction.x);
                    event.target.setAttribute('data-y', event.interaction.y);
                });

            // setup drop areas.
            // dropzone #1 accepts draggable #1
            setupDropzone('#drop111', '#drag1, #drag8');
            // // dropzone #2 accepts draggable #1 and #2
            // setupDropzone('#drop1', '#drag4');
            // // every dropzone accepts draggable #3
            setupDropzone('.js-drop', '#drag2, #drag3, #drag4, #drag5, #drag6, #drag7, #drag9');

            /**
             * Setup a given element as a dropzone.
             *
             * @param {HTMLElement|String} el
             * @param {String} accept
             */
            function setupDropzone(el, accept) {
                interact(el)
                    .dropzone({
                        accept: accept,
                        ondropactivate: function (event) {
                            addClass(event.relatedTarget, '-drop-possible');
                        },
                        ondropdeactivate: function (event) {
                            removeClass(event.relatedTarget, '-drop-possible');
                        }
                    })
                    .on('dropactivate', function (event) {
                        var active = event.target.getAttribute('active')|0;

                        // change style if it was previously not active
                        if (active === 0) {
                            addClass(event.target, '-drop-possible');
                            // event.target.textContent = 'Drop me here!';
                        }

                        event.target.setAttribute('active', active + 1);
                    })
                    .on('dropdeactivate', function (event) {
                        var active = event.target.getAttribute('active')|0;

                        // change style if it was previously active
                        // but will no longer be active
                        if (active === 1) {
                            removeClass(event.target, '-drop-possible');
                            // event.target.textContent = 'Dropzone';
                        }

                        event.target.setAttribute('active', active - 1);
                    })
                    .on('dragenter', function (event) {
                        addClass(event.target, '-drop-over');
                        // event.relatedTarget.textContent = 'I\'m in';
                    })
                    .on('dragleave', function (event) {
                        removeClass(event.target, '-drop-over');
                        // event.relatedTarget.textContent = 'Drag me…';
                    })
                    .on('drop', function (event) {
                        // console.log($('#'+event.target.id));
                        removeClass(event.target, '-drop-over');
                        // event.relatedTarget.textContent = 'Dropped';
                        // alert('#'+event.relatedTarget.id);
                        geraConteudo(event.target.id, event.relatedTarget.id);
                        $('#'+event.relatedTarget.id).parent().remove();
                        $('#'+event.target.id).removeClass('dropzone js-drop');
                    });
            }

            function addClass (element, className) {
                if (element.classList) {
                    return element.classList.add(className);
                }
                else {
                    element.className += ' ' + className;
                }
            }

            function removeClass (element, className) {
                if (element.classList) {
                    return element.classList.remove(className);
                }
                else {
                    element.className = element.className.replace(new RegExp(className + ' *', 'g'), '');
                }
            }

            interact(document).on('ready', function () {
                transformProp = 'transform' in document.body.style
                    ? 'transform': 'webkitTransform' in document.body.style
                    ? 'webkitTransform': 'mozTransform' in document.body.style
                    ? 'mozTransform': 'oTransform' in document.body.style
                    ? 'oTransform': 'msTransform' in document.body.style
                    ? 'msTransform': null;
            });

        }(window.interact));

    </script>

</body>
</html>
