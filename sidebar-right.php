<aside id="aside-right">	
	<div id="aside_fixed"><ul>
		<?php if ( !dynamic_sidebar( 'primary-widget-area' ) ) : // generuje strefę widżetów, jeśli brak widżetów wyświetla kod poniżej ?>
			<?php get_search_form(); ?>
			
		<?php endif; // koniec "twardych" widżetów ?>
		<?php wp_register(); // link administracja witryną ?>
		</ul>
	</div>
</aside>
<div class="clr"></div>
