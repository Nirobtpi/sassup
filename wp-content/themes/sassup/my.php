<?php
get_header()
?>
<main>
    <!-- new & article section strat  -->
    <section class="article_area">
        <div class="container">
            <div class="row">
                <?php while (have_posts()) : the_post()  ?>
                    <div class="col-lg-8">
                        <div class="blog_boxs article_crad">
                            <div class="blog_box">
                                <?php
                                $get_img_url = get_the_post_thumbnail_url(get_the_ID())
                                ?>
                                <img src="<?php echo $get_img_url ?>" alt="blog-img">
                                <div class="blog-button">
                                    <?php
                                    $categorise = get_the_category(get_the_ID());
                                    foreach ($categorise as $category) :
                                    ?>
                                        <a href="#" class="btn-1"><?php echo $category->name  ?></a>
                                    <?php endforeach ?>
                                </div>

                            </div>
                            <div class="blog_text">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="blog-p"><?php the_time('F d, Y') ?></p>
                                    </div>
                                    <div class="col-6">
                                        <p class="blog-p">Author : <?php the_author() ?></p>
                                    </div>
                                </div>
                                <h2><?php the_title() ?></h2>
                                <p><?php the_content() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="col-4 post">
                    <?php dynamic_sidebar('blog_siderbar') ?>
                    <div class="resent_posts mt-5 dynamic_sidebar">
                        <h2>Related Posts</h2>
                        <?php
                        $resent_post = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                        ));
                        while ($resent_post->have_posts()) : $resent_post->the_post()
                        ?>
                            <a href="<?php the_permalink() ?>" class="d-block tm-mb-40">
                                <?php $get_img_url = get_the_post_thumbnail_url()  ?>
                                <figure>
                                    <img src="<?php echo $get_img_url ?>" alt="<?php the_title() ?>" class="mb-3 img-fluid single_re">
                                    <h2 class="resent_title"><?php echo wp_trim_words(get_the_title(), 5, '...') ?></h2>
                                </figure>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- new & article section end  -->
</main>
<?php get_footer() ?>