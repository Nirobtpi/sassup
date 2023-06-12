<?php
$get_options = get_option('saasup');
?>
<footer>
    <!-- place footer here -->
    <section class="footer_area">
        <div class="container">
            <div class="row footer-padding">
                <div class="col-xl-4 col-lg-6 order-lg-1 order-xl-1 ">
                    <div class="footer_text-1">
                        <img src="<?php echo $get_options['f_logo']['url'] ?>" alt="footer-logo">
                        <p><?php echo $get_options['footer_des'] ?></p>
                        <?php

                        $footer_email_phone = $get_options['footer-email-phone'];
                        foreach ($footer_email_phone as $footer_item) :
                        ?>
                            <div class="footer_email01 d-flex">
                                <a href="#"><i class="<?php echo $footer_item['footer_icon'] ?>"></i></a>
                                <ul class="footer_email">
                                    <?php foreach ($footer_item['footer-item-value-repeater'] as $footer_EP) : ?>
                                        <li><a href="
                                        <?php
                                        if (is_numeric($footer_EP['footer-item'])) {
                                            echo 'tel:' . $footer_EP['footer-item'];
                                        } else {
                                            echo 'mailto:' . $footer_EP['footer-item'];
                                        } ?>"><?php echo $footer_EP['footer-item'] ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 order-lg-3 order-xl-2 ">
                    <?php dynamic_sidebar('footer_widget_1') ?>
                </div>
                <div class="col-xl-2 col-lg-6 order-lg-4 order-xl-3 ">
                    <?php dynamic_sidebar('footer_widget_2') ?>
                </div>
                <div class="col-xl-4 col-lg-6 order-lg-2 order-xl-4 ">
                    <?php dynamic_sidebar('footer_widget_3') ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copyright d-flex justify-content-between">
                        <p><?php echo $get_options['footer-copyright'] ?></p>
                        <div class="footer-icon">
                            <ul class="d-flex">
                                <?php
                                $get_social_icon = $get_options['social-icon-repeater'];
                                foreach ($get_social_icon as $icon) :
                                ?>
                                    <li><a href="<?php echo $icon['url'] ?>"><i class="<?php echo $icon['social_icon'] ?>"></i></a></li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</footer>

<?php wp_footer() ?>
</body>

</html>