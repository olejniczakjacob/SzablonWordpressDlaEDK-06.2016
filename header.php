<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" media="screen"/>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<title><?php bloginfo('name');?> - Kurs Elektroniki | <?php wp_title();?></title>
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
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
	  function komunikat()
	{
		setTimeout(function(){ 
			$('#popup').css('display','none')
		}, 5000);
	
	} 	function popupz()
	{$('#popup').css('display','none')} 
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

function fullscreenon()
	{
		$('#content').css('padding-top', '30px');
		$('#articles').css('width', '90%');
		$('#articles').css('float', 'none');
		$('#header').css('display','none');
		$('#sidebar-left').css('display','none');
		$('#fullscreenon').css('display', 'none');
		$('#fullscreenoff').css('display', 'block');
		
	}
function fullscreenoff()
	{
		$('#content').css('padding-top', '30px');
		$('#articles').css('width', '75%');
		$('#articles').css('float', 'right');
		$('#header').css('display','block');
		$('#sidebar-left').css('display','block');
		$('#fullscreenon').css('display', 'block');
		$('#fullscreenoff').css('display', 'none');
	}


	</script>
<style>

.pluginButton{background-color:red;}
</style>
	<?php wp_head(); // umieszczaj zawsze przed zamknięciem </head> ?>
</head>
<body id="body" onload="komunikat()" <?php body_class(); ?> >
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="popup" id="popup">
    <div class="bg" onclick="popupz()"></div>
    <div class="container">
        <input type="button" class="close" value="x" onclick="popupz()"/>
        <div class="content">
        <span style="font-size:18px; font-weight:bold;">Strona w przebudowie pewne elementy strony mogą nie działać prawidłowo i nie wyglądają estetycznie. Przepraszamy za problem!</span>
        </div>
    </div>
</div>
<noscript>Proszę włączyć JavaScript, aby wyświetlić lub dodać komentarz.&lt;/a&gt;</noscript>
	
		
	<div id="header">
				<input type="submit" onclick="otworz()" id="otworz" style="display:block;"/><!-- otwórz sidebar -->
				<input type="submit" onclick="zamknij()" id="zamknij" style="display:none;"/><!-- zamknij sidebar -->
				<i class="fa fa-bars"></i>
			<div id="logo">
				<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' );?>"><?php bloginfo( 'name' ); // nazwa bloga ?></a>	
			</div>
			<div id="reklama_header">
				<a href="http://elektronikadlakazdego.pl/reklama/" title="">Miejsce na reklamę</a><!-- tu bedzie widget -->
			</div>
			<nav id="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); // ?>
			</nav>
			<div id="logo-media">
				<div id="logo-social-media">
					<a href="http://www.facebook.com/elektronikadlakazdegooo" title="Elektronika dla każdego fanpage"><div id="fb" class="media"><i class="fa fa-facebook"></i></div></a>
					<a href="http://plus.google.com/102260035627504845092?prsrc=5" title="Elektronika google plus"><div id="yt" class="media"><i class="fa fa-google-plus"></i></div></a>
					<a href="http://www.youtube.com/channel/UCqxMmOLFTs9rm4mTAzJbdqA" title="Elektronika praktyczna"><div id="gp" class="media"><i class="fa fa-youtube"></i></div></a>
					<a href=""><div id="tw" class="media"><i class="fa fa-linkedin" title=""></i></div></a>
					<a href=""><div id="li" class="media"><i class="fa fa-twitter" title=""></i></div></a> <!-- tu beda widgety -->
				</div>
			</div>
		
	</div><div id="head-top"></div>
	<div class="clr"></div>