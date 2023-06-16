<?php
add_shortcode('contact_address', 'contact_address_shortcode');

function contact_address_shortcode($atts, $content)
{

    $contact_adds = shortcode_atts(array(
        'title'=> 'We help small businesses with big hearts make meaningful hires'
    ), $atts);
    extract($contact_adds);
    ob_start()

?>

    <section class="hearts_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="business-text">
                        <h2><?php echo $title ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="location text-center">
                        <a href="#" class="location-icon "><i class="fa-solid fa-location-dot"></i></a>
                        <h4>Paris</h4>
                        <p>19 Maypole Crescent</p>
                        <p>Ilford,L62UJ</p>
                        <a href="#" class="location-phone  ">(415) 870 – 3204</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="location text-center">
                        <a href="#" class="location-icon location-icon98"><i class="fa-solid fa-location-dot"></i></a>
                        <h4>New York</h4>
                        <p>19 Maypole Crescent</p>
                        <p>Ilford,L62UJ</p>
                        <a href="#" class="location-phone location-phone98">(415) 870 – 3204</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="location text-center">
                        <a href="#" class="location-icon location-icon99"><i class="fa-solid fa-location-dot"></i></a>
                        <h4>Hanoi</h4>
                        <p>19 Maypole Crescent</p>
                        <p>Ilford,L62UJ</p>
                        <a href="#" class="location-phone location-phone99">(415) 870 – 3204</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
    $output = ob_get_clean();
    return $output;
}

?>