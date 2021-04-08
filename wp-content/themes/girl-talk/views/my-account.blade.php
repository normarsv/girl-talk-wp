@extends('layouts.master')
@set($user = wp_get_current_user())

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-16 pb-28">
        <div class="bg-white shadow-accent p-10 rounded-3xl flex flex-col md:flex-row justify-center items-center">
            <div class="flex flex-col w-1/2 items-center">
                <p class="font-semibold text-2xl">
                    <img class="w-11 inline" src="@asset('images/'.get_user_meta($user->ID, 'gt_icon', true).'.png')"
                         alt="" aria-hidden="true">{{$user->data->user_login}}</p>
                <p class="text-lg">{{$user->data->user_email}}</p>
                <a href="#" class="text-lg underline mt-3">Edit email</a>
                <a class="bg-accent px-4 py-2 rounded-md mt-6 font-semibold text-white" href="{{wp_logout_url()}}">Logout</a>
            </div>
            <div class="flex flex-col w-1/2">
            </div>
        </div>
    </section>
@endsection