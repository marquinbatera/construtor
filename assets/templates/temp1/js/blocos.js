var baseUrl = $("#base_url").val();

function geraConteudo(recipiente, conteudo)
			{
				if(conteudo == 'drag1'){
					$('#ect_ferramentas').append('<div class="row text-center"><div class="draggable1 js-drag" id="drag1">Slice</div></div>');
					var html = '<div class="barra-opcoes"><a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a></div>'+
						'<ul id="sb-slider" class="sb-slider">'+
						'<li><a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="'+baseUrl+'assets/construtor/css/plugins/slice/images/1.jpg" alt="image1"/></a><div class="sb-description"><h3>Creative Lifesaver</h3></div></li>'+
						'<li><a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="'+baseUrl+'assets/construtor/css/plugins/slice/images/2.jpg" alt="image2"/></a><div class="sb-description"><h3>Honest Entertainer</h3></div></li>'+
						'<li><a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="'+baseUrl+'assets/construtor/css/plugins/slice/images/3.jpg" alt="image1"/></a><div class="sb-description"><h3>Brave Astronaut</h3></div></li>'+
						'<li><a href="http://www.flickr.com/photos/strupler/2968122059" target="_blank"><img src="'+baseUrl+'assets/construtor/css/plugins/slice/images/4.jpg" alt="image1"/></a><div class="sb-description"><h3>Affectionate Decision Maker</h3></div></li>'+
						'<li><a href="http://www.flickr.com/photos/strupler/2969119944" target="_blank"><img src="'+baseUrl+'assets/construtor/css/plugins/slice/images/5.jpg" alt="image1"/></a><div class="sb-description"><h3>Faithful Investor</h3></div></li>'+
						'<li><a href="http://www.flickr.com/photos/strupler/2968126177" target="_blank"><img src="'+baseUrl+'assets/construtor/css/plugins/slice/images/6.jpg" alt="image1"/></a><div class="sb-description"><h3>Groundbreaking Artist</h3></div></li>'+
						'<li><a href="http://www.flickr.com/photos/strupler/2968945158" target="_blank"><img src="'+baseUrl+'assets/construtor/css/plugins/slice/images/7.jpg" alt="image1"/></a><div class="sb-description"><h3>Selfless Philantropist</h3></div></li>'+
						'</ul>'+
						'<div id="shadow" class="shadow"></div><div id="nav-arrows" style="position: relative; margin: 0px 560px; bottom: 276px;" class="nav-arrows"><a href="#">Next</a><a href="#">Previous</a></div><div id="nav-dots" class="nav-dots"><span class="nav-dot-current"></span><span></span><span></span><span></span><span></span><span></span><span></span>'+
						'</div>';
					$('#'+recipiente).html(html);
					startBanner();
				}else if(conteudo == 'drag2' || conteudo == 'drag5' ){
					$('#ect_ferramentas').append('<div class="row text-center" id="jumbotron"><div class="draggable1 js-drag" id="drag2">Jumbotron</div></div>');
					var html = '<div class="barra-opcoes"><a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a><a href="javascript:" class="btn btn-success btn-sm pull-right animated fadeInLeft resetConteudo" id="edicao2">Reset</a></div><div id="blocojumbotron" class="modif content">'+
						'<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.jumbotron\')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>'+
						'<a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a>'+
						'<div id="jumboedit" class="modif jumbotron editavel  resize-bloco" id="drag5" onclick="abroMenu(\'.jumbotron\')">'+
						'<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.h1jumbo\')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>'+
						'<h1 id="h1jumboedit" class="modif h1jumbo editavel" onclick="abroMenu(\'.h1jumbo\')">Jumbotron</h1>'+
						'<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.txtjumbo\')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>'+
						'<p id="textojumboedit" class="modif txtjumbo editavel">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>'+
						
						'<p class="editavel">'+
						'<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.btnjumbo\')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>'+
						'<a id="btnjumboedit" class="modif btnjumbo editavel btn btn-primary btn-lg">Learn more</a>'+
						'</p>'+
						'</div>'+
						'</div>';
					$('#'+recipiente).html(html);
				}else if(conteudo == 'drag3'){
					$('#ect_ferramentas').append('<div class="row text-center"><div class="draggable1 js-drag" id="drag3">Painel</div></div>');
					var html = '<div id="blocopansim" class="modif content">'+
						'<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.panelsimples\')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>'+
						'<a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a>'+
						'<div id="panelsimples" class="modif panelsimples editavel panel panel-primary resize-drag">'+
						'<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.headpansim\')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>'+
						'<div id="headpansim" class="modif headpansim editavel panel-heading">'+
						'<h3 class="panel-title">Panel primary</h3>'+
						'</div>'+
						'<div id="bodypansim" class="modif bodypansim editavel panel-body">'+
						'<button type="button" class="btn btn-danger btn-sm pull-right animated fadeInLeft btnEdicao" onclick="abroMenu(\'.bodypansim\')"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>'+
						' Panel content'+
						'</div>'+
						'</div>'+
						'</div>';
					$('#'+recipiente).html(html);
				}else if(conteudo == 'drag6'){
					$('#ect_ferramentas').append('<div class="row text-center"><div class="draggable1 js-drag" id="drag6">Banner</div></div>');
					var html = '<div class="barra-opcoes"><a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a><a href="javascript:" class="btn btn-success btn-sm pull-right animated fadeInLeft resetConteudo" id="edicao2">Reset</a></div><div id="carousel-example-generic" class="carousel slide resize-bloco" data-ride="carousel"><!-- Indicators --><ol class="carousel-indicators"><li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><li data-target="#carousel-example-generic" data-slide-to="1"></li><li data-target="#carousel-example-generic" data-slide-to="2"></li></ol><!-- Wrapper for slides --><div class="carousel-inner" role="listbox"><div class="item active"><img src="img/p_big1.jpg" alt="teste" class="img-responsive"><div class="carousel-caption"> Teste</div></div><div class="item"><img src="img/p_big2.jpg" alt="teste" class="img-responsive"><div class="carousel-caption"> teste 2</div></div><div class="item"><img src="img/p_big3.jpg" alt="teste" class="img-responsive"><div class="carousel-caption"> teste 3</div></div></div> <!-- Controls --><a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>';
					$('#'+recipiente).html(html);
				}else if(conteudo == 'drag7'){
					$('#ect_ferramentas').append('<div class="row text-center"><div class="draggable1 js-drag" id="drag7">Footer</div></div>');
					var html = '<div class="barra-opcoes"><a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a><a href="javascript:" class="btn btn-success btn-sm pull-right animated fadeInLeft resetConteudo" id="edicao2">Reset</a></div><div class="container"><p class="text-muted">Place sticky footer content here.</p></div>';
					$('#'+recipiente).html(html);
				}else if(conteudo == 'drag8'){
					var html = '<div class="barra-opcoes"><a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a></div><div id="owl-demo" class="owl-carousel">'+
            		'<div class="item"><img src="'+baseUrl+'assets/construtor/img/banner-fundo1.jpg" alt="The Last of us"></div>'+
            		'<div class="item"><img src="'+baseUrl+'assets/construtor/img/banner-fundo2.jpg" alt="GTA V"></div>'+
            		'<div class="item"><img src="'+baseUrl+'assets/construtor/img/banner-fundo3.jpg" alt="Mirror Edge"></div>'+
        			'</div>';
					$('#'+recipiente).html(html);
					startBanner2();
				}else if(conteudo == 'drag4'){
					$('#ect_ferramentas').append('<div class="row text-center"><div class="draggable1 js-drag" id="drag4">destaque</div></div>');
					var html = '<div class="barra-opcoes"><a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a><a href="javascript:" class="btn btn-success btn-sm pull-right animated fadeInLeft resetConteudo" id="edicao2">Reset</a></div>'+
	                	'<div class="col-md-4 text-center wow fadeInLeft">'+
			                '<img src="http://placehold.it/400x267" />'+
			                '<h2 class="dstqModelo01 editable-bloco" id="dstq01">Destaque 1</h2>'+
				        '</div>'+
				        '<div class="col-md-4 text-center wow fadeInLeft">'+
			                '<img src="http://placehold.it/400x267" />'+
			                '<h2 class="dstqModelo01 editable-bloco" id="dstq02">Destaque 2</h2>'+
				        '</div>'+
				        '<div class="col-md-4 text-center wow fadeInLeft">'+
			                '<img src="http://placehold.it/400x267" />'+
			                '<h2 class="dstqModelo01 editable-bloco" id="dstq03">Destaque 3</h2>'+
				        '</div>';
					$('#'+recipiente).html(html);
				}else if(conteudo == 'drag9'){
					$('#ect_ferramentas').append('<div class="row text-center"><div class="draggable1 js-drag" id="drag9">vitrine</div></div>');
					var html = '<div class="barra-opcoes"><a href="javascript:" class="btn btn-danger btn-sm pull-right animated fadeInLeft fecharConteudo" id="edicao1">X</a></div><div id="owl-vitrine">'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                      '<div class="item"><img src="http://placehold.it/330x220" alt="Owl Image"></div>'+
                    '</div>';
                    $('#'+recipiente).html(html);
                    startVitrine();
				}
				return;
			}