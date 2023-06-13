<?php
// Template Name: Home Template 
get_header('home');
$get_options = get_option('saasup')

?>
<main>
  <section class="features_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center">
            <div class="features_text">
              <p class="section_btn"><?php the_field('features_sub_title') ?></p>
              <h2><?php the_field('features_heding') ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <?php
        $get_fitures_item = new WP_Query(array(
          'post_type' => 'features',
          'posts_per_page' => 3,
          'order' => 'ASC',
        ));
        while ($get_fitures_item->have_posts()) : $get_fitures_item->the_post();
          $get_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

        ?>
          <div class="col-md-6 col-lg-4">
            <div class="features_item text-center">
              <img src="<?php echo $get_img_url ?>" loading="lazy" alt="features-img">
              <h3><?php the_title() ?></h3>
              <p><?php the_content() ?></p>
              <a href="<?php the_permalink() ?>" class="stretched-link">Learn More</a>

            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata() ?>
      </div>
    </div>
  </section>
  <!-- platform area strat -->
  <section class="plaform_area">
    <div class="container">
      <div class="row align-items-center platfom-background">
        <div class="col-lg-6">
          <div class="platform">
            <h2><?php the_field('cost_heading') ?></h2>
            <p><?php the_field('cost_descriptions') ?></p>
            <div class="cost d-flex">
              <img src="<?php the_field('cost_icon') ?>" loading="lazy" alt="cost-icon">
              <div class="cost-text">
                <h3><?php the_field('cost_icon_title') ?></h3>
                <p><?php the_field('cost_icon_description') ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="<?php the_field('cost_right_image') ?>" loading="lazy" alt="platfomr-images">
        </div>
      </div>
    </div>
  </section>
  <!-- platform area end -->
  <!-- smarter area strat  -->
  <section class="smarter_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center  ">
            <div class="features_text smarter_box">

              <p class="section_btn"><?php the_field('work_sub_title') ?></p>
              <h2><?php the_field('work_title') ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row nav nav-pills">
        <?php
        $i = 0;
        if (have_rows('create_account')) :
          while (have_rows('create_account')) : the_row();
        ?>
            <div class="col-md-4">
              <div class="smarter-item nav-link <?php if ($i == 0) {
                                                  echo 'active';
                                                } ?>" data-bs-toggle="pill" data-bs-target="#pills-<?php echo $i; ?>">
                <h3><?php the_sub_field('button_text') ?></h3>
              </div>
            </div>
        <?php $i++;
          endwhile;
        endif; ?>
      </div>
      <div class="row tab-content " id="pills-tabContent">
        <?php
        $i = 0;
        if (have_rows('work_content')) :
          while (have_rows('work_content')) : the_row()
        ?>
            <div class="col-12 tab-pane fade show <?php if ($i == 0) {
                                                    echo 'active';
                                                  } ?>" id="pills-<?php echo $i; ?>">
              <div class="smarter-item-content">
                <div class="row">
                  <div class="col-md-6 create-text">
                    <div class="create d-flex align-items-center">
                      <a href=""><img src="<?php the_sub_field('left_image') ?>" alt=""></a>
                      <h3><?php the_sub_field('work_content_title') ?></h3>
                    </div>
                    <p><?php the_sub_field('work_content_description') ?></p>
                    <a href="" class="btn-1 btn-over"><?php the_sub_field('work_content_button') ?></a>
                  </div>
                  <div class="col-md-6">
                    <img src="<?php the_sub_field('work_right_image') ?>" alt="create-img">
                  </div>
                </div>
              </div>
            </div>
        <?php $i++;
          endwhile;
        endif; ?>
      </div>
    </div>
  </section>

  <!-- smarter area end  -->
  <!-- Trusted_area section strat  -->
  <section class="Trusted_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="trusted">
            <div class="features-heading d-flex justify-content-center text-center  ">
              <div class="features_text trusted_box">
                <p class="section_btn"><?php the_field('testimonial_sub_title') ?></p>
                <h2><?php the_field('testimonial_title') ?></h2>
              </div>
            </div>
            <div class="trusted_text owl-carousel owl-theme " id="mycroues">

              <?php
              if (have_rows('testimonial_repeater')) :
                while (have_rows('testimonial_repeater')) : the_row()
              ?>

                  <div class="masud justify-content-center d-flex">
                    <div class="trusted_text1 text-center ">
                      <span class="quote">“</span>
                      <p><?php the_sub_field('testimonial_description') ?></p>
                      <div class="trusted_img">
                        <img src="<?php the_sub_field('client_image') ?>" loading="lazy" alt="James_Toriff">
                        <h3><?php the_sub_field('client_name') ?></h3>
                        <p><?php the_sub_field('c_designation') ?></p>
                        <?php
                        $rating = get_sub_field('c_ratting');
                        if ($rating == 1) {
                          echo '<i class="fa-solid fa-star"></i>
                                 <i class="fa-regular fa-star"></i>
                                 <i class="fa-regular fa-star"></i>
                                 <i class="fa-regular fa-star"></i>
                                 <i class="fa-regular fa-star"></i>';
                        } elseif ($rating == 2) {
                          echo '<i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                 <i class="fa-regular fa-star"></i>
                                 <i class="fa-regular fa-star"></i>';
                        } elseif ($rating == 3) {
                          echo '<i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-regular fa-star"></i>
                                  <i class="fa-regular fa-star"></i>';
                        } elseif ($rating == 4) {
                          echo '<i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-regular fa-star"></i>';
                        } elseif ($rating == 5) {
                          echo '<i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>';
                        }
                        ?>
                      </div>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Trusted_area section end  -->

  <!-- simple_area section  strat -->
  <section class="simple_area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md12">
          <div class="simple_box">
            <p class="section_btn"><?php the_field('work_sub_title') ?></p>
            <h2><?php the_field('work_title') ?></h2>
            <p><?php the_field('work_description') ?></p>
            <h3><?php the_field('payment_title') ?></h3>
            <div class="simple_crade_img">
              <ul class="d-flex justify-content-between">
                <?php
                if (have_rows('payment_methood')) :
                  while (have_rows('payment_methood')) : the_row();
                ?>
                    <li><img src="<?php the_sub_field('payment_item') ?>"></li>
                <?php endwhile;
                endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <?php
            $pricing_post = new WP_Query(array(
              'post_type' => 'pricing',
              'order' => 'ASC',
            ));
            while ($pricing_post->have_posts()) : $pricing_post->the_post()
            ?>
              <div class="col-md-6">
                <div class="basic">
                  <div class="basic_heading d-flex justify-content-between align-items-center">
                    <h2><?php the_field('package_name') ?></h2>
                    <p class="section_btn"><?php the_field('package_badge') ?></p>
                  </div>
                  <div class="basic_month text-center">
                    <h2><?php the_field('package_price') ?><span>/<?php the_field('package_price_time') ?></span></h2>
                    <a href="#" class="section_btn"><?php the_field('yearly_billed') ?></a>
                  </div>
                  <div class="basic_text text-center">
                    <ul>
                      <?php
                      if (have_rows('pakage_menu')) :
                        while (have_rows('pakage_menu')) : the_row()
                      ?>
                          <li><?php the_sub_field('pakage_item') ?></li>
                      <?php endwhile;
                      endif; ?>
                    </ul>

                    <a href="<?php the_permalink() ?>" class="btn-1"><?php the_field('p_button') ?></a>
                  </div>

                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="trial_area">
    <div class="container">
      <div class="row trial_bg align-items-center">
        <div class="col-lg-6">
          <div class="trial_text">
            <h2><?php echo $get_options['trial-heading'] ?></h2>
            <p><?php echo $get_options['trial-description'] ?></p>
            <div class="subsribe-form">
              <?php
              $shortCode = $get_options['trial-email-box'];
              if ($shortCode == '') :
              ?>
                <form action="#">
                  <input type="email" placeholder="your mail here...">
                  <input type="submit" class="btn-1" value="Get strat">
                </form>
              <?php else : ?>
                <?php do_shortcode('trial_email_shortcode') ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="<?php echo $get_options['trial-right-image']['url'] ?>" loading="lazy" alt="trial-img">
        </div>

      </div>
    </div>
  </section>
  <!--  trial_area section end  -->

  <!-- Blog_area section strat  -->
  <section class="Blog_area section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center">
            <div class="features_text">
              <p class="section_btn"><?php the_field('blog_sub_title') ?></p>
              <h2><?php the_field('blog_title') ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row ">
        <?php
        $blog_post = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 2
        ));
        while ($blog_post->have_posts()) : $blog_post->the_post();
          $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full')
        ?>
          <div class="col-lg-6">
            <div class="blog_boxs">
              <div class="blog_box">
                <img src="<?php echo $image_url ?>" alt="blog-img">
                <div class="blog-button">
                  <?php
                  $get_the_categories = get_the_category(get_the_ID());
                  foreach ($get_the_categories as $category) :
                  ?>
                    <a href="<?php echo get_category_link($category->term_id) ?>" class="btn-1"><?php echo $category->name ?></a>
                  <?php endforeach; ?>
                </div>

              </div>
              <div class="blog_text">
                <p class="blog-p"><?php the_time('F d, Y') ?></p>
                <h2><?php the_title() ?></h2>
                <p><?php echo wp_trim_words(get_the_content(), 15, '...') ?></p>
                <a href="<?php the_permalink() ?>">Read More</a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <!-- Blog_area section end -->


</main>
<?php get_footer() ?>