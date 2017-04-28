<aside id="sidebar-left">
	
	<span>Przeczytaj również:</span></br></br>
	<div id="czytaj-rowniez">
		<?php 
			query_posts(array('orderby' => 'rand', 'showposts' => 5));
			if (have_posts()) :
			while (have_posts()) : the_post(); 
		?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php
					if ( has_post_thumbnail() ) { the_post_thumbnail('thumbnail'); } // ikona postu
					the_title(); // tytuł postu 
				?>
			</a>
			<div class="clr"></div>
		<?php 
			endwhile; endif; 
		?>
	</div>
</aside>
<div class="clr"></div>



