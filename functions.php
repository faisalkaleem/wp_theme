<?php

function wptheme_setup() {
    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery', 'mycustom',
    ));
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(50, 50);
    register_nav_menus(array(
        'primary' => __('Top primary menu', 'wptheme'),
    ));
}

add_action('init', 'create_movies_post_type');

function create_movies_post_type() {
    register_post_type('movies', array(
        'labels' => array(
            'name' => __('Movies'),
            'singular_name' => __('Movie')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'movies'),
        'taxonomies' => array('post_tag'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', /*'custom-fields'*/)
    ));
//    add_post_type_support( 'movies', array('title', ) );
    $labels = array(
        'name' => _x('Movie Type', 'taxonomy general name'),
        'singular_name' => _x('Movie Type', 'taxonomy singular name'),
        'search_items' => __('Search Movie type'),
        'all_items' => __('All Movie Types'),
        'edit_item' => __('Edit Movie Type'),
        'update_item' => __('Update Movie Type'),
        'add_new_item' => __('Add New'),
        'new_item_name' => __('New Movie Type'),
        'menu_name' => __('Movie Type'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'movie-types'),
    );
    register_taxonomy('movie_type', 'movies', $args);
    
}
add_action('add_meta_boxes', 'add_movie_custom_fields');
add_action('save_post', 'save_movie_custom_fields');
function add_movie_custom_fields(){
    add_meta_box('movies-custom-fields', 'Movie Information', 'render_movie_information_fields', 'movies', 'normal');
}
function render_movie_information_fields(){ 
    global $post;
    $post_meta = get_post_meta($post->ID);
//    $post_meta = get_post_meta($post->ID);
//    $post_meta = get_post_meta($post->ID);
//    echo '<pre>';
//    print_r($post_meta);
//    echo '</pre>';
    ?>
    <label for="Movie_release_date">Release Date: </label>
    <input id="Movie_release_date" type="text" name="Movie[release_date]" value="<?php echo $post_meta['movie_release_date'][0]; ?>" />
    <label for="Movie_director">Director: </label>
    <input id="Movie_director" type="text" name="Movie[director]" />
<?php }

function save_movie_custom_fields(){
    global $post;
    if(isset($_POST)){
        if(!empty($_POST['Movie']['release_date'])){
            add_post_meta($post->ID, 'movie_release_date', $_POST['Movie']['release_date'], true);
        }
    }
}

add_action('after_setup_theme', 'wptheme_setup');

