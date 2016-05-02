$(function(){
  $('#abas').hide();
    var noticia;  
    var hash = window.location.hash;
    if (hash !='')
    {
      noticia = $(hash).html();
      $('.abas li a[href="' + hash + '"]').parent().addClass('ativo');    
    } else {
      noticia = $('#abas div:first-child').html();      
      $('.abas li:first-child').addClass('ativo');    
    }
    $('#box-abas').append('<div>' + noticia + '</div>').find('div').slideDown();
    $('.abas li a').click(function(){
      $('.abas li').removeClass('ativo');
      $(this).parent().addClass('ativo');
      var ancora = $(this).attr('href');
      var nome = ancora.substr(1, ancora.length);
      noticia = $('#abas div[id="' + nome + '"]').html();
      $('#box-abas').empty();
      $('#box-abas').append('<div>' + noticia + '</div>').find('div').slideDown();
    return false();
    })

  $.fn.scrollToTop = function(){
    $(this).hide().removeAttr("href");
    
    if($(window).scrollTop() != "0")
    {
      $(this).fadeIn("slow");
    }
    
    var scrollDiv = $(this);
    
    $(window).scroll(function(){
      if($(window).scrollTop() == "0")
      {
        $(scrollDiv).fadeOut("slow");
      }
      else
      {
        $(scrollDiv).fadeIn("slow");
      }
    });
    
    $(this).click(function(){
      $("html, body").animate({scrollTop:0},"slow");
    });
  };

  $("#toTop").scrollToTop();

  $('.fancybox').fancybox();
	$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
	});
	
	$('.status_nome').clear();
	$('.status_email').clear();
	$('.status_msg').clear();
	
	$('.btn_enviar').on('click', function(){
		var n, e, m;
		var msg = "";
		n = $('.status_nome').val();
		e = $('.status_email').val();
		m = $('.status_msg').val();
		
		if(n == "Digite seu nome aqui"){ msg += 'Campo Nome vazio. \n'; }
		if(e == "Digite seu e-mail aqui"){ msg += 'Campo E-mail vazio. \n'; }
		if(m == "Digite sua mensagem aqui"){ msg += 'Campo Mensagem vazio. \n'; }
		
		if(msg != ""){
			alerta = "Por favor, preencha o(s) campo(s) abaixo: \n\n"+msg;
			alert(alerta);
			return false;
		}
		
	});
	
});