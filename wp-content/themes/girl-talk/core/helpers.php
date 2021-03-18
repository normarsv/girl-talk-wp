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

function mix($filePath)
{
    $manifestFile = get_template_directory() . '/dist/mix-manifest.json';
    $manifest = json_decode(file_get_contents($manifestFile), true);

    //TODO: the slash prefix should be removed from the manifest.json
    $assetPath = $manifest['/'.$filePath] ?? '';

    return get_template_directory_uri() . '/dist' .$assetPath;
}