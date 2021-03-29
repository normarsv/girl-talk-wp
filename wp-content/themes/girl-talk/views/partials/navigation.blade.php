<header class="container px-6 py-6 mx-auto md:flex md:justify-between md:items-center max-w-none xl:max-w-screen-2xl">
    <div class="flex items-center justify-between">
        <div>
            <a class="" href="/"><img class="w-44" src="@asset('images/gt_logo.png')" alt=""></a>
        </div>

        {{--Mobile menu button--}}
        <div class="flex md:hidden" id="nav-burger">
            <button type="button"
                    class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="toggle menu">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                    <path fill-rule="evenodd"
                          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                </svg>
            </button>
        </div>
    </div>

    {{--Mobile Menu open: "block", Menu closed: "hidden"--}}
    <div class="items-center py-8 md:py-0 md:flex hidden" id="navigation">
        <nav class="flex flex-col md:flex-row lg:ml-6">
            @if(!is_user_logged_in())
                {!!
                    strip_tags(wp_nav_menu([
                    'theme_location' => 'main-nav-guests',
                    'container'  => false,
                    'echo'       => false,
                    'add_item_class'  => 'my-1 text-md font-bold md:font-medium text-dark hover:text-accent hover:underline my-3 md:mx-4 md:my-0',
                    'items_wrap' => '%3$s'
                    ]),'<a>');
                !!}
            @else
                {!!
                    strip_tags(wp_nav_menu([
                    'theme_location' => 'main-nav',
                    'container'  => false,
                    'echo'       => false,
                    'add_item_class'  => 'my-1 text-md font-bold md:font-medium text-dark hover:text-accent hover:underline my-3 md:mx-4 md:my-0',
                    'items_wrap' => '%3$s'
                    ]),'<a>');
                !!}
            @endif
        </nav>
    </div>
</header>