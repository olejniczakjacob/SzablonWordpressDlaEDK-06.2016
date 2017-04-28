<?php get_header(); ?>
	<div id="content">
		<div id="articles">
			<div class="clr"></div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // pętla wordpress ?>
				<div id="article">	
					<article>
						<header>
							<h1><?php the_title(); // tytuł postu ?></h1>
							<div class="clr"></div>
							<div id="category">
								<?php the_category(); // tytuł postu ?>
							</div>
							<div class="autor-time">
								<span>Autor </span><?php the_author_posts_link(); // link do autora postu ?> 
								<span> / </span>
								<time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F Y'); // czas utworzenia postu ?></time>
							</div>
						</header>
						<div class="clr"></div>
						<div id="fullscreenon" onclick="fullscreenon()">
							<i class="fa fa-expand" style="font-size:25px; padding-top:5.5px; padding-left:6.5px;" ></i>
						</div>
						<div id="fullscreenoff" onclick="fullscreenoff()">
							<i class="fa fa-compress" style="font-size:25px; padding-top:5.5px; padding-left:6.5px;" ></i>
						</div>
						<div>	
							<?php the_content(); // część posty 55 słów ?>
						</div>
						<?php wp_link_pages(); ?>
					</article>
				</div>
					<?php comments_template(); ?>
					<?php endwhile; else: // koniec pętli, wyjątek dla nieznalezionych stron ?>
						<p>Brak postów do wyświetlenia, użyj wyszukiwarki</p>
					<?php endif; // definitywny koniec pętli ?>
					</div>
				<div class="clr"></div>
				<?php get_sidebar('left2'); ?>	
			</div>
			<?php get_sidebar('right'); ?>
<?php get_footer(); ?>