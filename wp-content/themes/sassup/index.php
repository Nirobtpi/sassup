<?php
get_header();
$get_option = get_option('saasup');
?>
<main>
  <!-- new & article section strat  -->
  <section class="article_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class=" article_heading">
            <div class="article_text">
              <h2><?php echo $get_option['blog-heading'] ?></h2>
              <p><?php echo $get_option['blog-description'] ?></p>
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
                    <a href="<?php echo get_category_link($category->term_id) ?>" class="btn-1"><?php echo $category->name  ?></a>
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

  <!-- pagination options  -->
  <section class="pagination">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 d-flex">
          <div class="prev">
            <?php
            echo get_previous_posts_link();
            ?>
          </div>
          <div class="next">
            <?php
            echo get_next_posts_link()
            ?>
          </div>
        </div>
        <div class="col-6">
          <?php
          echo the_posts_pagination(array(
            'screen_reader_text' => '&nbsp;'
          ))
          ?>
        </div>
      </div>
    </div>
  </section>

</main>
<?php get_footer() ?>