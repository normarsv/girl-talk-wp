@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-20 pb-28">
        <div class="text-center">
            @include('elements.section-title',['text'=>'Hi, welcome back!'])
            <p class="text-2xl mt-5">Please sign in below with your username or email.</p>
        </div>

        <form action="#" class="flex flex-col space-y-12 mt-24 md:w-96 m-auto" method="POST">
            @include('elements.input',['name'=>'email', 'placeholder'=>'Email','type'=>'email', 'required'=>true])
            @include('elements.input',['name'=>'password', 'placeholder'=>'Password','type'=>'password', 'required'=>true])
            <button type="submit" class="bg-accent px-4 py-2 rounded-lg font-semibold text-gray-100 text-lg">Sign up
            </button>
        </form>

        <p class="text-lg mt-10 text-center">Forgot your <a href="/forgot-pass" class="text-accent underline">password?</a></p>
    </section>
@endsection