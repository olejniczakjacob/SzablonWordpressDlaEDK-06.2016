<?php
/*Template name: Prawa w elektronice*/
?>

<?php get_header(); ?>
			<div id="content">
				<div id="articles">
					<span id="kategoria">Kategoria:&nbsp;</span><h4><?php the_category() ?></h4>
					<div class="clr"></div>
					<?php $nameofkat = $post->post_name; query_posts('category_name=prawa_w_elektronice&post_status=publish,future'); while (have_posts()) : the_post();?>
						<div class="ok">	
							<article>
								<header>
									<div class="image">
										<a href="<?php the_permalink(); // bezpośredni link do postu ?>">
											<?php the_post_thumbnail('thumbnail'); // ikona postu?>
											</br>
											<div class="imaget">
											<h3>
												<?php the_meta (); // tytuł postu ?>
											</h3>
											</div>
										</a>
										
									</div>
									
									
								</header>
								
							</article>
						</div>
					<?php endwhile; ?>
					<div class="clr"></div>
					
						<?php // numer i nastepna strona (prxewijanie miedzy stronami wpisów)
						global $wp_query;
						$total = $wp_query->max_num_pages;
						if ( $total > 1 )  {
							 if ( !$current_page = get_query_var('paged') )?>
							 
								<?php  $current_page = 1;
							 $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
							 echo paginate_links(array(
								  'base' => get_pagenum_link(1) . '%_%',
								  'format' => $format,
								  'current' => $current_page,
								  'total' => $total,
								  'mid_size' => 4,
								  'type' => 'list'
							 ));
						} ?>
					
				</div>
				<div class="clr"></div>
				<?php get_sidebar('left'); ?>	
			</div>
			<?php get_sidebar('right'); ?>
<?php get_footer(); ?>