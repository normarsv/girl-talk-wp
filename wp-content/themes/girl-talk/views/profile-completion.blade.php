@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-10 pb-18" id="profile-completion">
        <div class="text-center">
            <h2 class="mt-5 font-semibold text-3xl">You’re verified!</h2>
            <p class="text-xl mt-3">We knew you were the real deal. <br>
                Let’s finish creating your account below.</p>
        </div>
        <div class="w-full my-12 border border-t-0 border-accent"></div>
        <div class="text-center">
            <h3 class="text-5xl font-title">This or That? <span class="font-lg text-xl font-sans font-normal">Choose which best describes you.</span>
            </h3>

            <div class="flex flex-col max-w-650 m-auto my-20 space-y-20">
                <div class="flex justify-between items-center space-x-12">
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="place" data-value="beach">
                        Beach
                    </button>
                    <span class="flex-1 text-xl">or</span>
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="place" data-value="mountain">
                        Mountain
                    </button>
                </div>
                <div class="flex justify-between items-center space-x-12">
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="taste" data-value="sweet">
                        Sweet
                    </button>
                    <span class="flex-1 text-xl">or</span>
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="taste" data-value="salty">
                        Salty
                    </button>
                </div>
                <div class="flex justify-between items-center space-x-12">
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="animal" data-value="early_bird">
                        Early Bird
                    </button>
                    <span class="flex-1 text-xl">or</span>
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="animal" data-value="night_owl">
                        Night Owl
                    </button>
                </div>
                <div class="flex justify-between items-center space-x-12">
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="genre" data-value="romance">
                        Romance
                    </button>
                    <span class="flex-1 text-xl">or</span>
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 this-that-picker"
                            data-type="genre" data-value="thriller">
                        Thriller
                    </button>
                </div>
            </div>

        </div>
        <div class="text-center">
            <h3 class="text-4xl font-title">Be an icon.<span class="font-lg text-xl font-sans font-normal"> If you were an icon, what would you be?</span>
            </h3>
            <div class="grid grid-cols-3 gap-4 max-w-650 m-auto my-20">
                <button type="button" class="hover:bg-accent rounded icon-picker" data-value="cowboyhat"><img
                            class="w-28 m-auto py-5" src="@asset('images/cowboyhat.png')" alt=""></button>
                <button type="button" class="hover:bg-accent rounded icon-picker" data-value="butterfly"><img
                            class="w-28 m-auto py-5" src="@asset('images/butterfly.png')" alt=""></button>
                <button type="button" class="hover:bg-accent rounded icon-picker" data-value="diamond"><img
                            class="w-28 m-auto py-5" src="@asset('images/diamond.png')" alt=""></button>
                <button type="button" class="hover:bg-accent rounded icon-picker" data-value="heart"><img
                            class="w-28 m-auto py-5" src="@asset('images/heart.png')" alt=""></button>
                <button type="button" class="hover:bg-accent rounded icon-picker" data-value="peony"><img
                            class="w-28 m-auto py-5" src="@asset('images/peony.png')" alt=""></button>
                <button type="button" class="hover:bg-accent rounded icon-picker" data-value="star"><img
                            class="w-28 m-auto py-5" src="@asset('images/star.png')" alt=""></button>

            </div>
        </div>
        <div class="text-center">
            <h3 class="text-4xl font-title">We’re so glad you’re here.<span
                        class="font-lg text-xl font-sans font-normal"> How did you hear about Girl Talk?</span>
            </h3>
            <div class="flex flex-col max-w-650 m-auto my-20 space-y-20">
                <div class="flex justify-between items-center space-x-52">
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 meet-picker"
                            data-value="instagram">
                        Instagram
                    </button>
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 meet-picker"
                            data-value="friend">
                        Friend
                    </button>
                </div>
                <div class="flex justify-between items-center space-x-52">
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 meet-picker"
                            data-value="email">
                        Email Marketing
                    </button>
                    <button type="button"
                            class="bg-white shadow-accent text-accent font-semibold text-xl py-3 px-4 rounded-lg flex-1 meet-picker"
                            data-value="other">
                        Other
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col max-w-650 m-auto my-20 space-y-5 text-xl">
            <div class="flex flex-row items-center">
                <input type="checkbox"
                       class="appearance-none cursor-pointer rounded-full checked:bg-accent text-accent text-xl w-5 h-5"
                       id="newsletter_check" />
                <label for="newsletter_check" class="pl-3">Sign up for Girl Talk newsletters.</label>
            </div>
            <div class="flex flex-row items-center">
                <input type="checkbox"
                       class="appearance-none cursor-pointer rounded-full checked:bg-accent text-accent text-xl w-5 h-5"
                       id="advice_check" />
                <label for="advice_check" class="pl-3">I acknowledge that the advice on Girl Talk is not professional
                    advice and
                    I assume the risk of taking advice from my peers.</label>
            </div>
            <div class="flex flex-row items-center">
                <input type="checkbox"
                       class="appearance-none cursor-pointer rounded-full checked:bg-accent text-accent text-xl w-5 h-5"
                       id="agreement_check" />
                <label for="agreement_check" class="pl-3">I am over 18 and have read and agree to the
                    <a class="underline"
                       href="{{get_home_url(null,'privacy-policy')}}" target="_blank">user agreement</a> and
                    <a class="underline"
                       href="{{get_home_url(null,'content-policy')}}" target="_blank">content policy</a>.</label>
            </div>
        </div>

        <button type="button" id="confirm_button"
                class="m-auto block bg-accent px-16 py-2 rounded-lg font-semibold text-white text-lg" data-url="{{ admin_url( 'admin-ajax.php' ) }}">Done
        </button>
    </section>
@endsection