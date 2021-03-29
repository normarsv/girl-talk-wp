<?php

add_action('wp_ajax_nopriv_newsletter_submit', 'newsletter_submit');
add_action('wp_ajax_newsletter_submit', 'newsletter_submit');

function newsletter_submit()
{
    $email = $_POST['email'];
    if (($email && $email != '') && class_exists('Flamingo_Inbound_Message')) {
        Flamingo_Inbound_Message::add([
            'channel' => '',
            'status' => '',
            'subject' => 'New newsletter user <' . $email . '>',
            'from' => $email,
            'from_name' => $email,
            'from_email' => '',
            'fields' => [],
            'meta' => [],
            'akismet' => [],
            'recaptcha' => [],
            'spam' => false,
            'spam_log' => [],
            'consent' => [],
            'timestamp' => null,
            'posted_data_hash' => null,
        ]);
    }
    echo wp_json_encode(['status' => true]);
    wp_die();
}


add_action('wp_ajax_nopriv_register', 'register_form');
add_action('wp_ajax_register', 'register_form');

function register_form()
{
    $email = sanitize_email($_POST['email']);
    $username = sanitize_user($_POST['username']);
    $password = $_POST['password'];
    $valid = $_POST['valid'];

    if (!wp_verify_nonce($valid, 'register')) {
        echo wp_json_encode(['status' => false, 'valid' => 'invalid']);
        wp_die();
    }

    $username_exists = username_exists($username);
    $email_exists = email_exists($email);
    if ($username_exists || $email_exists) {
        echo wp_json_encode(['status' => false, 'username_exists' => $username_exists, 'email_exists' => $email_exists]);
        wp_die();
    }

    gt_create_user($username, $password, $email);

    echo wp_json_encode(['status' => true]);
    wp_die();
}
