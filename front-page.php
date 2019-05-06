<?php get_header(); 


if( have_posts() ){
?>

    <div class="site-container">
<?php
    while( have_posts() ){
        
        the_post();
        /* Display the title of the post */
        ?>
        <h1 class="site-title"><?php the_title();?></h1>

        <?php
        the_post_thumbnail();

        /* Display the content of the post */
        echo "<article class='main'>";
        the_content();
        echo "</article>";
        ?>

    <?php } ?>

    </div> <!-- .site-container -->

<?php } else{
    echo "There are no post to show.";
}
?>

<?php
$args = array(
    'post_type'              => 'project',
    'post_status'            => 'publish',
    'posts_per_page'         => 3,
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        the_post_thumbnail('grid_thumbnail');
        the_content();
    }
} else {
    echo "There are no posts to be shown";
}

wp_reset_postdata();?>





<?php get_footer(); ?>