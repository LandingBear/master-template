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
//add_action('customize_register', 'customizer_upload_logo');

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