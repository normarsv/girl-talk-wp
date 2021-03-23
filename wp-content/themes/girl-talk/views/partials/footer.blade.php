<footer>
    @include('elements.wave',['inverted'=>false])
    <div class="bg-accent pb-5">
        <div class="container m-auto flex flex-col md:flex-row relative justify-between pb-28 ">
            <div class="flex flex-col space-y-6">
                <img class="w-24 h-24" src="@asset('images/gt_logo_round.png')" alt="Girl Talk Logo">
                <h3 class="font-title text-3xl">A safe space to give and get advice.</h3>
                <div class="flex space-x-3">
                    <a href="" aria-label="Instagram"><img src="@asset('images/icons/instagram.png')" class="w-11 h-11" alt=""></a>
                    <a href="" aria-label="facebook"><img src="@asset('images/icons/facebook.png')" class="w-11 h-11" alt=""></a>
                    <a href="" aria-label="twitter"><img src="@asset('images/icons/twitter.png')" class="w-9 h-9 mt-1 ml-1" alt=""></a>
                </div>
            </div>

            <div class="flex flex-col space-y-3 mt-16">
                <h3 class="font-title text-3xl">We like to check-in.</h3>
                <p>Sign up to receive love notes and updates from us. <br> Unsubscribe anytime.</p>
                <form action="{{ admin_url( 'admin-ajax.php' ) }}" method="POST" id="newsletter-form">
                    <div class="relative rounded-sm shadow-lg">
                        <input type="email" name="email" id="email_newsletter"
                               class="block border-0 w-full pl-3 pr-12 sm:text-sm rounded-sm placeholder-gray-400"
                               placeholder="Your email" aria-label="Your email" required>
                        <button type="submit" class="absolute inset-y-0 right-3 flex items-center">
                            <svg width="12" height="15" viewBox="0 0 16 28" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.58643 1.17246L14.414 14.0001L1.58643 26.8276" stroke="#B8B4B6"
                                      stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <p class="hidden text-green-800 text-sm font-bold mt-3" id="newsletter_success_msg"
                       aria-assertive="true">Thanks for subscribe!</p>
                </form>
            </div>

            <div class="absolute bottom-0 left-5 text-sm">
                <p>© 2021 We Need to Girl Talk. All rights reserved.</p>
                <div class="flex flex-row space-x-5 md:space-x-3 underline">
                    {!!
                        strip_tags(wp_nav_menu([
                        'theme_location' => 'footer-nav',
                        'container'  => false,
                        'echo'       => false,
                        'items_wrap' => '%3$s'
                        ]),'<a>');
                    !!}
                </div>
            </div>
        </div>
    </div>
</footer>