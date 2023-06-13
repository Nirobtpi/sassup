<?php get_header() ?>
  <main>
      <section class="license_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center licenses_features">
                      <div class="features_text">
                         
                        <h2><?php the_title() ?></h2>
                         
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <section class="licenses-discription section_padding"  >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="licenses-box">
                      <?php while(have_posts()): the_post() ?>
                      <div class="licenses-text1 licenses">
                           <?php the_content() ?>
                      </div>
                      <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
      </section>
  </main>
<?php get_footer() ?>