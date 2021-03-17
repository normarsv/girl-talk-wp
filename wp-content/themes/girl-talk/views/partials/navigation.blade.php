<nav class="container px-6 py-3 mx-auto md:flex md:justify-between md:items-center">
    <div class="flex items-center justify-between">
        <div>
            <a class="" href="#"><img class="w-44" src="{{asset('images/gt_logo.png')}}" alt=""></a>
        </div>

        <!-- Mobile menu button -->
        <div class="flex md:hidden">
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

    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
    <div class="items-center md:flex">
        <div class="flex flex-col md:flex-row md:mx-6">
            <a class="my-1 text-sm font-medium text-dark hover:text-accent hover:underline md:mx-4 md:my-0"
               href="#">Create Account</a>
            <a class="my-1 text-sm font-medium text-dark hover:text-accent hover:underline md:mx-4 md:my-0"
               href="#">My Account</a>
            <a class="my-1 text-sm font-medium text-dark hover:text-accent hover:underline md:mx-4 md:my-0"
               href="#">About</a>
            <a class="my-1 text-sm font-medium text-dark hover:text-accent hover:underline md:mx-4 md:my-0"
               href="#">Resources</a>
        </div>
    </div>
</nav>