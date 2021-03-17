let mix = require('laravel-mix');

mix
    .setResourceRoot('/wp-content/themes/girl-talk/dist')
    .options({
        processCssUrls: false
    })
    .copyDirectory('assets/images', 'dist/images')
    .copyDirectory('assets/fonts', 'dist/fonts')
    .postCss('assets/css/app.css', 'dist', [
        require('tailwindcss'),
    ])
;

// if (mix.inProduction()) {
//     mix.version();
// }
