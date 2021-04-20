<?php

function view($view, $variables = [])
{
    $blade = new Bladerunner();
    echo $blade->view($view, $variables);
}

function mix($filePath)
{
    $manifestFile = get_template_directory() . '/dist/mix-manifest.json';
    $manifest = json_decode(file_get_contents($manifestFile), true);

    //TODO: the slash prefix should be removed from the manifest.json
    $assetPath = $manifest['/' . $filePath] ?? '';

    return get_template_directory_uri() . '/dist' . $assetPath;
}

function dd($var)
{
    var_dump("<pre>", $var, "</pre>");
    wp_die();
}

function gt_create_user($username, $password, $email)
{
    $user_id = wp_create_user($username, $password, $email);

    add_user_meta($user_id, 'account_verified', 0);
    add_user_meta($user_id, 'gt_thisthat', []);
    add_user_meta($user_id, 'gt_icon', '');
    add_user_meta($user_id, 'gt_how_hear', '');

    $token = md5(time());
    add_user_meta($user_id, 'verify_token', $token);

    $url = get_site_url() . '?account-verify=' . base64_encode(serialize(['id' => $user_id, 'code' => $token]));
    $html = 'Please validate your account <br/><br/> <a href="' . $url . '">' . $url . '</a>';

    wp_mail($email, 'GT verify your account', $html);
}

function gt_redirect_verified_users()
{
    $user_id = get_current_user_id();
    if (!$user_id || get_user_meta($user_id, 'account_verified', true) || current_user_can('administrator')) {
        wp_safe_redirect('my-account');
    }
}

function gt_redirect_non_verified_users()
{
    if (current_user_can('administrator')) {
        return;
    }

    $user_id = get_current_user_id();
    if (!$user_id || !get_user_meta($user_id, 'account_verified', true)) {
        wp_safe_redirect('profile-completion');
    }
}

// Custom function for the search
// IF YOU NEED TO CHANGE THIS SET OF ARGS, BE SURE TO UPDATE THEM ON THE `posts_where` CUSTOM FILTER AS WELL
// INSIDE THE `theme-setup.php` file
function gt_search_posts($search, $topic_id)
{
    // Tag taxonomy term will work with exact same names only
    $search = sanitize_text_field($search);
    $args = [
        'posts_per_page'           => '100',
        'order'                    => 'DESC',
        'orderby'                  => 'date',
        'post_type'                => 'question',
        'post_status'              => ['publish', 'pending', 'flagged'],
        'tag'                      => str_replace(' ', '-', strtolower($search)),
        'tax_query'                => [
            'relation' => 'AND',
            [
                'taxonomy' => 'topics',
                'field'    => 'term_id',
                'terms'    => $topic_id,
            ],
        ],
        'search_like'              => $search, // custom search term
        'topic_id_for_search_like' => $topic_id, // custom search term
    ];
    return new WP_Query($args);
}

function gt_escape_br($content)
{
    return preg_replace('/\<br\b[^>]*>/i', ' ', $content);
}