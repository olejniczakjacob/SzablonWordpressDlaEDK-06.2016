function otworz()
	{
		$('#body').css('right', '250px');
		$('#otworz').css('display','none')
		$('#zamknij').css('display','block')
		$('#za').css('display','block')
		$('#aside-right').css('display','block')
	}
    function zamknij(){
		$('#body').css('right', '0');
		$('#otworz').css('display','block')
		$('#zamknij').css('display','none')
		$('#za').css('display','none')
		setTimeout(function(){ $('#aside-right').css('display','none') }, 500);
	}
	  function otworz2()
	{
		setTimeout(function(){ 
		
		}, 10000);
	} 
	jQuery("document").ready(function($){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 40) {

			$('.media').css('display', 'none');
			$('#reklama_header').css('display', 'none');
			$('#sidebar-left').css('top', '85px');
        } else {
            $('.media').css('display', 'block');
			$('#reklama_header').css('display', 'block');
			$('#sidebar-left').css('top', '153px');
        }
    });
}); 