<?php

function view($view, $variables = [])
{
    $blade = new Bladerunner();
    echo $blade->view($view, $variables);
}

function asset($path): string
{
    return get_template_directory_uri() . '/dist/' . $path;
}

//TODO: FIX THIS
function mix($filePath)
{
    $manifestFile = get_template_directory() . '/dist/mix-manifest.json';
    $manifest = json_decode(file_get_contents($manifestFile), true);

    $assetPath = $manifest[$filePath] ?? '';

    return filter_var($assetPath, FILTER_VALIDATE_URL) ? $assetPath : get_home_url(null, $assetPath);
}