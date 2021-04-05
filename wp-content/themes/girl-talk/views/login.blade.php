@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-28">
        <div class="text-center">
            @include('elements.section-title',['text'=>'Hi, welcome back!'])
            <p class="text-lg md:text-xl mt-5">Please sign in below with your username or email.</p>
        </div>

        <form action="{{home_url('wp-login.php')}}" class="flex flex-col space-y-10 mt-20 md:w-96 m-auto" method="POST">
            @if(isset($_GET['login']))
                <p class="text-red-700 px-5 py-2 bg-accent-light rounded">Invalid username and/or password, check and
                    try again.</p>
            @endif
            @if(isset($_GET['forgot-pass']) && $_GET['forgot-pass'] == 'expiredkey')
                <p class="text-red-700 px-5 py-2 bg-accent-light rounded">The reset key is expired, try again.</p>
            @endif
            @if(isset($_GET['forgot-pass']) && $_GET['forgot-pass'] == 'invalidkey')
                <p class="text-red-700 px-5 py-2 bg-accent-light rounded">Invalid reset key, try again.</p>
            @endif
            @if(isset($_GET['password']) && $_GET['password'] == 'changed')
                <p class="text-green-700 px-5 py-2 bg-accent-light rounded">Password updated.</p>
            @endif
            @include('elements.input',['name'=>'log', 'placeholder'=>'Username or Email','type'=>'text', 'required'=>'' ])
            @include('elements.input',['name'=>'pwd', 'placeholder'=>'Password','type'=>'password', 'required'=>'' ])
            @include('elements.checkbox',['name'=>'rememberme','label'=>'Remember Me'])
            <input type="hidden" name="redirect_to" value="{{home_url('my-account')}}">
            <button type="submit" class="bg-accent px-4 py-2 rounded-lg font-semibold text-white">Sign in
            </button>
        </form>

        <p class=" mt-10 text-center">Forgot your <a href="{{get_home_url(null,'forgot-pass')}}"
                                                     class="text-accent underline">password</a>?</p>
    </section>
@endsection