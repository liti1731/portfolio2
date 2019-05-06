
<?php get_header(); 


if( have_posts() ){
?>

    <div class="site-container">
    <?php while( have_posts() ){
        
        the_post();


        /* Display the title of the post */
        ?>
        <h1 class="site-title"><?php the_title();?></h1>
        <?php the_post_thumbnail('single_large')?>
      
        

    <?php } ?>
    </div>
    <div class="taxnomies">
    <!-----------tags------>
    <?php
       $terms = get_the_terms( get_the_ID(), 'project_type' );
       foreach ($terms as $term ){
           echo $term->name;
        }
        $terms = get_the_terms( get_the_ID(), 'project_skill' );
       foreach ($terms as $term ){
           echo $term->name;
        }
    ?>
    </div>
<?php 
}else{
    echo "There are no post to show.";
} ?>


<?php get_footer(); ?>