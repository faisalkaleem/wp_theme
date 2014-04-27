<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
get_sidebar();
?>
  <div id="content">
    <h2>Welcome to <span style="color:#B29B35;"> Floral</span> Template</h2>
    <blockquote>This template has been tested in Mozilla and IE7. The page validates as XHTML 1.0 Transitional using valid CSS.<br />
      For more FREE templates visit <a href="http://www.mitchinson.net">my website</a>.</blockquote>
    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

    <?php if(have_posts()){
     while (have_posts()){
         the_post();
         the_title('<h2><a href="'.esc_url( get_permalink() ).'">','</a></h2>'); ?>
        <p class="info"><?php the_post_thumbnail(); ?></p>
<?php 
//         the_content();
         the_excerpt();
     }
    } ?>
<!--    <h2>Article One</h2>
    <p class="info"><img class="noborder" src="img/flower.jpg" alt="flower" title="flower"/> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis odio. Suspendisse aliquet. Nunc porta rutrum urna. Morbi porttitor magna id velit. Morbi egestas. Etiam lorem sapien, vehicula in, dictum sed, accumsan tristique, justo. Nunc fringilla congue est. Donec mollis leo et arcu. In condimentum lacus non turpis. Morbi faucibus. Duis dapibus. Aenean lobortis. Ut nec metus non diam scelerisque euismod. Nulla facilisi. In laoreet, augue eu auctor scelerisque, urna orci pretium sem, nec pulvinar orci enim vel dui. Quisque sit amet arcu. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vestibulum est in risus. Nulla facilisi.</p>
    <p class="post"> <a href="http://www.free-css.com/" class="readmore">Read more</a> <a href="http://www.free-css.com/" class="comments">Comments (3)</a> <span class="date">April 26, 2007</span> </p>
    
    <h2>Article Two</h2>
    <p class="info"><img class="noborder" src="img/flower.jpg" alt="flower" title="flower"/> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis odio. Suspendisse aliquet. Nunc porta rutrum urna. Morbi porttitor magna id velit. Morbi egestas. Etiam lorem sapien, vehicula in, dictum sed, accumsan tristique, justo. Nunc fringilla congue est. Donec mollis leo et arcu. In condimentum lacus non turpis. Morbi faucibus. Duis dapibus. Aenean lobortis. Ut nec metus non diam scelerisque euismod. Nulla facilisi. In laoreet, augue eu auctor scelerisque, urna orci pretium sem, nec pulvinar orci enim vel dui. Quisque sit amet arcu. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras vestibulum est in risus. Nulla facilisi.</p>
    <p class="post"> <a href="http://www.free-css.com/" class="readmore">Read more</a> <a href="http://www.free-css.com/" class="comments">Comments (3)</a> <span class="date">April 26, 2007</span> </p>-->
  </div>
<?php get_footer(); ?>