<?php
/*Template name: domyślny*/
?>

<?php get_header(); ?>
			<div id="content">
				<div id="articles">
					<div class="clr"></div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // pętla wordpress ?>
						<div id="article">	
							<article>	
								<div class="clr"></div>
								<div>	
									<?php the_content(); // część posty 55 słów ?>
								</div>
							</article>
							<?php wp_link_pages(); ?>
						</div>
					 <?php comments_template(); ?>
					<?php endwhile; else: // koniec pętli, wyjątek dla nieznalezionych stron ?>
						<p>Brak postów do wyświetlenia, użyj wyszukiwarki</p>
					<?php endif; // definitywny koniec pętli ?>
					</div>
				<div class="clr"></div>
				<?php get_sidebar('left'); ?>	
			</div>
			<?php get_sidebar('right'); ?>
<?php get_footer(); ?>