<?php 
    get_header();
    $programme = get_post(get_the_ID())
?>

<?php the_content(); ?>
<div class="kl-h-150"></div>

<?php get_footer(); ?>