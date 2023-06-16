<?php
add_shortcode('trile_area', 'trile_section_shortcode');

function trile_section_shortcode($atts, $content)
{

    $get_options = get_option('saasup');

    $trile_atts = shortcode_atts(array(
        'title' => 'Start your free trial today',
        'description' => 'It is a long established fact that a reader will be by the readable when looking at it layout.',
        'right_image' => ''
    ), $atts);
    extract($trile_atts);
    $image_url = wp_get_attachment_image_url($right_image);
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
                                <form>
                                    <input type="email" placeholder="your mail here...">
                                    <input type="submit" class="btn-1" value="Get strat">
                                </form>
                            <?php else : ?>
                                <?php echo do_shortcode($shortCode) ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo $image_url ?>" loading="lazy" alt="trial-img">
                </div>

            </div>
        </div>
    </section>

<?php

    $output = ob_get_clean();
    return $output;
};

if (function_exists('vc_map')) {
    vc_map(array(
        'name' => 'Trial Section',
        'base' => 'trile_area',
        'category' => 'Sassup Elements',
        'icon' => get_template_directory_uri() . '/assets/images/favicon-icon.png',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => 'Section Title',
                'param_name' => 'title',
                'value' => 'Start your free trial today',
            ),
            array(
                'type' => 'textarea',
                'heading' => 'Section Description',
                'param_name' => 'description',
                'value' => 'It is a long established fact that a reader will be by the readable when looking at it layout.',
            ),
            array(
                'type' => 'attach_image',
                'heading' => 'Add Trial Image',
                'param_name' => 'right_image',
            ),
        ),
    ));
};

?>