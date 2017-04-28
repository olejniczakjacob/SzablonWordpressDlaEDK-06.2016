<?php get_header(); ?>
			<div id="content">
				<div id="articles">
					<header>
						<h1><?php the_author(); ?> </h1>
					</header>
					<div class="clr"></div>
					<div class="list-content">
					liczba postów: <?php echo the_author_posts( 'user_email' ); ?><br/>
					Biografia autora: <?php echo the_author_meta('description'); ?><br/>
					Strona autora: <?php echo the_author_meta('url'); ?><br/>
					Avatar autora: <?php echo get_avatar( get_the_author_meta( 'user_email' )) ?><br/>
					
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // pętla wordpress ?>
			<div class="art">	
				<article>
					<header>
						<div class="image">
							<a href="<?php the_permalink(); // bezpośredni link do postu ?>">
								<?php the_post_thumbnail('thumbnail'); // ikona postu?>
							</a>
						</div>
						<div class="autor-time">
							<time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F Y'); // czas utworzenia postu ?></time>
						</div>
						<h2>
							<a href="<?php the_permalink(); // bezpośredni link do postu ?>" title="Link do <?php the_title(); // tytuł postu ?>" rel="bookmark">
								<?php the_title(); // tytuł postu ?>
							</a>
						</h2>
					</header>
				</article>
			</div>
<?php endwhile; else: // koniec pętli, wyjątek dla nieznalezionych stron ?>
	<p>Brak postów do wyświetlenia, użyj wyszukiwarki</p>
<?php endif; // definitywny koniec pętli ?>
					</div>
					<div class="clr"></div>
					
				</div>
				<div class="clr"></div>
				<?php get_sidebar('left'); ?>	
			</div>
			<?php get_sidebar('right'); ?>
<?php get_footer(); ?>