<?php get_header(); ?>
			<div id="content">
				<div id="articles">
					<header>
						<h1>Artykuły o elektronice</h1>
					</header>
					<div class="clr"></div>
					<div class="list-content">
						<?php get_template_part('loop', 'index');?>	
					</div>
					<div class="clr"></div>
					<div id="next-page">
						<?php // numer i nastepna strona (prxewijanie miedzy stronami wpisów)
						global $wp_query;
						$total = $wp_query->max_num_pages;
						if ( $total > 1 )  {
							 if ( !$current_page = get_query_var('paged') )
								  $current_page = 1;
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
				</div>
				<div class="clr"></div>
				<?php get_sidebar('left'); ?>	
			</div>
			<?php get_sidebar('right'); ?>
<?php get_footer(); ?>