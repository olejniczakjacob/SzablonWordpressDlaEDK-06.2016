<?php
/*Template name: Kontakt*/
?>

<?php get_header(); ?>
			<div id="content">
				<div id="articles">
					<span id="kategoria">Kategoria:&nbsp;</span><h4><?php the_category() ?></h4>
					<div class="clr"></div>
					
						<div class="ok">	
							<article>
								<header>
								<?php echo do_shortcode( '[contact-form-7 id="5" title="Kontakt"]' ); ?>
									
								</header>
								
							</article>
						</div>
					<div class="clr"></div>
					
				</div>
				<div class="clr"></div>
				<?php get_sidebar('left'); ?>	
			</div>
			<?php get_sidebar('right'); ?>
<?php get_footer(); ?>