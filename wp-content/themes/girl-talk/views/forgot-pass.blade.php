@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-28">
        <div class="text-center">
            @include('elements.section-title',['text'=>'Recover your password'])
            <p class="text-lg md:text-xl mt-5">Please add your username or email and a link will be sent to you.</p>
        </div>

        <form action="{{wp_lostpassword_url('forgot-pass?recovery=sent')}}" class="flex flex-col mt-20 space-y-12 md:w-96 m-auto" method="POST">
            @if(isset($_GET['recovery']))
                <p class="text-green-700 px-5 py-2 text-center bg-accent-light rounded">Check your email for the recovery link.</p>
            @endif
            @include('elements.input',['name'=>'user_login', 'placeholder'=>'Username or Email', 'type'=>'text', 'required'=>true])
            <button type="submit" class="bg-accent px-4 py-2 rounded-lg font-semibold text-white">Send</button>
        </form>
    </section>
@endsection