
<?php get_header(); 


if( have_posts() ){
?>

    <div class="site-container">
<?php
    while( have_posts() ){
        
        the_post();
        ?>
        <h1 class="site-title"><?php the_title();?></h1>

        <?php
        echo "<article class='main'>";
        the_content();
        echo "</article>";
        the_post_thumbnail();
        ?>

    <?php } ?>

    </div> 

<?php } else{
    echo "There are no post to show.";
}?>


<?php get_footer(); ?>