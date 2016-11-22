

/*************************************************************************/
/*************************************************************************/
//* Edição geral texto e fundo dos elementos By. Marcos Meira 27/10/2016*//
/*************************************************************************/
/*************************************************************************/

function edicao_texto_fundo (elemento)
{
    var baseUrl = $("#base_url").val();
	var el = elemento;
	var modal = '<div class="tabs-left">'+
                '<ul class="nav nav-tabs" style="margin-right: 0px;">'+
                    '<li class="active"><a data-toggle="tab" href="#tab-11"><img src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
                    '<li class=""><a data-toggle="tab" href="#tab-22"><img src="'+baseUrl+'assets/construtor/icons/icons2/png/text.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
               	'</ul>'+
                '<div class="tab-content">'+
                    '<div id="tab-11" class="tab-pane active">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Fundo</h1>'+
                            
                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Cor do fundo</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corFundoMenu" src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div id="tab-22" class="tab-pane">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Texto</h1>'+

                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Cor do texto</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corTextoMenu" src="'+baseUrl+'assets/construtor/icons/icons5/png/studying.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<strong>Normal</strong><br>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Tamanho</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img src="'+baseUrl+'assets/construtor/icons/icons2/png/text-height.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<select class="form-control" name="" id="editFontSize">'+
                                                        
                                                    '</select>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Fonte</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img src="'+baseUrl+'assets/construtor/icons/icons2/png/text.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<select class="form-control" name="" id="editFonts">'+
                                                        
                                                    '</select>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Alinhamento</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                   '<img onclick="alignTeste("left")" src="'+baseUrl+'assets/construtor/icons/icons11/png/left-alignment-1.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img onclick="alignTeste("right")" src="'+baseUrl+'assets/construtor/icons/icons11/png/right-alignment-1.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '</div>'+
                '<div>'+
                    '<button class="btn btn-success btn-block" id="saveStyleTemplate" onclick="mostrar()">Salvar</button>'+
                    '<button class="btn btn-danger btn-block" onclick="limpaStyles(\''+el.slice(1,1000)+'\')">Limpar Estilos</button>'+
                '</div>'+
                '<script>'+
                	'$(function() {'+
		                
                		'var $document = $(document);'+
			            'var selector = "[data-rangeslider2]";'+
			            'var $element = $(selector);'+

			            // For ie8 support
			            'var textContent = ("textContent" in document) ? "textContent" : "innerText";'+

                		'function valueOutput2(element) {'+
			                'var value = element.value;'+
			                'var output = element.parentNode.getElementsByTagName("output")[0] || element.parentNode.parentNode.getElementsByTagName("output")[0];'+
			                'output[textContent] = value+\'px\';'+
			              	'var css = "'+el+'{'+
			              		'font-size:"+value+"px;'+
			              	'}";'+
			                      
			                '$("#tamanhoMenu").html(css);'+
			                '$("'+el+'").css({fontSize: value});'+
			                'console.log(value);'+
			            '}'+


                		'$document.on("input", "#teste, " +  selector, function(e) {'+
			                'valueOutput2(e.target);'+
			            '});'+
			            


			            '$("#teste").rangeslider({'+

			                'polyfill: true,'+

			                // Callback function
			                'onInit: function() {'+
			                    'valueOutput2(this.$element[0]);'+
			                '},'+

			                // Callback function
			                'onSlide: function(position, value) {'+
			                    'console.log("onSlide");'+
			                    'console.log("position: " + position, "value: " + value);'+
			                '},'+

			                // Callback function
			                'onSlideEnd: function(position, value) {'+
			                    'console.log("onSlideEnd");'+
			                    'console.log("position: " + position, "value: " + value);'+
			                '}'+
			            '});'+


		                '$("#corFundoMenu").spectrum({'+
			                'preferredFormat: "hex",'+
			                'showInitial: true,'+
			                'showInput: true,'+
			                'showPalette: true,'+
			                'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
			                'showAlpha: true,'+
			                'allowEmpty: true,'+
			                'clickoutFiresChange: false,'+
			                'change: function(color) {'+
			                  '$("'+el+'").css({backgroundColor: color.toRgbString()});'+
			                  '$("'+el+'").css({borderColor: color.toRgbString()});'+
			                '}'+
		                '});'+

		                '$("#corTextoMenu").spectrum({'+
			                'preferredFormat: "hex",'+
			                'showInitial: true,'+
			                'showInput: true,'+
			                'showPalette: true,'+
			                'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
			                'showAlpha: true,'+
			                'allowEmpty: true,'+
			                'clickoutFiresChange: false,'+
			                'change: function(color) {'+
			                  '$("'+el+'").css({color: color.toRgbString()});'+
			                '}'+
		                '});'+

		                'var sizef = ["","1em","1.2em","1.5em","1.8em","2em","2.5em","3em","3.5em"];'+
		                'var sizefont = "";'+
		                '$.each(sizef, function(index, value){'+
					      'sizefont += \'<option value="\'+value+\'">\'+value+\'</option>\';'+
					    '});'+
					    '$("#editFontSize").html(sizefont);'+
					    
					    '$("#editFontSize").change(function(){'+
					      'var font = $(this).val();'+
					      '$("'+el+'").css({fontSize: font});'+
					    '});'+

		                'var options = ['+
					                  '"Arial",'+
					                  '"Verdana",'+
					                  '"Helvetica",'+
					                  '"Calibri",'+
					                  '"Impact",'+
					                  '"Tahoma",'+
					                  '"Trebuchet MS",'+
					                  '"Times New Roman",'+
					                  '"Georgia",'+
					                  '"Garamond",'+
					                  '"Cambria",'+
					                 ' "Palatino",'+
					                  '"Lucida Bright",'+
					                  '"Courier",'+
					                  '"Courier New",'+
					                  '"Monaco",'+
					                 ' "Consolas",'+
					                 ' "Lucida Console",'+
					                 ' "Avant Garde",'+
					                  '"Bookman",'+
					                  '];'+

					    'var tipofont ="";'+
					    '$.each(options, function(index, value){'+
					      'tipofont += \'<option value="\'+value+\'" style="font-family:\'+value+\' ">\'+value+\'</option>\';'+
					    '});'+
					    '$("#editFonts").html(tipofont);'+
					    
					    '$("#editFonts").change(function(){'+
					      'var font = $(this).val();'+
					      '$("'+el+'").css({fontFamily: font});'+
					    '});'+
		            '});'+
                '</script>';
    $('#ect_ferramentas').html(modal);
}


/*************************************************************************/
/*************************************************************************/
// Edição geral de textos com link By. Marcos Meira 28/10/2016//
/*************************************************************************/
/*************************************************************************/

function edicao_texto_link (elemento)
{
    var baseUrl = $("#base_url").val();
    var el = elemento;
    var modal = '<div class="tabs-left">'+
                '<ul class="nav nav-tabs" style="margin-right: 0px;">'+
                    '<li class="active"><a data-toggle="tab" href="#tab-11"><img src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
                    '<li class=""><a data-toggle="tab" href="#tab-22"><img src="'+baseUrl+'assets/construtor/icons/icons2/png/text.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
                    '<li class=""><a data-toggle="tab" href="#tab-33"><img src="'+baseUrl+'assets/construtor/icons/icons2/png/mouse.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
                '</ul>'+
                '<div class="tab-content">'+
                    '<div id="tab-11" class="tab-pane active">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Fundo</h1>'+
                            
                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Cor do fundo</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corFundoMenu" src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div id="tab-22" class="tab-pane">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Texto</h1>'+

                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Cor do texto</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corTextoMenu" src="'+baseUrl+'assets/construtor/icons/icons5/png/studying.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<strong>Normal</strong><br>'+
                                                '</div>'+
                                            '</div>'+
                                            // '<div class="feed-element">'+
                                            //     '<a href="javascript:" class="pull-left">'+
                                            //         '<img id="corLinkTexto" src="'+baseUrl+'assets/construtor/icons/icons2/png/tap.png" style="max-height: 40px; max-width: 80px;">'+
                                            //     '</a>'+
                                            //     '<div class="media-body ">'+
                                            //         '<strong>ao passar o mouse</strong><br>'+
                                            //     '</div>'+
                                            // '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Tamanho</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img src="'+baseUrl+'assets/construtor/icons/icons2/png/text-height.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<select class="form-control" name="" id="editFontSize">'+
                                                        
                                                    '</select>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Fonte</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img src="'+baseUrl+'assets/construtor/icons/icons2/png/text.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<select class="form-control" name="" id="editFonts">'+
                                                        
                                                    '</select>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Alinhamento</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                   '<img onclick="alignTeste("left")" src="'+baseUrl+'assets/construtor/icons/icons11/png/left-alignment-1.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img onclick="alignTeste("right")" src="'+baseUrl+'assets/construtor/icons/icons11/png/right-alignment-1.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div id="tab-33" class="tab-pane">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Link</h1>'+
                            
                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Ao passar o mouse</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corLinkTexto" src="'+baseUrl+'assets/construtor/icons/icons2/png/tap.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<strong>cor do texto</strong><br>'+
                                                '</div>'+
                                            '</div>'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corLinkFundo" src="'+baseUrl+'assets/construtor/icons/icons2/png/tap.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<strong>cor do fundo</strong><br>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '</div>'+
                '<div>'+
                    '<button class="btn btn-success btn-block" id="saveStyleTemplate" onclick="mostrar()">Salvar</button>'+
                    '<button class="btn btn-danger btn-block" onclick="limpaStyles(\''+el.slice(1,1000)+'\')">Limpar Estilos</button>'+
                '</div>'+
                '<script>'+
                    '$(function() {'+
                        
                        'var $document = $(document);'+
                        'var selector = "[data-rangeslider2]";'+
                        'var $element = $(selector);'+

                        // For ie8 support
                        'var textContent = ("textContent" in document) ? "textContent" : "innerText";'+

                        'function valueOutput2(element) {'+
                            'var value = element.value;'+
                            'var output = element.parentNode.getElementsByTagName("output")[0] || element.parentNode.parentNode.getElementsByTagName("output")[0];'+
                            'output[textContent] = value+\'px\';'+
                            'var css = "'+el+'{'+
                                'font-size:"+value+"px;'+
                            '}";'+
                                  
                            '$("#tamanhoMenu").html(css);'+
                            '$("'+el+'").css({fontSize: value});'+
                            'console.log(value);'+
                        '}'+


                        '$document.on("input", "#teste, " +  selector, function(e) {'+
                            'valueOutput2(e.target);'+
                        '});'+
                        


                        '$("#teste").rangeslider({'+

                            'polyfill: true,'+

                            // Callback function
                            'onInit: function() {'+
                                'valueOutput2(this.$element[0]);'+
                            '},'+

                            // Callback function
                            'onSlide: function(position, value) {'+
                                'console.log("onSlide");'+
                                'console.log("position: " + position, "value: " + value);'+
                            '},'+

                            // Callback function
                            'onSlideEnd: function(position, value) {'+
                                'console.log("onSlideEnd");'+
                                'console.log("position: " + position, "value: " + value);'+
                            '}'+
                        '});'+


                        '$("#corFundoMenu").spectrum({'+
                            'preferredFormat: "hex",'+
                            'showInitial: true,'+
                            'showInput: true,'+
                            'showPalette: true,'+
                            'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
                            'showAlpha: true,'+
                            'allowEmpty: true,'+
                            'clickoutFiresChange: false,'+
                            'change: function(color) {'+
                              '$("'+el+'").css({backgroundColor: color.toRgbString()});'+
                              '$("'+el+'").css({borderColor: color.toRgbString()});'+
                            '}'+
                        '});'+

                        '$("#corTextoMenu").spectrum({'+
                            'preferredFormat: "hex",'+
                            'showInitial: true,'+
                            'showInput: true,'+
                            'showPalette: true,'+
                            'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
                            'showAlpha: true,'+
                            'allowEmpty: true,'+
                            'clickoutFiresChange: false,'+
                            'change: function(color) {'+
                              '$("'+el+'").css({color: color.toRgbString()});'+
                            '}'+
                        '});'+

                        '$("#corLinkTexto").spectrum({'+
                            'preferredFormat: "hex",'+
                            'showInitial: true,'+
                            'showInput: true,'+
                            'showPalette: true,'+
                            'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
                            'showAlpha: true,'+
                            'allowEmpty: true,'+
                            'clickoutFiresChange: false,'+
                            'change: function(color) {'+
                                'var css = "'+el+':hover{color: "+color.toRgbString()+" !important}";'+
                                '$(".links-loja").append(css);'+
                            '}'+
                        '});'+
                        '$("#corLinkFundo").spectrum({'+
                            'preferredFormat: "hex",'+
                            'showInitial: true,'+
                            'showInput: true,'+
                            'showPalette: true,'+
                            'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
                            'showAlpha: true,'+
                            'allowEmpty: true,'+
                            'clickoutFiresChange: false,'+
                            'change: function(color) {'+
                                'var css = "'+el+':hover{background-color: "+color.toRgbString()+" !important}";'+
                                '$(".links-loja").append(css);'+
                            '}'+
                        '});'+

                        'var sizef = ["","1em","1.2em","1.5em","1.8em","2em","2.5em","3em","3.5em"];'+
                        'var sizefont = "";'+
                        '$.each(sizef, function(index, value){'+
                          'sizefont += \'<option value="\'+value+\'">\'+value+\'</option>\';'+
                        '});'+
                        '$("#editFontSize").html(sizefont);'+
                        
                        '$("#editFontSize").change(function(){'+
                          'var font = $(this).val();'+
                          '$("'+el+'").css({fontSize: font});'+
                        '});'+

                        'var options = ['+
                                      '"Arial",'+
                                      '"Verdana",'+
                                      '"Helvetica",'+
                                      '"Calibri",'+
                                      '"Impact",'+
                                      '"Tahoma",'+
                                      '"Trebuchet MS",'+
                                      '"Times New Roman",'+
                                      '"Georgia",'+
                                      '"Garamond",'+
                                      '"Cambria",'+
                                     ' "Palatino",'+
                                      '"Lucida Bright",'+
                                      '"Courier",'+
                                      '"Courier New",'+
                                      '"Monaco",'+
                                     ' "Consolas",'+
                                     ' "Lucida Console",'+
                                     ' "Avant Garde",'+
                                      '"Bookman",'+
                                      '];'+

                        'var tipofont ="";'+
                        '$.each(options, function(index, value){'+
                          'tipofont += \'<option value="\'+value+\'" style="font-family:\'+value+\' ">\'+value+\'</option>\';'+
                        '});'+
                        '$("#editFonts").html(tipofont);'+
                        
                        '$("#editFonts").change(function(){'+
                          'var font = $(this).val();'+
                          '$("'+el+'").css({fontFamily: font});'+
                        '});'+
                    '});'+
                '</script>';
    $('#ect_ferramentas').html(modal);
}


/*************************************************************************/
/*************************************************************************/
// Edição geral da cor de fundo dos elementos By. Marcos Meira 27/10/2016//
/*************************************************************************/
/*************************************************************************/

function edicao_fundo (elemento)
{
	var baseUrl = $("#base_url").val();
    var modal = '<div class="tabs-left">'+
                '<ul class="nav nav-tabs" style="margin-right: 0px;">'+
                    '<li class="active"><a data-toggle="tab" href="#tab-1"><img src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
               	'</ul>'+
                '<div class="tab-content">'+
                    '<div id="tab-1" class="tab-pane active">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Fundo</h1>'+
                            
                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Cor do fundo</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corFundoMenu" src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '</div>'+
                '<div>'+
                    '<button class="btn btn-success btn-block" id="saveStyleTemplate" onclick="mostrar()">Salvar</button>'+
                    '<button class="btn btn-danger btn-block" onclick="limpaStyles(\''+elemento.slice(1,1000)+'\')">Limpar Estilos</button>'+
                '</div>'+
                '<script>'+
                	'$(function() {'+
		                '$("#corFundoMenu").spectrum({'+
			                'preferredFormat: "hex",'+
			                'showInitial: true,'+
			                'showInput: true,'+
			                'showPalette: true,'+
			                'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
			                'showAlpha: true,'+
			                'allowEmpty: true,'+
			                'clickoutFiresChange: false,'+
			                'change: function(color) {'+
			                  '$("'+elemento+'").css({backgroundColor: color.toRgbString(), borderColor: color.toRgbString()});'+
			                '}'+
		                '});'+
		            '});'
                '</script>';
                $('#ect_ferramentas').html(modal);
}

function edicao_fundo_borda (elemento)
{

}


/******************************************************************/
/******************************************************************/
// Edição geral dos botões do template By. Marcos Meira 27/10/2016//
/******************************************************************/
/******************************************************************/

function edicao_botao(elemento)
{
	var baseUrl = $("#base_url").val();
    var el = elemento;
	var modal = '<div class="tabs-left">'+
                '<ul class="nav nav-tabs" style="margin-right: 0px;">'+
                    '<li class="active"><a data-toggle="tab" href="#tab-11"><img src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
                    '<li class=""><a data-toggle="tab" href="#tab-22"><img src="'+baseUrl+'assets/construtor/icons/icons2/png/text.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
                    '<li class=""><a data-toggle="tab" href="#tab-33"><img src="'+baseUrl+'assets/construtor/icons/icons2/png/mouse.png" style="max-height: 40px; max-width: 80px;"></a></li>'+
               	'</ul>'+
                '<div class="tab-content">'+
                    '<div id="tab-11" class="tab-pane active">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Fundo</h1>'+
                            
                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Cor do fundo</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corFundoMenu" src="'+baseUrl+'assets/construtor/icons/icons5/png/painter.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div id="tab-22" class="tab-pane">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Texto</h1>'+

                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Cor do texto</h5>'+
                               ' </div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img id="corTextoMenu" src="'+baseUrl+'assets/construtor/icons/icons5/png/studying.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<strong>Normal</strong><br>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Tamanho</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img src="'+baseUrl+'assets/construtor/icons/icons2/png/text-height.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<select class="form-control" name="" id="editFontSize">'+
                                                        
                                                    '</select>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Fonte</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img src="'+baseUrl+'assets/construtor/icons/icons2/png/text.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<div class="media-body ">'+
                                                    '<select class="form-control" name="" id="editFonts">'+
                                                        
                                                    '</select>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="ibox-title">'+
                                    '<h5>Alinhamento</h5>'+
                                '</div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<a href="javascript:" class="pull-left">'+
                                                   '<img onclick="alignTeste("left")" src="'+baseUrl+'assets/construtor/icons/icons11/png/left-alignment-1.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                                '<a href="javascript:" class="pull-left">'+
                                                    '<img onclick="alignTeste("right")" src="'+baseUrl+'assets/construtor/icons/icons11/png/right-alignment-1.png" style="max-height: 40px; max-width: 80px;">'+
                                                '</a>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                    '<div id="tab-33" class="tab-pane">'+
                        '<div class="panel-body" style="margin-left: 0px;">'+
                            '<h1>Botão</h1>'+

                            '<div class="ibox float-e-margins">'+
                                '<div class="ibox-title">'+
                                    '<h5>Opões</h5>'+
                               ' </div>'+
                                '<div class="ibox-content">'+
                                    '<div>'+
                                        '<div class="feed-activity-list">'+
                                            '<div class="feed-element">'+
                                                '<button class="btn btn-primary btn-lg opc_btn" id="opc_btn_1">Botão grande</button>'+
                                                '<button class="btn btn-primary btn-sm opc_btn" id="opc_btn_2">Botão Pequeno</button><br>'+
                                                '<button class="btn btn-primary btn-xs opc_btn" id="opc_btn_3">Botão mini</button>'+
                                                '<button class="btn btn-primary btn-block opc_btn" id="opc_btn_4">Botão block</button>'+
                                                '<button class="btn btn-primary opc_btn" id="opc_btn_5">Botão padrão</button>'+
                                                '<button class="btn btn-primary btn-outline opc_btn" id="opc_btn_6">Botão outline</button>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
                '</div>'+
                '<div>'+
                    '<button class="btn btn-success btn-block" id="saveStyleTemplate" onclick="mostrar()">Salvar</button>'+
                    '<button class="btn btn-danger btn-block" onclick="limpaStyles(\''+el.slice(1,1000)+'\')">Limpar Estilos</button>'+
                '</div>'+
                '<script>'+
                	'$(function() {'+
		                
                        '$(".opc_btn").click(function(){'+
                            'var opc = $(this).attr("id");'+
                            'switch (opc){'+
                                'case "opc_btn_1":'+
                                    '$("'+elemento+'").removeClass().addClass("'+elemento.slice(1,1000)+'");'+
                                    '$("'+elemento+'").addClass("btn btn-primary btn-lg");'+
                                'break;'+
                                'case "opc_btn_2":'+
                                    '$("'+elemento+'").removeClass().addClass("'+elemento.slice(1,1000)+'");'+
                                    '$("'+elemento+'").addClass("btn btn-primary btn-sm");'+
                                'break;'+
                                'case "opc_btn_3":'+
                                    '$("'+elemento+'").removeClass().addClass("'+elemento.slice(1,1000)+'");'+
                                    '$("'+elemento+'").addClass("btn btn-primary btn-xs");'+
                                'break;'+
                                'case "opc_btn_4":'+
                                    '$("'+elemento+'").removeClass().addClass("'+elemento.slice(1,1000)+'");'+
                                    '$("'+elemento+'").addClass("btn btn-primary btn-block");'+
                                'break;'+
                                'case "opc_btn_5":'+
                                    '$("'+elemento+'").removeClass().addClass("'+elemento.slice(1,1000)+'");'+
                                    '$("'+elemento+'").addClass("btn btn-primary");'+
                                'break;'+
                                'case "opc_btn_6":'+
                                    '$("'+elemento+'").removeClass().addClass("'+elemento.slice(1,1000)+'");'+
                                    '$("'+elemento+'").addClass("btn btn-primary btn-outline");'+
                                'break;'+
                            '}'+
                        '});'+

                		'var $document = $(document);'+
			            'var selector = "[data-rangeslider2]";'+
			            'var $element = $(selector);'+

			            // For ie8 support
			            'var textContent = ("textContent" in document) ? "textContent" : "innerText";'+

                		'function valueOutput2(element) {'+
			                'var value = element.value;'+
			                'var output = element.parentNode.getElementsByTagName("output")[0] || element.parentNode.parentNode.getElementsByTagName("output")[0];'+
			                'output[textContent] = value+\'px\';'+
			              	'var css = "'+el+'{'+
			              		'font-size:"+value+"px;'+
			              	'}";'+
			                      
			                '$("#tamanhoMenu").html(css);'+
			                '$("'+el+'").css({fontSize: value});'+
			                'console.log(value);'+
			            '}'+


                		'$document.on("input", "#teste, " +  selector, function(e) {'+
			                'valueOutput2(e.target);'+
			            '});'+
			            


			            '$("#teste").rangeslider({'+

			                'polyfill: true,'+

			                // Callback function
			                'onInit: function() {'+
			                    'valueOutput2(this.$element[0]);'+
			                '},'+

			                // Callback function
			                'onSlide: function(position, value) {'+
			                    'console.log("onSlide");'+
			                    'console.log("position: " + position, "value: " + value);'+
			                '},'+

			                // Callback function
			                'onSlideEnd: function(position, value) {'+
			                    'console.log("onSlideEnd");'+
			                    'console.log("position: " + position, "value: " + value);'+
			                '}'+
			            '});'+


		                '$("#corFundoMenu").spectrum({'+
			                'preferredFormat: "hex",'+
			                'showInitial: true,'+
			                'showInput: true,'+
			                'showPalette: true,'+
			                'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
			                'showAlpha: true,'+
			                'allowEmpty: true,'+
			                'clickoutFiresChange: false,'+
			                'change: function(color) {'+
			                  '$("'+el+'").css({backgroundColor: color.toRgbString()});'+
			                  '$("'+el+'").css({borderColor: color.toRgbString()});'+
			                '}'+
		                '});'+

		                '$("#corTextoMenu").spectrum({'+
			                'preferredFormat: "hex",'+
			                'showInitial: true,'+
			                'showInput: true,'+
			                'showPalette: true,'+
			                'palette: [["red", "rgba(0, 255, 0, .5)", "rgb(0, 0, 255)"]],'+
			                'showAlpha: true,'+
			                'allowEmpty: true,'+
			                'clickoutFiresChange: false,'+
			                'change: function(color) {'+
			                  '$("'+el+'").css({color: color.toRgbString()});'+
			                '}'+
		                '});'+

		                'var sizef = ["","1em","1.2em","1.5em","1.8em","2em","2.5em","3em","3.5em"];'+
		                'var sizefont = "";'+
		                '$.each(sizef, function(index, value){'+
					      'sizefont += \'<option value="\'+value+\'">\'+value+\'</option>\';'+
					    '});'+
					    '$("#editFontSize").html(sizefont);'+
					    
					    '$("#editFontSize").change(function(){'+
					      'var font = $(this).val();'+
					      '$("'+el+'").css({fontSize: font});'+
					    '});'+

		                'var options = ['+
					                  '"Arial",'+
					                  '"Verdana",'+
					                  '"Helvetica",'+
					                  '"Calibri",'+
					                  '"Impact",'+
					                  '"Tahoma",'+
					                  '"Trebuchet MS",'+
					                  '"Times New Roman",'+
					                  '"Georgia",'+
					                  '"Garamond",'+
					                  '"Cambria",'+
					                 ' "Palatino",'+
					                  '"Lucida Bright",'+
					                  '"Courier",'+
					                  '"Courier New",'+
					                  '"Monaco",'+
					                 ' "Consolas",'+
					                 ' "Lucida Console",'+
					                 ' "Avant Garde",'+
					                  '"Bookman",'+
					                  '];'+

					    'var tipofont ="";'+
					    '$.each(options, function(index, value){'+
					      'tipofont += \'<option value="\'+value+\'" style="font-family:\'+value+\' ">\'+value+\'</option>\';'+
					    '});'+
					    '$("#editFonts").html(tipofont);'+
					    
					    '$("#editFonts").change(function(){'+
					      'var font = $(this).val();'+
					      '$("'+el+'").css({fontFamily: font});'+
					    '});'+
		            '});'+
                '</script>';
    $('#ect_ferramentas').html(modal);
}