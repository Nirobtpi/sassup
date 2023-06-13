<?php get_header() ?>
<main>
  <section class="developer_area section_padding">
    <?php while (have_posts()) : the_post() ?>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="features-heading d-flex justify-content-center text-center  ">
              <div class="features_text1">
                <h2>Web Designer & Developer</h2>
                <ul class="d-flex align-items-center justify-content-center">
                  <li>
                    <p>San Francisco, CA &nbsp; | &nbsp; </p>
                  </li>
                  <li>
                    <p class="develop-link">Full Time </p>
                  </li>
                </ul>
                <a href="<?php the_field('apply_url') ?>" class="btn-2">Apply Now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="developer_noties">
              <div class="developer_date">
                <h2>About the role</h2>
                <p> <b>Posted</b> : <?php the_time('d F, Y') ?></p>
              </div>
              <div class="developer-text1">
                <?php the_field('job_detalis') ?>
              </div>

              <div class="web-contact">
                <?php the_field('contact_detalis') ?>

                <a href="<?php the_field('button_url') ?>" class="btn-1"><?php the_field('button_text') ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </section>
  <!-- platform area strat -->
</main>
<?php get_footer() ?>