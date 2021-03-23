<!DOCTYPE html>
<html lang="{{ get_locale() }}">
<head>
    <meta charset="{{ bloginfo('charset') }}">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <link href="{{ mix('app.css') }}" type="text/css" rel="stylesheet">

    @php wp_head() @endphp

    {{-- @include('partials.favicon') --}}
</head>
<body @php body_class(get_field('background_pink') ? 'bg-accent-light':'bg-white') @endphp>

@include('partials.navigation')

<main class="page-content" id="content">
    @yield('content')
    <div class="flex flex-col items-center justify-center pt-28 pb-24 px-6 md:px-32">
        <h1 class="font-title text-6xl font-bold text-center">A safe space to give and get advice.</h1>
        <a href="#"
           class="bg-white shadow-lg shadow-accent px-9 py-3 text-accent font-bolder m-auto mt-12 rounded text-xl">Start
            Here</a>
    </div>

    <div>
        @include('elements.wave',['inverted'=>false])
        <div class="bg-accent">
            <div class="container m-auto flex flex-col">
                <div class="flex flex-col lg:flex-row justify-between items-center md:px-24 py-10 lg:py-0">
                    <div class="w-52 md:w-80 xl:w-96 shadow-lg">
                        <div class="aspect-w-8 aspect-h-10">
                            <img src="https://placeimg.com/552/736/architecture" alt="placeholder"
                                 class="w-full h-full rounded ">
                        </div>
                    </div>
                    <div class="py-10 lg:py-0 text-center lg:text-left px-6 lg:px-14 lg:w-3/5 ">
                        <h2 class="font-title font-dark text-4xl xl:text-5xl">
                            Girl Talk is an anonymous, safe platform for those that identify as women and are over the
                            age of 18.</h2>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row-reverse justify-between items-center md:px-24 py-10 lg:py-0">
                    <div class="w-52 md:w-80 xl:w-96 shadow-lg">
                        <div class="aspect-w-8 aspect-h-10">
                            <img src="https://placeimg.com/552/736/architecture" alt="placeholder"
                                 class="w-full h-full rounded ">
                        </div>
                    </div>
                    <div class="py-10 lg:py-0 text-center lg:text-left px-6 lg:px-0 lg:pr-14 lg:w-3/5 ">
                        <h2 class="font-title font-dark text-4xl xl:text-5xl">
                            Your new best girl friend.
                        </h2>
                        <p class="font-dark text-2xl mt-5">
                            Think of Girl Talk as your new, always available best girl friend. A judgement-free place for you to connect and share experiences, Girl Talk is a virtual hug and a shoulder for you to lean on.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @include('elements.wave', ['inverted'=>true])
    </div>
</main>

 @include('partials.footer')

<script src="{{ mix('app.js') }}" type="application/javascript"></script>
 @php wp_footer() @endphp
</body>
</html>
