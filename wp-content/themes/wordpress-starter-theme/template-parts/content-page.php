<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    </div>
</article>
