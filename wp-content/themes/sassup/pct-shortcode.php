<?php
// add_shortcode('nirob', 'nirob_shortcode');
// function nirob_shortcode()
// {
//     echo "Hello, I'm Nirob";
// }
// add_shortcode('h1', 'h1_shortcode');
// function h1_shortcode($atts, $content)
// {
//     echo "<h1>" . $content . "</h1>";
// }
// add_shortcode('saba', 'saba_shortcode');
// function saba_shortcode($atts, $content)
// {
//     echo "<p>" . $content . "</p>";
// }


add_shortcode('features_section', 'features_section_shortcode');
function features_section_shortcode($atts, $content)
{
    $features_atts = shortcode_atts(array(
        'sub_title' => 'Features',
        'title' => 'New Powerful features to boost your productivity',
        'count' => 3,
    ), $atts);
    extract($features_atts);
    ob_start();
?>

    <section class="features_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-heading d-flex justify-content-center text-center">
                        <div class="features_text">
                            <p class="section_btn"><?php echo $sub_title ?></p>
                            <h2><?php echo $title ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $get_fitures_item = new WP_Query(array(
                    'post_type' => 'features',
                    'posts_per_page' => $count,
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
<?php

    $output = ob_get_clean();
    return $output;
}
add_shortcode('trial', 'trial_section');
function trial_section($atts, $content)
{
    $trial = shortcode_atts(array(
        'title' => 'Start your free trial today',
        'description' => 'It is a long established fact that a reader will be by the readable when looking at it layout.'
    ), $atts);
    extract($trial);
    $get_options = get_option('saasup');
    ob_start();
?>

    <section class="trial_area">
        <div class="container">
            <div class="row trial_bg align-items-center">
                <div class="col-lg-6">
                    <div class="trial_text">
                        <h2><?php echo $title ?></h2>
                        <p><?php echo $description ?></p>
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

<?php
    $output = ob_get_clean();
    return $output;
}




?>