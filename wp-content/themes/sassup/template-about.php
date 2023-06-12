<?php
// Template Name:About Page Template 
get_header()
?>
<main>
  <section class="about_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center about_features">
            <div class="features_text">
              <h2><?php the_field('about_page_heading') ?></h2>
              <p><?php the_field('about_page_descriptions') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row about-img-box">
        <div class="col-md-8">
          <div class="about-img">
            <img src="<?php the_field('about_left_image') ?>" alt="about-img">
          </div>
        </div>
        <div class="col-md-4">
          <div class="about-img1">
            <img src="<?php the_field('about_right_image') ?>" alt="about-img">
          </div>
        </div>
      </div>
      <div class="row about_text_box">
        <div class="col-md-4">
          <div class="about-text">
            <h2><?php the_field('about_sub_heading') ?></h2>
          </div>
        </div>
        <div class="col-md-8">
          <div class="about-discrition">
            <?php the_field('about_company__sub_descriptions') ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="counter-box d-flex justify-content-between text-center">
            <?php
            if (have_rows('counter_repeater')) :
              while (have_rows('counter_repeater')) : the_row();
            ?>
                <div class="counter-text text-center">
                  <div class="counter-h text-center">
                    <h2 class="counter1"><?php echo  get_sub_field('count_number') ?> </h2>
                    <h2 class="ck"><?php the_sub_field('counter_text') ?></h2>
                  </div>
                  <p><?php the_sub_field('client_say') ?></p>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-6">
          <div class="Mission">
            <h2><?php the_field('mission_title') ?></h2>
            <?php the_field('mission_description') ?>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="mission_img">
            <img src="<?php the_field('mission_right_image') ?>" alt="about-img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="Our_values ">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center features_value">
            <div class="features_text">
              <p class="section_btn"><?php the_field('values_sub_title') ?></p>
              <h2><?php the_field('values_title') ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php

        if (have_rows('values_item')) :
          while (have_rows('values_item')) : the_row()
        ?>
            <div class="col-xl-6">
              <div class="value_item">
                <div class="img">
                  <img src="<?php the_sub_field('values_image') ?>" alt="about-img">
                </div>
                <div class="value_text">
                  <h3><?php the_sub_field('values_item_title') ?></h3>
                  <p><?php the_sub_field('values_item_description') ?></p>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </section>

  <section class="join_area">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="join_heading sticky-top">
            <a href="#" class="btn-1"><?php the_field('career_sub_title') ?></a>
            <h3><?php the_field('career_title') ?></h3>
          </div>
        </div>
        <div class="col-md-8">
          <?php
          $job_post = new WP_Query(array(
            'post_type' => 'jobs',
            'order' => 'ASC',
            'posts_per_page' => -1,
          ));
          while ($job_post->have_posts()) : $job_post->the_post();
          ?>
            <div class="web-desgn">
              <h3><?php the_title() ?></h3>
              <ul class="d-flex align-items-center">
                <li><a href="#"><?php the_field('company_name') ?></a></li>
                <li><a href="#" class="web-link"><?php the_field('job_time') ?></a></li>
              </ul>
              <?php the_field('job_descriptions') ?>
              <a href="#" class="btn-2"><?php the_field('button_text') ?></a>
            </div>
          <?php endwhile;
          wp_reset_postdata() ?>

          <div class="web-desgn text-center web-desgn1 ">
            <h3><?php the_field('career_position_title') ?></h3>
            <p class="web-p"><?php the_field('career_position_description') ?></p>
            <a href="<?php the_field('career_position_button__url') ?>" class="btn-2 web-link2"><?php the_field('career_position_button') ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>