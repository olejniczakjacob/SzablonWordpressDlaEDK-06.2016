<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // pętla wordpress ?>
			<div class="art">	
				<article>
					<header>
						<div class="image">
							<a href="<?php the_permalink(); // bezpośredni link do postu ?>">
								<?php the_post_thumbnail('thumbnail'); // ikona postu?>
							</a>
						</div>
						<div id="category">
								<?php the_category(); // tytuł postu ?>
						</div><br><br>
						<div class="autor-time">
							<span>Autor </span><?php the_author_posts_link(); // link do autora postu ?> 
							<span> /</span>
							<time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('j F Y'); // czas utworzenia postu ?></time>

						</div>
						<h2>
							<a href="<?php the_permalink(); // bezpośredni link do postu ?>" title="Link do <?php the_title(); // tytuł postu ?>" rel="bookmark">
								<?php the_title(); // tytuł postu ?>
							</a>
						</h2>
					</header>
					<div>
						<?php the_excerpt(); // część posty 55 słów ?>
					</div>
				</article>
			</div>
<?php endwhile; else: // koniec pętli, wyjątek dla nieznalezionych stron ?>
	<p>Brak postów do wyświetlenia, użyj wyszukiwarki</p>
<?php endif; // definitywny koniec pętli ?>