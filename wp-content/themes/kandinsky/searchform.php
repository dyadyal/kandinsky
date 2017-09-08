<?php
/**
 * The template for displaying search forms 
 */
?>
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<?php rdc_svg_icon('icon-search');?>
		<input type="search" class="search-field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php _e('Find', 'knd');?>" autocomplete="off">
        <span class="action"><?php _e('Press Enter', 'knd');?></span>		
	</form>