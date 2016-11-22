$(function(){

	  var baseUrl = $("#base_url").val();
    console.log(baseUrl);
    preenche_styles();

    $('#ordem').sortable();
    $('.opcoes').hide();
		    
    $(document).on('mouseover', '.bloco', function(){
		  $(this).find('.barra-opcoes').show();
    });

    $(document).on('mouseleave', '.bloco', function(){
    	$(this).find('.barra-opcoes').hide();
    });

    $(document).on('click', '.fecharConteudo', function(){
    	$(this).parent().siblings().remove();
    	$(this).parent().parent().addClass('dropzone js-drop');
    	$(this).parent().parent().text('Arraste um componente aqui!');
    });

    $(document).on('click', '.resetConteudo', function(){
      $(this).parent().siblings().removeAttr('style');
      $(this).parent().siblings().children().removeAttr('style');
    });

    $(document).on('click', '.editable-bloco', function(){
      var tipoBloco = $(this).attr('id');
      abroMenu('#'+tipoBloco);
    });


    $('.fecha-box').click(function(){
        var show = $(this).parent().attr('class');
        if(show == 'theme-config-box')
        {
            $(this).parent().addClass('show');
        }else{
            $(this).parent().removeClass('show');
        }
    });

    $(document).on('click', '.trocaImages', function(){
      var id = $(this).attr('id');
      $('body').css({backgroundImage: 'url("'+baseUrl+'assets/construtor/img/'+id+'.jpg")'});
    });

    $('.menuConteudo').slimScroll({
        height: '490px'
    });

    $('.panel-body').slimScroll({
        height: '400px'
    });

    $('#ect_ferramentas').slimScroll({
        height: '700px'
    });

    $(document).on('change', '#mudaPagina', function(){
      var link = $(this).val();
      location.href = baseUrl+link;
    });

    $(document).on('click', '.ect_menu_item', function(){
      
      $('.opcoes').removeClass('fadeOutLeft');
      $('.opcoes').addClass('fadeInLeft');
      var num = $(this).attr('btnNum');
      
      switch (num){
        case '1':
          $('.opcoes').removeClass('opcoes-2');
          $('.opcoes').removeClass('opcoes-3');
          $('.opcoes').removeClass('opcoes-4');
          $('.opcoes').addClass('opcoes-1');

          var html = '<ul class="nav metismenu" id="side-menu">';
                html += '<li><a class="caixa" href="javascript:" onclick="menuFundo()"> <span class="nav-label">Fundos</span></a></li>';
                html += '<li><a class="caixa" href="javascript:" onclick="menuBanner()"> <span class="nav-label">Slideshow</span></a></li>';
                html += '<li><a class="caixa" href="javascript:" onclick="menuDestaque()"> <span class="nav-label">Destaques</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Galeria</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Divisores</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Rodapé</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Contato</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Rede social</span></a></li>';
              html += '</ul>';
          $('.menuOpcao').html(html);    
        break;
        case '2':
          $('.opcoes').removeClass('opcoes-1');
          $('.opcoes').removeClass('opcoes-3');
          $('.opcoes').removeClass('opcoes-4');
          $('.opcoes').addClass('opcoes-2');

          var html = '<ul class="nav metismenu" id="side-menu">';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Imagens</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Arquivos</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Fontes</span></a></li>';
              html += '</ul>';
          $('.menuOpcao').html(html);
        break;
        case '3':
          $('.opcoes').removeClass('opcoes-1');
          $('.opcoes').removeClass('opcoes-2');
          $('.opcoes').removeClass('opcoes-4');
          $('.opcoes').addClass('opcoes-3');

          var html = '<ul class="nav metismenu" id="side-menu">';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">loja virtual</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Botões</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Outra opção</span></a></li>';
              html += '</ul>';
          $('.menuOpcao').html(html);
        break;
        case '4':
          $('.opcoes').removeClass('opcoes-1');
          $('.opcoes').removeClass('opcoes-2');
          $('.opcoes').removeClass('opcoes-3');
          $('.opcoes').addClass('opcoes-4');

          var html = '<ul class="nav metismenu" id="side-menu">';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Teste</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Opções</span></a></li>';
                html += '<li><a class="caixa" href="javascript:"> <span class="nav-label">Menu</span></a></li>';
              html += '</ul>';
          $('.menuOpcao').html(html);
        break;
      }
      $('.opcoes').show();

    });

    $(document).on('mouseleave', '.ect_ferramentas', function(){
        $('.opcoes').removeClass('fadeInLeft');
        $('.opcoes').addClass('fadeOutLeft');
        setTimeout(function(){ $('.opcoes').hide(); }, 1000);
    });

    $('.editable').mouseover(function(e){
      var elemento = $(this).attr('elemento');
      var tipo = $(this).attr('funcao');
      var aqui = $(this).attr('id_caixa');

      btn_flutuante(elemento, tipo, aqui, e);
    });

});

/* Função para preencher os estilos dos elementos ao carregado o construtor By. Marcos Meira 07/11/2016*/
function preenche_styles(){
  $.ajax({
    url: baseUrl+"template/preenche_styles",
    type:"POST",
    data: {pag: $('#id_page').val()},
    success: function(data){
      var conteudo = JSON.parse(data);
      console.log(conteudo.conteudo);
      $.each(conteudo.conteudo, function(index, value){
        $("."+value['classe_estilo']).attr("style", value['estilos']);
      });
      $.each(conteudo.fundo, function(index, value){
        $("."+value['classe_estilo']).attr("style", value['estilos']);
      });
      $.each(conteudo.menu, function(index, value){
        $("."+value['classe_estilo']).attr("style", value['estilos']);
      });
      $.each(conteudo.links, function(index, value){
        $("."+value['classe_estilo']).text(value['estilos']);
      });
      $.each(conteudo.footer, function(index, value){
        $("."+value['classe_estilo']).attr("style", value['estilos']);
      });
    },
    error: function(data){
      console.log('nenhum estilo salvo!');
    }
  })
}

/*Limpa estilos do elemento selecionado By. Marcos Meira*/
function limpaStyles(elemento)
{
  var id_tipo = $('.'+elemento).attr('id_tipo');
  if(id_tipo == undefined)
    id_tipo = elemento;
  
  console.log(id_tipo);
  $.ajax({
    type: "POST",
    url: baseUrl+"template/limparStyles",
    data: {elemento: id_tipo},
    success: function(data){
      console.log('excluido com sucesso');
      location.reload();
    },
    error: function(data){
      console.log('erro ao excluir');
    }
  });
}

/* Botão para editar os elementos By. Luis Carlos*/
function btn_flutuante(elemento, tipo, aqui, event){
  
  event.stopPropagation();
  if(aqui=="body"){posi = "null";}else{posi = "top";}
  $( aqui ).showBalloon({
    css: {
      border: 'solid 1px #eee',
      padding: '5px',
      fontSize: '1em',
      fontWeight: 'bold',
      lineHeight: '1.2em',
      backgroundColor: '#fff',
      color: '#fff',
    },
    position: posi,
    // offsetY: -50,
    tipSize: 0,
    html: true,
    contents: btn_edicao( elemento, tipo, aqui )

            
  });
}

/* Botão para editar os elementos By. Luis Carlos*/
function btn_edicao(elemento, tipo, aqui)
{
  var btn = '<button class="btn btn-default btn-sm" onclick="edicao_bloco(\''+elemento+'\',\''+tipo+'\')">Editar</button>';
  btn += '<button type="button" class="btn btn-default" id="btnFechar'+aqui+'" title="Fechar" onclick="fechaBarra(\''+aqui+'\')"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>';
  return btn;
}

// Função para definir quais opções irão aparecer para edição do template By. Marcos Meira 20/10/2016
function edicao_bloco(elemento, tipo)
{
  console.log(elemento, tipo);
  $('#ect_ferramentas').html('');

  switch(tipo){
    case 'edicao_texto_fundo':
      edicao_texto_fundo(elemento);
    break;
    case 'edicao_fundo':
      edicao_fundo(elemento);
    break;
    case 'edicao_botao':
    edicao_botao(elemento);
    break;
    case 'edicao_texto_link':
    edicao_texto_link(elemento);
  }
  $('.theme-config-box').addClass('show');
}

function alignTeste(align) {
  if(align == 'left'){
    $('#textMenu').removeClass('navbar-right').addClass('navbar-'+align);
  }else{
    $('#textMenu').removeClass('navbar-left').addClass('navbar-'+align);
  }
}

function startVitrine() {
  $("#owl-vitrine").owlCarousel({
 
      autoPlay: 3000, //Set AutoPlay to 3 seconds
 
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
}

function startBanner2() {

  $("#owl-demo").owlCarousel({

      navigation : true,
      slideSpeed : 400,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay : true,
      autoHeight : false

  });

}

function startBanner() {
	var Page = (function() {

	var $navArrows = $( '#nav-arrows' ).hide(),
			$shadow = $( '#shadow' ).hide(),
			slicebox = $( '#sb-slider' ).slicebox( {
				onReady : function() {

					$navArrows.show();
					$shadow.show();

				},
				orientation : 'r',
				cuboidsRandom : true,
				disperseFactor : 30
			} ),
			
			init = function() {

				initEvents();
				
			},
			initEvents = function() {

				slicebox.play();
				// add navigation events
				$navArrows.children( ':first' ).on( 'click', function() {

					slicebox.next();
					return false;

				} );

				$navArrows.children( ':last' ).on( 'click', function() {
					
					slicebox.previous();
					return false;

				} );

			};

			return { init : init };

	})();

	Page.init();
}

    function fechaBarra(elemento){
      $(elemento).hideBalloon();      
      // $(elemento).removeClass("editavelComLinha").addClass("editavel");
    }


    function mostrar(){ 
      // var div = document.getElementsByClassName('modif');
      // var position = 0;
      // for(var i in div){
      //   if(isNaN(i)){
      //     console.log("div id= "+i);
      //     var className = $('#'+i).attr('class');
      //     if(className != undefined){
            // console.log("clases en class: "+className);
            // clasesDiv = className.split(" ");
            // console.log("la primera clase es: "+clasesDiv[0]);
            // console.log("color de fondo: "+$("."+clasesDiv[1]).css( "backgroundColor" ));
            // console.log("color de texto: "+$("."+clasesDiv[1]).css( "color" ));
            // strEstilos = $("."+clasesDiv[1]).attr( "style" );
            // if(strEstilos != undefined){
            //   console.log("estilos: "+strEstilos);
            // }
            // else{
            //   console.log("Sin estilos");
            // }
            // var pos = $("#"+i).data('pos');
            // if(pos != undefined){
            //   console.log("position-original: "+ pos);
            //   position++;
              // position = pos;
            // }
            // else{
            //   if(clasesDiv[1] == "content"){
                // position++;
        //         console.log("O bloco "+i+" agora está na posição "+position);
        //         $.ajax({
        //           method: "POST",
        //           url: "template/salvaOrdem",
        //           data: { idpag: "home", ordem: position, bloco: i }
        //         });
        //       }
              
        //     }
        //   }
          

        // }

      //   console.log("-----------------");

      // }

      var div = document.getElementsByClassName('modif');
      var position = 0;
      // dump(div);
      for(var i in div){
        if(isNaN(i)){
          console.log("div id= "+i);
          var className = $('#'+i).attr('class');
          if(className == undefined){
            console.log("sin nada en class");
          }
          else{
            console.log("clases en class: "+className);
            clasesDiv = className.split(" ");
            strEstilos = $("."+clasesDiv[1]).attr( "style" );
            tipo = $("."+clasesDiv[1]).attr( "id_tipo" );
            if(tipo == undefined)
            {
              tipo = clasesDiv[1];
            }
            if(strEstilos != undefined){
              console.log("estilos: "+strEstilos);
              $.ajax({
                  method: "POST",
                  url: baseUrl+"template/salvaEstilos",
                  data: { idpag: $('#id_page').val(), idtipo: tipo, idelemento: i, claseestilo: clasesDiv[1], estilos: strEstilos }
                });
            }
            else{
              console.log("Sin estilos");
            }
          }
          
        }

        console.log("-----------------");

      }

      var menu = document.getElementsByClassName('modifmenu');
      for(var i in menu){
        if(isNaN(i)){
          console.log("div id= "+i);
          var className = $('#'+i).attr('class');
          if(className == undefined){
            console.log("sin nada en class");
          }
          else{
            console.log("clases en class: "+className);
            clasesDiv = className.split(" ");
            strEstilos = $("."+clasesDiv[1]).attr( "style" );
            tipo = $("."+clasesDiv[1]).attr( "id_tipo" );
            if(tipo == undefined)
            {
              tipo = clasesDiv[1];
            }
            if(strEstilos != undefined){
              console.log("estilos: "+strEstilos);
              $.ajax({
                  method: "POST",
                  url: baseUrl+"template/salvaEstilos",
                  data: { idpag: "menu", idtipo: tipo, idelemento: i, claseestilo: clasesDiv[1], estilos: strEstilos }
                });
            }
            else{
              console.log("Sin estilos");
            }
          }
          
        }

        console.log("-----------------");

      }

      var footer = document.getElementsByClassName('modifooter');
      for(var i in footer){
        if(isNaN(i)){
          console.log("div id= "+i);
          var className = $('#'+i).attr('class');
          if(className == undefined){
            console.log("sin nada en class");
          }
          else{
            console.log("clases en class: "+className);
            clasesDiv = className.split(" ");
            strEstilos = $("."+clasesDiv[1]).attr( "style" );
            tipo = $("."+clasesDiv[1]).attr( "id_tipo" );
            if(tipo == undefined)
            {
              tipo = clasesDiv[1];
            }
            if(strEstilos != undefined){
              console.log("estilos: "+strEstilos);
              $.ajax({
                  method: "POST",
                  url: baseUrl+"template/salvaEstilos",
                  data: { idpag: "footer", idtipo: tipo, idelemento: i, claseestilo: clasesDiv[1], estilos: strEstilos }
                });
            }
            else{
              console.log("Sin estilos");
            }
          }
          
        }

        console.log("-----------------");

      }


      var fundo = document.getElementsByClassName('modifbody');
      for(var i in fundo){
        if(isNaN(i)){
          console.log("div id= "+i);
          var className = $('#'+i).attr('class');
          if(className == undefined){
            console.log("sin nada en class");
          }
          else{
            console.log("clases en class: "+className);
            clasesDiv = className.split(" ");
            strEstilos = $("."+clasesDiv[1]).attr( "style" );
            tipo = $("."+clasesDiv[1]).attr( "id_tipo" );
            if(tipo == undefined)
            {
              tipo = clasesDiv[1];
            }
            if(strEstilos != undefined){
              console.log("estilos: "+strEstilos);
              $.ajax({
                  method: "POST",
                  url: baseUrl+"template/salvaEstilos",
                  data: { idpag: "fundo", idtipo: tipo, idelemento: i, claseestilo: clasesDiv[1], estilos: strEstilos }
                });
            }
            else{
              console.log("Sin estilos");
            }
          }
          
        }

        console.log("-----------------");

      }

      var links = document.getElementsByClassName('modifLinks');
      for(var i in links){
        if(isNaN(i)){
          console.log("div id= "+i);
          var className = $('#'+i).attr('class');
          if(className == undefined){
            console.log("sin nada en class");
          }
          else{
            console.log("clases en class: "+className);
            clasesDiv = className.split(" ");
            strEstilos = $("."+clasesDiv[1]).text();
            tipo = $("."+clasesDiv[1]).attr( "id_tipo" );
            if(tipo == undefined)
            {
              tipo = clasesDiv[1];
            }
            if(strEstilos != undefined){
              console.log("estilos: "+strEstilos);
              $.ajax({
                  method: "POST",
                  url: baseUrl+"template/salvaEstilos",
                  data: { idpag: "links", idtipo: tipo, idelemento: i, claseestilo: clasesDiv[1], estilos: strEstilos }
                });
            }
            else{
              console.log("Sin estilos");
            }
          }
          
        }

        console.log("-----------------");

      }
    }
      
   