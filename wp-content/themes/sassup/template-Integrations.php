<?php
// Template Name: Integrations Page Tempalte 
get_header();
$get_options = get_option('saasup')
?>
<main>
  <section class="featur_heading_area section_padding">
    <div class="container">
      <div class="row Integrations_bottom">
        <div class="col-12">
          <div class="features-heading d-flex justify-content-center text-center">
            <div class="features_text">
              <h2><?php the_field('page_title') ?></h2>
              <p><?php the_field('page_description') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $intergration = new WP_Query(array(
          'post_type' => 'social',
          'order' => 'ASC',
          'posts_per_page' => -1,
        ));
        while ($intergration->have_posts()) : $intergration->the_post()
        ?>
          <div class="col-lg-4 col-md-6  ">
            <div class="social_icon">
              <div class="social_img d-flex align-items-center">
                <div class="social social-bg1" style="background:<?php the_field('icon_background_color') ?> ;">
                  <a href="#"><i class="<?php the_field('socail_icon') ?>"></i></a>
                </div>
                <div class="social_text">
                  <h3><?php the_field('social_platfrom_name') ?></h3>
                  <a href="javascript:void(0)"><?php the_field('platfrom_sub_title') ?></a>
                </div>
              </div>
              <p><?php the_field('Sicial_description') ?></p>
              <a href="<?php the_permalink() ?>" class="social-a">View Integration</a>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata() ?>
      </div>
    </div>
  </section>


  <!--  trial_area section strat  -->
  <section class="trial_area trial_area_2 section_padding">
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
</main>
<?php get_footer() ?>