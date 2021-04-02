<?php

// Register nav menus
register_nav_menus([
    'main-nav-guests' => 'Main Nav Guests',
    'main-nav'        => 'Main Nav',
    'footer-nav'      => 'Footer Nav',
]);


if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug'  => 'theme-settings',
        'redirect'   => false,
        'position'   => '75',
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
        'ID'          => $user_id,
        'admin_color' => 'girl_talk'
    );
    wp_update_user($args);
});

// Adds support for adding custom classes to each menu item (no li)
add_filter('wp_nav_menu', function ($wp_nav_menu, $args) {
    if (isset($args->add_item_class) && $args->add_item_class != '') {
        $wp_nav_menu = preg_replace('/<a /', '<a class="' . $args->add_item_class . '"', $wp_nav_menu);
    }
    return $wp_nav_menu;
}, 1, 2);

// Remove support to automatically create new contacts on flamingo
add_action('flamingo_add_contact', fn() => null);

// Fix for SMTP plugin?
add_action('init', function () {
    delete_option('schema-ActionScheduler_StoreSchema');
});

add_action('init', function () {
    if (isset($_GET['account-verify'])) {
        $data = unserialize(base64_decode($_GET['account-verify']));
        $code = get_user_meta($data['id'], 'verify_token', true);

        if ($code !== $data['code']) {
            wp_safe_redirect('/');
        }

        wp_clear_auth_cookie();
        wp_set_current_user($data['id']);
        wp_set_auth_cookie($data['id']);

        wp_safe_redirect('profile-completion');
    }
});

// Prevents girl user role do login using wp-login.php
add_filter('login_redirect', function ($redirect_to, $requested_redirect_to, $user) {
    if (!isset($user->ID) || user_can($user->ID, 'administrator')) return $redirect_to;

    if (parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH) !== '/login/') {
        wp_clear_auth_cookie();
        wp_safe_redirect('/');
    }
    return $redirect_to;
}, 10, 3);


//add_action('wp_login_failed', function () {
//    wp_redirect(home_url('/login/') . '?login=failed');
//    exit;
//});

//
//add_filter('authenticate', function ($user, $username, $password) {
////    dd($user);
//    dd(parse_url($_SERVER['HTTP_REFERER']));
////    if ($username == "" || $password == "") {
////        wp_redirect(home_url('/login/') . "?login=empty");
////        exit;
////    }
//}, 1, 3);


add_action('wp_logout', function () {
    wp_redirect(home_url());
    exit;
});

add_action('phpmailer_init', function ($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = SMTP_HOST;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->SMTPAuth = true;
    $phpmailer->Username = SMTP_USERNAME;
    $phpmailer->Password = SMTP_PASSWORD;
    $phpmailer->From = 'no-reply@girltalk.com';
    $phpmailer->FromName = 'Girl Talk';
});

add_filter('wp_mail_content_type', function () {
    return "text/html";
});
