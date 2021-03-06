<?php 
global $wp_rewrite;            
$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

$pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => false,
        'type' => 'list',
        'prev_next'    => True,
        'prev_text' => '<i class="icon icon-angle-left"></i> Previous',
        'next_text' => 'Next <i class="icon icon-angle-right"></i>',
        'screen_reader_text' => '',
    );

if( $wp_rewrite->using_permalinks() && !is_search())
    $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');

if( !empty($wp_query->query_vars['s']) )
    $pagination['add_args'] = array('s'=>get_query_var('s'));
?>
<div class="text-center">
    <?php 
        echo str_replace( '<ul class=\'page-numbers\'>',
                '<ul class="pagination pagination-centered page-numbers">',
                get_the_posts_pagination($pagination));
    ?>
</div>
