<?php
get_header();
get_sidebar();
$query = new WP_Query(array('post_type'=>'movies', 'orderby' => 'title', 'order' => 'DESC', 'posts_per_page' => '1' ));
if ($query->have_posts()) {
    echo '<ul>';
    while ($query->have_posts()) {
        $query->the_post();
        the_title('<li><a href="' . esc_url(get_permalink()) . '">', '</a></li>');
//        print_r($query->next_post());
//        the_title();
        ?>
        <?php
    }
    echo '</ul>';
}
$query = new WP_Query(array('post_type'=>'sports', 'orderby' => 'title', 'order' => 'DESC', 'posts_per_page' => '4' ));
if ($query->have_posts()) {
    echo '<ul>';
    while ($query->have_posts()) {
        $query->the_post();
        the_title('<li><a href="' . esc_url(get_permalink()) . '">', '</a></li>');
//        print_r($query->next_post());
//        the_title();
        ?>
        <?php
    }
    echo '</ul>';
}
get_footer();
?>