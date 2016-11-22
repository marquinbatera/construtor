// var baseUrl = window.location.protocol + "/construtor2/";
var baseUrl = $("#base_url").val();

function menuFundo()
{
    var html = '<a class="trocaImages" id="fundo1"><img style="max-height:155px; max-width: 240px;" class="caixa img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-fundo1.jpg"></a>';
    html += '<a class="trocaImages" id="fundo2"><img style="max-height:155px; max-width: 240px;" class="caixa img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-fundo2.jpg"></a>';
    html += '<a class="trocaImages" id="fundo3"><img style="max-height:155px; max-width: 240px;" class="caixa img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-fundo3.jpg"></a>';
    html += '<a class="trocaImages" id="fundo4"><img style="max-height:155px; max-width: 240px;" class="caixa img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-fundo4.jpg"></a>';
    $('.menuConteudo').html(html);
}

function menuBanner()
{
	var html = '<a class="js-drag" id="drag1"><img style="max-height:155px; max-width: 240px;" class="caixa img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-slicebox.jpg"></a>';
    html += '<a class="js-drag" id="drag8"><img style="max-height:155px; max-width: 240px;" class="caixa img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-jmpress.jpg"></a>';
    $('.menuConteudo').html(html);
}

function menuDestaque()
{
	var html = '<a class="js-drag" id="drag4"><img style="max-height:155px; max-width: 240px;" class="img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-destaque1.png"></a>';
	html += '<a class="js-drag" id="drag9"><img style="max-height:155px; max-width: 240px;" class="img-responsive" src="'+baseUrl+'assets/construtor/img/thumb-destaque2.png"></a>';
    $('.menuConteudo').html(html);
}