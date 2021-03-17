<?php

// Helper to get hashed assets files
function getHashedAsset($fileType, $isEditor = false)
{
    $feature = !$isEditor ? 'app' : 'editor';
    $manifestFile = get_template_directory() . '/dist/manifest.json';
    $manifest = json_decode(file_get_contents($manifestFile), true)[$feature];

    $assetPath = $manifest[$fileType] ?? '';

    return filter_var($assetPath, FILTER_VALIDATE_URL) ? $assetPath : get_home_url(null, $assetPath);
}

function view($view, $variables = [])
{
    $blade = new Bladerunner();
    echo $blade->view($view, $variables);
}
