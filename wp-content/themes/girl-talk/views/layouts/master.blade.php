<!DOCTYPE html>
<html lang="{{ get_locale() }}">
<head>
    <meta charset="{{ bloginfo('charset') }}">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <link href="{{ asset('app.css') }}" type="text/css" rel="stylesheet">

    {{ wp_head() }}

    {{-- @include('partials.favicon') --}}
</head>

<body {{ body_class('bg-accent-light') }}>

 @include('partials.navigation')

<main class="page-content" id="content">
    @yield('content')
    <div class="py-52 px-60">
        <h1 class="font-title text-6xl font-bold text-center">A safe space to give and get advice.</h1>
    </div>
</main>

{{-- @include('partials.footer') --}}

{{ wp_footer() }}
</body>
</html>
