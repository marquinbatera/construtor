<?php

/* layout_principal.html */
class __TwigTemplate_811bc36bf40f85cfe1219783e59b5318dfe58c38fdeef61547c480ecc7f676d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/style.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/animate.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/font-awesome/css/font-awesome.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/plugins/slice/slicebox.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/plugins/slice/custom.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/plugins/slick/slick.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/plugins/slick/slick-theme.css\">
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css\">
    <link href=\"assets/css/colorpicker/bootstrap-colorpicker.min.css\" rel=\"stylesheet\">

    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-3.1.0.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/modernizr.custom.46884.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery.slicebox.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/interact.js\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/jquery-ui.js\"></script>
    <!-- slick carousel-->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/plugins/slick/slick.min.js\"></script>
    <script src=\"assets/js/jquery.ballon.js\"></script>

    <script src=\"assets/js/colorpicker/bootstrap-colorpicker.min.js\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/funcoes.js\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/blocos.js\"></script>




</head>

<body>
    
    ";
        // line 45
        echo (isset($context["conteudo"]) ? $context["conteudo"] : null);
        echo "

    <div class=\"theme-config\">
        <div class=\"theme-config-box\">
            <div class=\"spin-icon\">
                <i class=\"fa fa-cogs fa-spin\"></i>
            </div>
            <div class=\"skin-setttings\">
                <div class=\"title\">Configuration</div>
                <div class=\"setings-item\" id=\"ferramentas\">
                        <span>
                            Collapse menu
                        </span>
                    <div class=\"row text-center\">
                        <div class=\"draggable1 js-drag\" id=\"drag1\">Slide</div>
                    </div>   
                    <div class=\"row\">
                        <div class=\"draggable1 js-drag\" id=\"drag2\">Jumbotron</div>
                    </div>   
                    <div class=\"row\">
                        <div class=\"draggable1 js-drag\" id=\"drag3\">Painel</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"draggable1 js-drag\" id=\"drag6\">Banner</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"draggable1 js-drag\" id=\"drag7\">Footer</div>
                    </div>
                </div>
                
                <!-- imagens de fundo -->
                <div class=\"title\">Skins</div>
                <div class=\"setings-item default-skin\">
                        <span class=\"skin-name \">
                             <a href=\"javascript:\" class=\"s-skin-0 trocaImages\" id=\"fundo1\">
                                 Default
                             </a>
                        </span>
                </div>
                <div class=\"setings-item blue-skin\">
                        <span class=\"skin-name \">
                            <a href=\"javascript:\" class=\"s-skin-1 trocaImages\" id=\"fundo2\">
                                Blue light
                            </a>
                        </span>
                </div>
                <div class=\"setings-item yellow-skin\">
                        <span class=\"skin-name \">
                            <a href=\"javascript:\" class=\"s-skin-3 trocaImages\" id=\"fundo3\">
                                Yellow/Purple
                            </a>
                        </span>
                </div>
                <div class=\"setings-item ultra-skin\">
                        <span class=\"skin-name \">
                            <a href=\"javascript:\" class=\"md-skin trocaImages\" id=\"fundo4\">
                                Material Design
                            </a>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <button id=\"btnModif\" onclick=\"mostrar()\">Ver modificaveis</button>
    <script type=\"text/javascript\">
            
        (function (interact) {

            interact('.resize-bloco').resizable({
                // preserveAspectRatio: true,
                edges: {bottom: true},
                inertia: true,
                restrict: {
                  // restriction: \"parent\",
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
                  restriction: \"parent\",
                  elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
                  endOnly: true
                }
              })
              .resizable({
                // preserveAspectRatio: true,
                edges: { top: true, bottom: true},
                inertia: true,
                restrict: {
                  // restriction: \"parent\",
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

                // target.setAttribute('data-x', x);
                // target.setAttribute('data-y', y);
                // target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
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
            setupDropzone('#drop6', '#drag1');
            // // dropzone #2 accepts draggable #1 and #2
            // setupDropzone('#drop2', '#drag1, #drag2');
            // // every dropzone accepts draggable #3
            setupDropzone('.js-drop', '#drag2, #drag3, #drag5, #drag6, #drag7');

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
                        // event.relatedTarget.textContent = 'I\\'m in';
                    })
                    .on('dragleave', function (event) {
                        removeClass(event.target, '-drop-over');
                        // event.relatedTarget.textContent = 'Drag me…';
                    })
                    .on('drop', function (event) {
                        // console.log(\$('#'+event.target.id));
                        removeClass(event.target, '-drop-over');
                        // event.relatedTarget.textContent = 'Dropped';
                        // alert('#'+event.relatedTarget.id);
                        geraConteudo(event.target.id, event.relatedTarget.id);
                        \$('#'+event.relatedTarget.id).parent().remove();
                        \$('#'+event.target.id).removeClass('dropzone js-drop');
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
";
    }

    public function getTemplateName()
    {
        return "layout_principal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  110 => 36,  106 => 35,  99 => 31,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  74 => 24,  70 => 23,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  30 => 10,  19 => 1,);
    }
}
