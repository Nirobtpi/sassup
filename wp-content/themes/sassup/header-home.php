<?php
$get_coderframework = get_option('saasup');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo bloginfo('description') ?>">

    <!-- favicon-icon  -->
    <link rel="shortcut icon" href="<?php echo $get_coderframework['fav_icon']['url'] ?>" type="image/x-icon">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<body>
    <!-- strat header_area  -->
    <header class="header_area section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-3 ">
                    <div class="logo">
                        <a href="<?php home_url() ?>">
                            <img src="<?php echo $get_coderframework['logo-uplode']['url'] ?>" loading="lazy" alt="saasup_logo">
                        </a>
                        <div class="menu-icon">
                            <a href="#" class="btn-2">Sing In</a>

                            <a href="#" class="menu-icon1"><i class="fa-solid fa-bars-staggered"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="menus d-flex justify-content-end align-items-center">
                        <nav class="menu">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'header_menu',
                                'menu_class' => 'd-flex',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                            )) ?>
                        </nav>
                        <div class="menu-button">
                            <a href="<?php echo $get_coderframework['singin-button-Url']  ?>" class="btn-1"><?php echo $get_coderframework['singin-button-text']  ?></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row benner_area">
                <div class="col-lg-6">
                    <div class="bennar_conteat">
                        <h1><?php echo $get_coderframework['banner-heding-text'] ?></h1>
                        <p><?php echo $get_coderframework['banner-description'] ?></p>
                        <ul class=" d-flex">
                            <li><a class=" btn-2" href="<?php echo $get_coderframework['banner-button-type-1-url'] ?>"><?php echo $get_coderframework['banner-button-type-1'] ?></a></li>
                            <li><a class=" btn-3 d-flex align-items-center" id="popupVideo" href="<?php echo $get_coderframework['banner-button-type-2-url'] ?>"><?php echo $get_coderframework['banner-button-type-2'] ?> <i class="fa-solid fa-circle-play"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bennar-img">
                        <img src="<?php echo $get_coderframework['banner-right-photo']['url'] ?>" loading="lazy" alt="">
                    </div>
                </div>
            </div>

        </div>

        </div>

    </header>
    <!-- end header_area  -->