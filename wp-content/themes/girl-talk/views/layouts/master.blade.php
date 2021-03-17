<!DOCTYPE html>
<html lang="{{ get_locale() }}">
<head>
    <meta charset="{{ bloginfo('charset') }}">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    {{-- <link rel="stylesheet" type="text/css" href="{{ getHashedAsset('css') }}"> --}}

    {{ wp_head() }}

    {{-- @include('partials.favicon') --}}
</head>

<body {{ body_class() }}>

{{-- @include('partials.navigation') --}}

<main class="page-content" id="content">
    @yield('content')
</main>

{{-- @include('partials.footer') --}}

{{ wp_footer() }}
</body>
</html>
