<?php get_header(); ?> 
<main>

    <?php
        if(have_posts()) {
            while(have_posts()) : the_post();
    ?>
   
    <div class="page-hero">
        <h1 class="page-hero__heading"><?php the_title(); ?></h1>
    </div>

    <?php the_content(); ?> 
    <?php endwhile; } ?>

</main>
<?php get_footer(); ?>