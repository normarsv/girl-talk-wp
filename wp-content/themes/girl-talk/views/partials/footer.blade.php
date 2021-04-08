<footer>
    @if(!get_field('footer_remove_wave'))
        @include('elements.wave',['inverted'=>false])
    @endif
    <div class="bg-accent pt-10 md:pt-0 pb-7">
        <div class="container px-6 md:px-10 flex flex-col md:flex-row relative justify-between pb-28 max-w-none xl:max-w-screen-2xl">
            <div class="flex flex-col space-y-6">
                <img class="w-24 h-24" src="@asset('images/gt_logo_round.png')" alt="Girl Talk Logo">
                <h3 class="font-title text-3xl">{{get_field('footer_heading','option')}}</h3>
                <div class="flex space-x-3">
                    <a href="{{ get_field('instagram_link','option') }}" aria-label="Instagram"><img
                                src="@asset('images/icons/instagram.png')" class="w-11 h-11"
                                alt="instagram"></a>
                    <a href="{{ get_field('facebook_link','option') }}" aria-label="facebook"><img
                                src="@asset('images/icons/facebook.png')" class="w-11 h-11"
                                alt="facebook"></a>
                    <a href="{{ get_field('twitter_link','option') }}" aria-label="twitter"><img
                                src="@asset('images/icons/twitter.png')"
                                class="w-9 h-9 mt-1 ml-1" alt="twitter"></a>
                </div>
            </div>

            <div class="flex flex-col space-y-3 mt-16">
                <h3 class="font-title text-4xl">{{ get_field('subscribe_title','option') }}</h3>
                <p>{!! get_field('subscribe_copy','option') !!}</p>
                <form action="{{ admin_url( 'admin-ajax.php' ) }}" method="POST" id="newsletter-form">
                    <div class="relative rounded-sm shadow-lg">
                        <input type="email" name="email" id="email_newsletter"
                               class="bg-accent-light block border-0 w-full pl-3 pr-12 sm:text-sm rounded placeholder-gray-400"
                               placeholder="Your email" aria-label="Your email" required>
                        <button type="submit" class="absolute inset-y-0 right-3 flex items-center" aria-label="Subscribe me">
                            <svg width="12" height="15" viewBox="0 0 16 28" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.58643 1.17246L14.414 14.0001L1.58643 26.8276" stroke="#B8B4B6"
                                      stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                    <p class="hidden text-green-800 text-sm font-bold mt-3" id="newsletter_success_msg"
                       aria-assertive="true">Thanks for subscribing!</p>
                </form>
            </div>

            <div class="absolute bottom-0 left-6 md:left-11 text-sm">
                <p>{{ get_field('footer_copyright','option') }}</p>
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