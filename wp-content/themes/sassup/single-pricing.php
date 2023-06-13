<?php get_header() ?>
<main>
  <section class="advance_area section_padding">
    <?php while (have_posts()) : the_post() ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="advance-right">
              <h2><?php the_title() ?> Plan</h2>
              <p><?php the_field('short_description') ?></p>
              <ul>
                <?php
                if (have_rows('pakage_menu')) :
                  while (have_rows('pakage_menu')) : the_row();
                ?>
                    <li><i class="fa-regular fa-circle-check"></i><?php the_sub_field('pakage_item') ?></li>
                <?php endwhile;
                endif ?>
              </ul>
            </div>
            <div class="strandrat">
              <?php the_field('full_descriptions') ?>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="advance-left">
              <h3>Choose your plan duration</h3>
              <p>Lorem ipsum dolor sit amet consectet udipiscing elit terdum</p>
              <form action="POST">

                <select name="" id="" class="form-select">
                  <option value="1">select plan Duration</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </form>
              <h2><?php the_field('package_price') ?><span>/ <?php the_field('package_price_time') ?></span> </h2>
              <a href="#" class="btn-2 bk">Add to Cart</a>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </section>
</main>
<?php get_footer() ?>