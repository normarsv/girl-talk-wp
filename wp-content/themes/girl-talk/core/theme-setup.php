<?php

// Register nav menus
register_nav_menus([
    'main-nav' => 'Main Nav',
    'footer-nav' => 'Footer Nav'
]);


if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'redirect' => false,
        'position' => '75',
    ]);
}

add_action('admin_init', function () {
    wp_admin_css_color('girl_talk', __('Girl Talk'),
        get_template_directory_uri() . '/core/cms-scheme/girl.css',
        ['#1d2327', '#2c3338', '#70585a', '#ba7a81']
    );
});

add_action('user_register', function ($user_id) {
    $args = array(
        'ID' => $user_id,
        'admin_color' => 'girl_talk'
    );
    wp_update_user($args);
});

// add_editor_style(getEditorStyleSheet());

// add_filter('mce_buttons_2', function ($buttons) {
//     array_unshift($buttons, 'styleselect');
//     return $buttons;
// });

// add_filter('tiny_mce_before_init', function ($init_array) {
//     $style_formats = [
//         [
//             'title' => 'Main Title',
//             'block' => 'h1',
//             'classes' => 'main-title',
//             'wrapper' => false,
//         ],
//         [
//             'title' => 'Secondary Title',
//             'block' => 'h2',
//             'classes' => 'secondary-title',
//             'wrapper' => false,
//         ],
//         [
//             'title' => 'Content Title',
//             'block' => 'h2',
//             'classes' => 'content-title',
//             'wrapper' => false,
//         ],
//         [
//             'title' => 'Content Caption',
//             'block' => 'div',
//             'classes' => 'content-caption',
//             'wrapper' => false,
//         ],
//         [
//             'title' => 'CTA Button',
//             'block' => 'a',
//             'classes' => 'cta default',
//             'wrapper' => false,
//         ],
//     ];

//     $init_array['style_formats'] = json_encode($style_formats);

//     return $init_array;
// });