<aside role="complementary" class="small-12 columns no-space">	
<?php if (is_home() || $post->post_parent == '1') {?>
		
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Default Sidebar') ) : ?>
	<?php endif; ?>
		
<?php } elseif (is_page('contact') || $post->post_parent == '2') {	?>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Default Sidebar') ) : ?>
	<?php endif; ?>
	
<?php } else { ?>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Default Sidebar') ) : ?>
	<?php endif; ?>

<?php } ?>
</aside>