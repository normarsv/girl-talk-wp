@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-20 pb-28">
        <div id="register-block">
            <div class="text-center">
                @include('elements.section-title',['text'=>'Let’s Make your Account'])
                <p class="text-2xl mt-5">To keep your account anonymous, be creative with your username.</p>
            </div>

            <form action="{{ admin_url( 'admin-ajax.php' ) }}" class="flex flex-col space-y-12 mt-24 md:w-96 m-auto"
                  id="register-form">
                @include('elements.input',['name'=>'username', 'placeholder'=>'Username','type'=>'text', 'required'=>true])
                @include('elements.input',['name'=>'email', 'placeholder'=>'Email','type'=>'email', 'required'=>true])
                @include('elements.input',['name'=>'confirm_email', 'placeholder'=>'Confirm Email','type'=>'email', 'required'=>true])
                @include('elements.input',['name'=>'password', 'placeholder'=>'Password','type'=>'password', 'required'=>true])
                <input type="hidden" id="n_valid" value="{{wp_create_nonce('register')}}">
                <button type="submit" class="bg-accent px-4 py-2 rounded-lg font-semibold text-gray-100 text-lg">Sign up
                </button>
            </form>
            <div class="md:w-96 m-auto mt-3">
                <p id="register-username-taken" class="hidden px-4 pt-2 text-sm text-red-500">The username is already
                    taken, try another one</p>
                <p id="register-email-taken" class="hidden px-4 pt-2 text-sm text-red-500">The email is already taken,
                    try another one</p>
            </div>

            <p class="text-lg mt-10 text-center">Already have an account? <a href="/sign-in"
                                                                             class="text-accent underline">Sign in</a>
            </p>
        </div>
        <div class="hidden text-center" id="register-verify">
            <img class="w-28 m-auto" src="@asset('images/cowboyhat.png')" alt="">
            <h2 class="mt-5 font-semibold text-3xl">Check your email</h2>
            <p class="text-xl mt-3">We just sent you a link to verify your account.</p>
            <p class="text-md mt-7">
                Didn’t receive an email? Whoops! <button type="button" class="text-accent underline">Click here to resend.</button>
            </p>
        </div>
    </section>
@endsection