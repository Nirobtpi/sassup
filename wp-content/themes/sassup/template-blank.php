<?php
// Template Name: Blank Template
get_header()
?>
<main>
    <?php while (have_posts()) : the_post() ?>
        <div class="licenses-text1 licenses">
            <?php the_content() ?>
        </div>
    <?php endwhile; ?>
</main>
<?php get_footer() ?>