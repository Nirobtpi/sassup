<?php
$get_coderframework = get_option('saasup');
?>

<!doctype html>
<html <?php language_attributes() ?>>

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
    <header class="About_header ">
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
                                'menu_class'=>'d-flex',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                            )) ?>
                        </nav>
                        <div class="menu-button">
                            <a href="#" class="btn-1">Sing In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- end header_area  -->