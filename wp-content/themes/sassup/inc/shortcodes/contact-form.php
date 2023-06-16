<?php
add_shortcode('contact_form', 'contact_form_shortcode');
function contact_form_shortcode($atts, $content)
{

    $contact_form_atts = shortcode_atts(array(
        'title' => 'Get in touch today!',
        'email' => 'saasup@gmail.com',
        'phone' => '+001 6547 6589',
    ), $atts);
    extract($contact_form_atts);
    ob_start()

?>

    <section class="contact_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact_head ">
                        <div class="contact-text  ">
                            <h2><?php echo $title ?></h2>
                        </div>
                        <div class="contact-phone">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-right">
                                        <div class="contact-icon d-flex align-items-center  ">
                                            <i class="fa-solid fa-envelope"></i>
                                            <p>Mail Us</p>
                                        </div>
                                        <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-left">
                                        <div class="contact-icon">
                                            <i class="fa-solid fa-phone-volume"></i>
                                            <p>Call Us</p>
                                        </div>
                                        <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($content == '') : ?>
                            <div class="contact-form">
                                <div>
                                    <div class="row g-5">
                                        <div class="col-md-6">
                                            <div class="input-text">
                                                <label for="name">Full Name*</label>
                                                <input type="text" id="name" placeholder="John David">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-text">
                                                <label for="email">Your email*</label>
                                                <input type="email" id="email" placeholder="example@yourmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-text">
                                                <label for="company">Company*</label>
                                                <input type="text" id="company" placeholder="yourcompany name here">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-text">
                                                <label for="subject">Subject*</label>
                                                <input type="text" id="subject" placeholder="How can we Help">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-text">
                                                <label for="message">Message*</label>
                                                <textarea name="message" id="message" cols="30" rows="7" placeholder="Hello there,I would like to talk about how to..."></textarea>
                                            </div>
                                        </div>
                                        <div class="contact-button text-center">
                                            <a href="#" class="btn-1">Send Message</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="contact-form">
                                <?php echo do_shortcode($content)  ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
    </section>
<?php

    $output = ob_get_clean();
    return $output;
}

if (function_exists('vc_map')) {

    vc_map(array(
        'name' => 'Contact Form',
        'base' => 'contact_form',
        'category' => 'Sassup Elements',
        'icon' => get_template_directory_uri() . '/assets/images/favicon-icon.png',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => 'Section Title',
                'param_name' => 'title',
                'value' => 'Get in touch today!'
            ),
            array(
                'type' => 'textfield',
                'heading' => 'Email Address:',
                'param_name' => 'email',
                'value' => 'saasup@gmail.com'
            ),
            array(
                'type' => 'textfield',
                'heading' => 'Phone Number:',
                'param_name' => 'phone',
                'value' => '+001 6547 6589'
            ),
            array(
                'type' => 'textarea_html',
                'heading' => 'Form ShortCode:',
                'param_name' => 'content',
            ),

        )
    ));
};

?>