<?php
get_header();
get_sidebar();
if (have_posts()) {
    if(is_category(5)){
        echo'Jobs';
    } else {
        echo 'dont know';
    }
    echo '<h2>Category: Jobs</h2>';
    echo '<ul>';
    while (have_posts()) {
        the_post();
        the_title('<li><a href="' . esc_url(get_permalink()) . '">', '</a></li>');
        ?>
        <?php
    }
    echo '</ul>';
}
get_footer();
?>