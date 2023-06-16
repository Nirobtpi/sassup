<?php

add_shortcode('contact_faq', 'contact_faq_shortcode');


function contact_faq_shortcode($atts, $content)
{
    $faq_atts = shortcode_atts(array(
        'title' => 'Frequently Asked Questions',
        'faqs' => '',
    ), $atts);
    extract($faq_atts);
    $faqs = vc_param_group_parse_atts($faqs);
    ob_start();

?>
    <section class="Question">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="Question_head text-center">
                        <h2><?php echo $title; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="Question_discription">
                        <?php
                        $i = 1;
                        foreach ($faqs as $faq) :
                        ?>
                            <div class="Question-button">
                                <div class="Question99 d-flex justify-content-between align-items-center">
                                    <h3><?php echo $i;
                                        $i++;  ?>. <?php echo $faq['Faq_question'] ?></h3>
                                    <div class="Question-icon"><i class="fas fa-angle-down arrow"></i></div>
                                </div>
                                <p class="up"><?php echo $faq['Faq_answer'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
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
        'name' => 'Faq Section',
        'base' => 'contact_faq',
        'category' => 'Sassup Elements',
        'icon' => get_template_directory_uri() . '/assets/images/favicon-icon.png',
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => 'Section Title',
                'param_name' => 'title',
                'value' => 'Frequently Asked Questions',
            ),
            array(
                'type' => 'param_group',
                'param_name' => 'faqs',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => 'FAQ Question :',
                        'param_name' => 'Faq_question',
                        'value' => 'Where is my order? Quisque molestie'
                    ),
                    array(
                        'type' => 'textarea',
                        'heading' => 'FAQ Answer :',
                        'param_name' => 'Faq_answer',
                        'value' => 'The are going to use a passage of Lorem Ipsum, you need to be sure tdembarrassing hidden in the middle of text. All the Lorem generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. ',
                    ),
                )
            )
        ),
    ));
};



?>