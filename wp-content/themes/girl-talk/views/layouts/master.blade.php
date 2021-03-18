<!DOCTYPE html>
<html lang="{{ get_locale() }}">
<head>
    <meta charset="{{ bloginfo('charset') }}">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

    <link href="{{ mix('app.css') }}" type="text/css" rel="stylesheet">

    {{ wp_head() }}

    {{-- @include('partials.favicon') --}}
</head>

<body {{ body_class('bg-accent-light') }}>

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
        <svg height="100%" width="100%" viewBox="0 0 1920 190" xmlns="http://www.w3.org/2000/svg">
            <path d="m223.736 2.93193c-91.544 3.34597-140.4325 10.78147-223.736 32.93177v754.1363h1920v-781.14036c-22.28-1.7373-33.61-1.60751-52.36 0-36.22 3.10146-56.59 5.40226-93.62 15.80726-93.56 30.9378-153.75 50.638-256.27 84.3051-88 23.784-139.28 33.628-238.01 38.201-104.08 1.265-162.28.26-265-13.173-129.601-20.4-197.721-36.3524-314.178-69.8151-98.616-28.8602-157.059-40.0065-264.992-54.008-80.887-9.52145-127.34-11.05674-211.834-7.24497z"
                  fill="#f9bdc6" stroke="#f9bdc6"/>
        </svg>
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
        <svg height="100%" width="100%" viewBox="0 0 1920 190" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1696.26 157.406C1787.81 154.645 1836.7 148.51 1920 130.234L1920 -492L0 -492L0 152.515C22.28 153.948 33.61 153.841 52.36 152.515C88.58 149.956 108.95 148.058 145.98 139.473C239.54 113.946 299.73 97.6914 402.25 69.9128C490.25 50.2888 541.53 42.1665 640.26 38.3934C744.34 37.3496 802.54 38.1789 905.26 49.2624C1034.86 66.0943 1102.98 79.2565 1219.44 106.866C1318.05 130.679 1376.5 139.876 1484.43 151.428C1565.32 159.284 1611.77 160.551 1696.26 157.406Z" fill="#F9BDC6" stroke="#F9BDC6"/>
        </svg>

    </div>

</main>

{{-- @include('partials.footer') --}}

<script src="{{ mix('app.js') }}" type="application/javascript"></script>
{{ wp_footer() }}
</body>
</html>
