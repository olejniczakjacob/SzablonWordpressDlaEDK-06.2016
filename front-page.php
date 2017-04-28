<?php get_header(); ?>
<?php echo do_shortcode("[metaslider id=70]"); ?>
<div class="block2" id="slid1">
	<div class="tytul">
		<strong>WITAJ NA STRONIE ELEKTRONIKA DLA KAŻDEGO</strong>
	</div>
	<div class="opis">
		<h3><strong style="color: #338ce6;">STRONA POŚWIĘCONA ZAGADNIENIOM ELEKTRONICZNYM I NIE TYLKO</strong></h3>
			<p>
				Jeżeli interesujesz się elektroniką, jesteś jej pasjonatem, ciekawi Cię jak działają i są zbudowane urządzenia elektroniczne, chcesz zdobyć ciekawą pracę związaną z elektroniką lub chcesz po prostu poczytać różne <strong>ciekawe artykuły (nie tylko dotyczące elektroniki :D)</strong> to ta strona jest dla Ciebie.
			</p>
			<a href="#slid2" title="O czym jest strona elektronika dla każdego">Czytaj dalej o czym jest ta strona?</a>
	</div>
</div>
<div class="tlo">
	<div class="block2" id="slid2">
		<div class="tytul">
			<strong>Najpopularniejsze artykuły</strong>
		</div>
		<div class="opis">
			<?php 	query_posts(array('orderby' => 'rand', 'showposts' => 8));
					if (have_posts()) : while (have_posts()) : the_post(); 
			?>
				<div class="pol">
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }?>
						<div class="pot">
							<h2 style="font-size:100%;"><?php the_title();?></h2>
							<time class="entry-date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('j F Y');?></time>
						</div>
					</a>
				</div>
			<?php endwhile; endif;?>
			<div class="clr"></div>
		</div>
	</div>
</div>
<div class="block2" id="slid3">
	<div class="tytul">
		<strong>Czym jest ta strona?</strong>
	</div>
	<div class="opis">
			<h3><strong style="color: #338ce6;"></strong></h3>
			<p>
				Jest to serwis dzięki któremu poznasz tajniki elektroniki. Nauczysz się projektowania układów elektronicznych, dowiesz się za co odpowiada każdy element w układzie elektronicznym oraz poznasz jego zasadę działania. <strong>Oprócz samej elektroniki na stronie możesz poczytać różne ciekawe artykuły o nowoczesnych technologiach i różnych nowinkach technicznych.</strong>
			</p>
			<a href="#slid4" title="Dla kogo jest strona elektronika dla każdego">Czytaj dalej dla kogo jest ta strona?</a>
	</div>
</div>
<div class="tlo">
	<div class="block2" id="slid4">
		<div class="tytul">
			<strong>Losowe artykuły</strong>
		</div>
		<div class="clr"></div>
		<div class="opis">
			<?php 	query_posts(array('orderby' => 'rand', 'showposts' => 8));
					if (have_posts()) : while (have_posts()) : the_post(); 
			?>
				<div class="pol">
					<a href="<?php the_permalink();?>" title="<?php the_title();?>">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); }?>
						<div class="pot">
							<h2 style="font-size:100%; "><?php the_title();?></h2>
							<time class="entry-date" datetime="<?php the_time('Y-m-d');?>"><?php the_time('j F Y');?></time>
						</div>
					</a>
				</div>
			<?php endwhile; endif;?>
			<div class="clr"></div>
		</div>
	</div>
</div>
<div class="block2" id="slid5">
	<div class="tytul">
		<strong>Dla kogo jest strona?</strong>
	</div>
	<div class="opis">
			<h3><strong style="color: #338ce6;"></strong></h3>
			<p>
				Ten serwis jest dla każdego poszukującego wiadomości z zakresu elektroniki, dla osób szukających kursu z elektroniki, chcących nauczyć się elektroniki, chcących tworzyć własne układy elektroniczne oraz przeczytac różne artykuły o nowości w świecie elektroniki.
			</p>
			<a href="http://elektronikadlakazdego.pl/o-stronie/" title="Wiadomości o stronie">Chcę wiedzieć jeszcze więcej o stronie.</a>
	</div>
</div>
<div class="tlo">
	<div class="block2" id="slid6">
		<div class="tytul">
			<strong>Film promocyjny strony</strong>
		</div>
		<div class="opis">
			<div style="text-align:center; position:relative;"> 
					<div id="play" onclick="playPause()" style="font-size:50px; color:#ffffff; position:absolute; top:49px; z-index:200; opacity:0.5; cursor:pointer; height:462px;margin-left:20.5%; width:820px;"><div style="margin-top:190px;" id="control"><i class="fa fa-play"></i> / <i class="fa fa-pause"></i></div> </div>
					<br><br>
					<video id="video1" width="820">
						<source src="http://elektronikadlakazdego.pl/wp-content/themes/Blue%20City/test.mp4" type="video/mp4">
					</video>
			</div> 
			<script> 
				var myVideo = document.getElementById("video1"); 
				function playPause() { 
				if (myVideo.paused) 
					myVideo.play(); 
				else 
					myVideo.pause(); 
				} 
			</script> 
		</div>
	</div>
</div>
<div class="block2" id="slid7">
	<div class="tytul">
		<strong><span style="color:#338ce6;">O AUTORACH SERWISU </span>ELEKTRONIKA DLA KAŻDEGO</strong>
	</div>
	<div class="opis">
		<h3><strong style="color: #338ce6;">Kilka słów o zespole elektronika dla każdego</strong></h3>
			<p>
				Głównym administratorem i właścicielem strony jestem ja <a href="http://elektronikadlakazdego.pl/author/jakub/" title="Profil administratora">Jakub</a>. Utworzyłem tą stronę ponieważ ... Nasz zespół składa się z czteroosobowej ekipy. Każdy odpowiada za coś innego m. in. za: pisanie artykułów, wygląd serwisu, grafikę oraz pozycjonowanie strony w wyszukiwarce. Ty również możesz dołączyć do zespołu EDK. Możesz pisać artykuły, odpowiadać na e-mail'e lub w inny sposób pomóc tworzyć <strong>największy w Polsce serwis o elektronice</strong>.
			</p>
			<a href="http://elektronikadlakazdego.pl/author/" title="autorzy serwisu elektronika dla kazdego">Członkowie zespołu elektronika dla każdego</a><br><br>
			<a href="" title="Pomóż przy rozwijaniu serwisu">Formularz zgłoszeniowy dołączenia do zespołu Edk</a>
	</div>
</div>
<?php get_sidebar('right'); ?>
<?php get_footer(); ?>