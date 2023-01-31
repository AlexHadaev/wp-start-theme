<?php
global $wp_query;
$count_pages = isset($args)?$args['total']:'';
$total   = $count_pages ?? $wp_query->max_num_pages;

if ($total > 1):
    $container = isset($args)?$args['container']:'';
    $params = array(
        'total' => $total,
        'prev_text' => '<span> < </span><span>' . __('Prev', '') . '</span>',
        'next_text' => '<span>' . __('Next', '') . '</span><span> > </span>',
        'mid_size' => 5,
    );
    $paginate = paginate_links($params);
?>
<section class="pagination">
    <?php if ($container === 'container'):?>
    <div class="container">
        <?php echo $paginate ?>
    </div>
    <?php else : echo $paginate; endif; ?>
</section>

<?php endif;

/*
the_posts_pagination( $args );
$args = array(
    'show_all' => false, // all pages involved in pagination are shown
    'end_size' => 1,     // number of pages at the ends
    'mid_size' => 1,     // number of pages around the current page
    'prev_next' => true, // whether to display 'previous/next page' side links.
    'prev_text' => __(''Previous'),
    'next_text' => __('Next "),
    'add_args' => false,  // Array of arguments (query variables) to add to links.
    'add_fragment' => '', // Text to be added to all links.
    'screen_reader_text' => __('Posts navigation' ),
);
*/