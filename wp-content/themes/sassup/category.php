<?php
get_header()
?>
<main>
    <!-- new & article section strat  -->
    <section class="article_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class=" article_heading">
                        <div class="article_text">
                            <h2>News & Articles</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while (have_posts()) : the_post()  ?>
                    <div class="col-lg-6">
                        <div class="blog_boxs blog_box_hight article_crad">
                            <div class="blog_box">
                                <?php
                                $get_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full')
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
                                <p><?php echo wp_trim_words(get_the_content(), 10, '....') ?></p>
                                <a href="<?php the_permalink() ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- new & article section end  -->
</main>
<?php get_footer() ?>