<?php

//function to create Upload Logo field
function customizer_upload_logo($wp_customize) {
    $wp_customize->add_setting('your_theme_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
    array(
        'label' => 'Upload Logo',
        'section' => 'title_tagline',
        'settings' => 'your_theme_logo',
    ) ) );
}
add_action('customize_register', 'customizer_upload_logo');

//function to create Upload Alt Logo field
function customizer_upload_logo_alt($wp_customize) {
    $wp_customize->add_setting('your_theme_logo_alt');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo_alt',
    array(
        'label' => 'Upload White Background Logo',
        'section' => 'title_tagline',
        'settings' => 'your_theme_logo_alt',
    ) ) );
}
add_action('customize_register', 'customizer_upload_logo_alt');

//function to create social fields

function add_social_section($wp_customize) {
   $wp_customize->add_section( 'social' , array(
    'title'      => __('Social'),
    'priority'   => 30,
) );
}
add_action( 'customize_register', 'add_social_section' );

function customizer_upload_fb($wp_customize) {
    $wp_customize->add_setting('your_facebook');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_facebook',
    array(
        'label' => 'Upload Facebook Icon',
        'section' => 'social',
        'settings' => 'your_facebook',
    ) ) );
}
add_action('customize_register', 'customizer_upload_fb');

function customizer_upload_insta($wp_customize) {
    $wp_customize->add_setting('your_insta');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_insta',
    array(
        'label' => 'Upload Instagram Icon',
        'section' => 'social',
        'settings' => 'your_insta',
    ) ) );
}
add_action('customize_register', 'customizer_upload_insta');

function customizer_upload_linkedIn($wp_customize) {
    $wp_customize->add_setting('your_linkedIn');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_linkedIn',
    array(
        'label' => 'Upload LinkedIn Icon',
        'section' => 'social',
        'settings' => 'your_linkedIn',
    ) ) );
}
add_action('customize_register', 'customizer_upload_linkedIn');

function customizer_fb_link($wp_customize) {
    $wp_customize->add_setting('your_fb_link');
    $wp_customize->add_control(  'your_fb_link',
    array(
        'label' => 'Your Facebook Page URL',
        'section' => 'social',
        'settings' => 'your_fb_link',
    ) );
}
add_action('customize_register', 'customizer_fb_link');

function customizer_insta_link($wp_customize) {
    $wp_customize->add_setting('your_insta_link');
    $wp_customize->add_control(  'your_insta_link',
    array(
        'label' => 'Your Instagram Page URL',
        'section' => 'social',
        'settings' => 'your_insta_link',
    ) );
}
add_action('customize_register', 'customizer_insta_link');

function customizer_linkedIn_link($wp_customize) {
    $wp_customize->add_setting('your_linkedIn_link');
    $wp_customize->add_control(  'your_linkedIn_link',
    array(
        'label' => 'Your LinkedIn Page URL',
        'section' => 'social',
        'settings' => 'your_linkedIn_link',
    ) );
}
add_action('customize_register', 'customizer_linkedIn_link');


// Functions to create the hero editor

function add_hero_section($wp_customize) {
   $wp_customize->add_section( 'heros' , array(
    'title'      => __('Heros'),
    'priority'   => 30,
) );
}
add_action( 'customize_register', 'add_hero_section' );

function customizer_upload_header($wp_customize) {
    $wp_customize->add_setting('your_theme_header');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_header',
    array(
        'label' => 'Upload Homepage Hero',
        'section' => 'heros',
        'settings' => 'your_theme_header',
    ) ) );
}
add_action('customize_register', 'customizer_upload_header');

function customizer_upload_header_menu($wp_customize) {
    $wp_customize->add_setting('your_theme_header_menu');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_header_menu',
    array(
        'label' => 'Upload Menu Page Hero',
        'section' => 'heros',
        'settings' => 'your_theme_header_menu',
    ) ) );
}
add_action('customize_register', 'customizer_upload_header_menu');

function customizer_upload_header_story($wp_customize) {
    $wp_customize->add_setting('your_theme_header_story');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_header_story',
    array(
        'label' => 'Upload Story Page Hero',
        'section' => 'heros',
        'settings' => 'your_theme_header_story',
    ) ) );
}
add_action('customize_register', 'customizer_upload_header_story');

//function to create Primary Color field
function customizer_primary_color($wp_customize) {
    $wp_customize->add_setting('your_theme_color');
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'your_theme_color',
    array(
        'label' => 'Primary color',
        'section' => 'colors',
        'settings' => 'your_theme_color',
    ) ) );
}
//add_action('customize_register', 'customizer_primary_color');

//function to create Text field
function customizer_text($wp_customize) {
    $wp_customize->add_setting('your_theme_text');
    $wp_customize->add_control(  'your_theme_text',
    array(
        'label' => 'Text Setting',
        'section' => 'sections',
        'settings' => 'your_theme_text',
    ) );
}
//add_action('customize_register', 'customizer_text');

//function to create new section in the customizer
function add_section($wp_customize) {
   $wp_customize->add_section( 'sections' , array(
    'title'      => __('Sections'),
    'priority'   => 30,
) );
}
//add_action( 'customize_register', 'add_section' );