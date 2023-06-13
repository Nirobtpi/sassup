<?php
// Control core classes for avoid errors

if (class_exists('CSF')) {
    $prefix = 'saasup';

    CSF::createOptions($prefix, array(
        'menu_title' => 'CSF Theme Options',
        'menu_slug'  => 'theme-options',
        'framework_title' => 'Saasup - Theme Options',
        'menu_icon' => 'dashicons-image-filter'
    ));
    CSF::createSection($prefix, array(
        'title' => 'Header Options',
        'id' => 'header-options',
        'icon' => 'fas fa-table',
    ));
    // top header options 
    CSF::createSection($prefix, array(
        'title' => 'Header Top',
        'id' => 'header-top',
        'icon' => 'fab fa-facebook',
        'parent' => 'header-options',
        'fields' => array(
            array(
                'title' => 'Favicon',
                'type' => 'media',
                'id' => 'fav_icon',
            ),
            array(
                'title' => 'Sing In Button Text',
                'type' => 'text',
                'id' => 'singin-button-text',
                'default' => 'Sing In'
            ),
            array(
                'title' => 'Sing In Button Url',
                'type' => 'text',
                'id' => 'singin-button-Url',
                'default' => '#'
            ),
        )
    ));
    // header logo options 
    CSF::createSection($prefix, array(
        'title' => 'Header Logo',
        'id' => 'header_logo',
        'icon' => 'fab fa-facebook',
        'parent' => 'header-options',
        'fields' => array(
            array(
                'title' => 'Header logo',
                'type' => 'media',
                'id' => 'logo-uplode',
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/Logo.svg',
                )
            ),
            array(
                'title' => 'Logo Text',
                'type'  => 'text',
                'id'  => 'logo_text',
                'default' => 'Coder It Solution'
            )
        ),
    ));

    // footer 
    CSF::createSection($prefix, array(
        'title' => 'Footer Options',
        'id' => 'footer-options',
        'icon' => 'fab fa-twitter',
    ));
    CSF::createSection($prefix, array(
        'title' => "Footer Logo",
        'id' => 'footer_logo',
        'parent' => 'footer-options',
        'fields' => array(
            array(
                'title' => 'Footer Logo',
                'id' => 'f_logo',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/Logo.svg',
                )
            ),
            array(
                'title' => 'Footer Description',
                'id' => 'footer_des',
                'type' => 'textarea',
                'default' => 'It is a long established fact that from will be distracted by the readable from when looking.',
            ),
            // footer email Phone
            array(
                'title' => 'Add Footer Email & Phone',
                'id' => 'footer-email-phone',
                'type' => 'repeater',
                'fields' => array(
                    array(
                        'id' => 'footer_icon',
                        'title' => 'Select Iocn',
                        'type' => 'icon',
                    ),
                    array(
                        'title' => 'Add Email & Phone',
                        'id' => 'footer-item-value-repeater',
                        'type' => 'repeater',
                        'fields' => array(
                            array(
                                'id' => 'footer-item',
                                'title' => 'Add Item',
                                'type' => 'text',
                                'default' => 'info@gmail.com',
                            ),
                        )
                    )
                )
            ),
            array(
                'id' => 'footer-copyright',
                'title' => 'Footer Copyright',
                'type' => 'text',
                'default' => 'Copyright © CoderIt | Designed by Victorflow - Powered by Webflow'
            ),
            array(
                'id' => 'social-icon-repeater',
                'title' => 'Social Icon',
                'type' => 'repeater',
                'fields' => array(
                    array(
                        'id' => 'social_icon',
                        'title' => 'select a Icon',
                        'type' => 'icon',
                    ),
                    array(
                        'id' => 'url',
                        'title' => 'Add Url',
                        'type' => 'text',
                    ),
                )
            )
        )
    ));

    // BLog Page Options 
    CSF::createSection($prefix, array(
        'title' => 'BLog Page Options',
        'id'  => 'blog-page-options',
        'icon' => 'fas fa-blog'
    ));
    CSF::createSection($prefix, array(
        'title' => 'Blog Options',
        'id'  => 'blog-options',
        'icon' => 'fab fa-blogger-b',
        'parent' => 'blog-page-options',
        'fields' => array(

            array(
                'title' => 'Blog Heading',
                'id' => 'blog-heading',
                'type' => 'text',
                'default' => 'News & Articles'
            ),
            array(
                'title' => 'Blog Description',
                'id' => 'blog-description',
                'type' => 'textarea',
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene.'
            ),
        )
    ));
    // Home Page Theme Options 
    CSF::createSection($prefix, array(
        'title' => 'Home Page Options',
        'id' => 'home-page-options',
        'icon' => 'fas fa-home',
    ));
    CSF::createSection($prefix, array(
        'title' => 'Heding Option',
        'id' => 'heading-option',
        'parent' => 'home-page-options',
        'fields' => array(
            array(
                'title' => 'Bannger Heding Text',
                'id' => 'banner-heding-text',
                'type' => 'text',
                'default' => 'Build your audience and grow your brand',
            ),
            array(
                'title' => 'Banner Descriptions',
                'id' => 'banner-description',
                'type' => 'textarea',
                'default' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra sene',
            ),
            array(
                'title' => 'Banner Button Type 1',
                'id' => 'banner-button-type-1',
                'type' => 'text',
                'default' => 'Get Started',
            ),
            array(
                'title' => 'Banner Button Type 1 Url',
                'id' => 'banner-button-type-1-url',
                'type' => 'text',
                'default' => '#',
            ),
            array(
                'title' => 'Banner Button Type 2',
                'id' => 'banner-button-type-2',
                'type' => 'text',
                'default' => 'Watch Video',
            ),
            array(
                'title' => 'Banner Button Type 2 Url',
                'id' => 'banner-button-type-2-url',
                'type' => 'text',
                'default' => 'https://www.youtube.com/watch?v=oOkGmK3_Hdg',
            ),
            array(
                'title' => 'Banner Right Photo',
                'id' => 'banner-right-photo',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/Image22.png',
                )
            )
        )
    ));
    CSF::createSection($prefix, array(
        'title' => 'Trial Section',
        'parent' => 'home-page-options',
        'id' => 'trial-section',
        'fields' => array(
            array(
                'title' => 'Trial Heading',
                'id' => 'trial-heading',
                'type' => 'text',
                'default' => 'Start your free trial today'
            ),
            array(
                'title' => 'Trial Description',
                'id' => 'trial-description',
                'type' => 'textarea',
                'default' => 'It is a long established fact that a reader will be by the readable when looking at it layout.'
            ),
            array(
                'title' => 'Trial Email Box',
                'id' => 'trial-email-box',
                'type' => 'text',
            ),
            array(
                'title' => 'Trial Right Image',
                'id' => 'trial-right-image',
                'type' => 'media',
                'default' => array(
                    'url' => get_template_directory_uri() . '/assets/images/trial-img/trial-img.png'
                )
            ),
        )
    ));
};
