
<?php get_header(); 


if( have_posts() ){
?>

    <div class="site-container">
<?php
    while( have_posts() ){
        
        the_post();


        /* Display the title of the post */
        ?>
        <a href="<?php the_permalink();?>"><h1 class="site-title"><?php the_title();?></h1></a>

        <?php
        the_post_thumbnail('grid_thumbnail');//post pic
        /* Display the content of the post */
        echo "<article>";
        the_content();
        echo "</article>";
        ?>
       

    <?php } ?>

    </div> <!-- .site-container -->

<?php } else{
    echo "There are no post to show.";
} ?>


<?php get_footer(); ?>