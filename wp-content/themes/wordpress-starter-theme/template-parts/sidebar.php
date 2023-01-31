<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="aside">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
