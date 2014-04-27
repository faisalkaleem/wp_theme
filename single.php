<?php
get_header();
get_sidebar();
if (have_posts()) {
        the_post();
        the_title('<h2>', '</h2>');
        ?>
        <p class="info"><?php the_post_thumbnail('full'); ?></p>
        <?php
         the_content();
}
get_footer();
?>