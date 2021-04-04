@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-28">
        <div class="text-center">
            @include('elements.section-title',['text'=>'Recover your password'])
            <p class="text-lg md:text-xl mt-5">Please add your email and a link will be sent to you.</p>
        </div>

        <form action="#" class="flex flex-col space-y-12 mt-24 md:w-96 m-auto" method="POST">
            @include('elements.input',['name'=>'email', 'placeholder'=>'Email','type'=>'email', 'required'=>true])
            <button type="submit" class="bg-accent px-4 py-2 rounded-lg font-semibold text-gray-100 ">Send
            </button>
        </form>

    </section>
@endsection