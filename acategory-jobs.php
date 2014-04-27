<?php
get_header();
get_sidebar();
if (have_posts()) {
    echo '<h2>Jobs</h2>';
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