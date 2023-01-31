<?php get_header(); ?>

	<main id="main" class="page-main" role="main">

		<section class="container error-404 not-found">

			<header class="page-header">
				<h1 class="page-title">404</h1>
			</header>

			<div class="page-content">
                <span><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'theme' ); ?></span>
                <div class="page-search">
                    <?php get_search_form(); ?>
                </div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>
