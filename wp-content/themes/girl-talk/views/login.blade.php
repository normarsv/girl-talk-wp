@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-28">
        <div class="text-center">
            @include('elements.section-title',['text'=>'Hi, welcome back!'])
            <p class="text-lg md:text-xl mt-5">Please sign in below with your username or email.</p>
        </div>

        <form action="{{home_url('wp-login.php')}}" class="flex flex-col space-y-10 mt-20 md:w-96 m-auto" method="POST">
            @include('elements.input',['name'=>'log', 'placeholder'=>'Username or Email','type'=>'text', 'required'=>true])
            @include('elements.input',['name'=>'pwd', 'placeholder'=>'Password','type'=>'password', 'required'=>true])
            @include('elements.checkbox',['name'=>'rememberme','label'=>'Remember Me'])
            <input type="hidden" name="redirect_to" value="{{home_url('my-account')}}">
            <button type="submit" class="bg-accent px-4 py-2 rounded-lg font-semibold text-gray-100 ">Sign in
            </button>
        </form>

        <p class=" mt-10 text-center">Forgot your <a href="/forgot-pass"
                                                     class="text-accent underline">password</a>?</p>
    </section>
@endsection