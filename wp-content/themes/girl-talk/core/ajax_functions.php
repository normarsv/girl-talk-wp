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
            'subject' => 'New newsletter user <' . $email .'>',
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