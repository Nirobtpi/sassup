<?php
add_shortcode('bunesiness', 'bunesiness_shortcode');

function bunesiness_shortcode($atts, $content)
{

    $bunesiness_atts = shortcode_atts(array(
        'title' => 'We help small businesses with big hearts make meaningful hires',
        'bunesiness_item' => ''
    ), $atts);
    extract($bunesiness_atts);
    $items = vc_param_group_parse_atts($bunesiness_item);
    ob_start();

?>

    <section class="hearts_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="business-text">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($items as $item) : ?>
                    <div class="col-md-4">
                        <div class="location text-center">
                            <a href="#" class="location-icon " style="background:<?php echo $item['bg_color'] ?>; color:<?php echo $item['icon_color'] ?>"><i class="<?php echo $item['icon_name'] ?>"></i></a>
                            <h4><?php echo $item['city_name'] ?></h4>
                            <p><?php echo $item['short_description'] ?></p>
                            <a href="#" class="location-phone" style="background:<?php echo $item['pbg_color'] ?>; color:<?php echo $item['ph_color'] ?>">(415) 870 – 3204</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php
    $output = ob_get_clean();
    return $output;
}


if (function_exists('vc_map')) {
    vc_map(array(
        'name' => 'Businesses Item',
        'base' => 'bunesiness',
        'category' => 'Sassup Elements',
        'icon' => get_template_directory_uri() . '/assets/images/favicon-icon.png',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => 'Section Title :',
                'param_name' => 'title',
                'value' => 'We help small businesses with big hearts make meaningful hires'
            ),
            array(
                'type' => 'param_group',
                'param_name' => 'bunesiness_item',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => 'Icon :',
                        'value' => 'fa-solid fa-location-dot',
                        'param_name' => 'icon_name'
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => 'Icon Color :',
                        'param_name' => 'icon_color',
                        'value' => '#C1749E',
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => 'Bg Color :',
                        'param_name' => 'bg_color',
                        'value' => '#FAD5E9',
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => 'City Name :',
                        'param_name' => 'city_name',
                        'value' => 'Paris',
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => 'Short Description :',
                        'param_name' => 'short_description',
                        'value' => '19 Maypole Crescent Ilford,L62UJ',
                    ),
                    array(
                        'type' => 'textfield',
                        'heading' => 'Phone Number :',
                        'param_name' => 'phone_number',
                        'value' => '(415) 870 – 3204',
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => 'Phone Number Color :',
                        'param_name' => 'ph_color',
                        'value' => '#c1749e',
                    ),
                    array(
                        'type' => 'colorpicker',
                        'heading' => 'Phone Number Bg :',
                        'param_name' => 'pbg_color',
                        'value' => '#FAD5E9',
                    ),
                )
            ),
        ),
    ));
};


?>