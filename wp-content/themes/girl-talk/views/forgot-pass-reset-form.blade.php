@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-28">
        <div class="text-center">
            @include('elements.section-title',['text'=>'Reset your password'])
            <p class="text-lg md:text-xl mt-5">Please add a new password</p>
        </div>

        <form action="{{ site_url( 'wp-login.php?action=resetpass' )}}" class="flex flex-col mt-8 space-y-12 md:w-96 m-auto" method="POST" id="reset-pass-form" autocomplete="off">
            <input type="hidden" id="user_login" name="rp_login" value="<?php echo esc_attr( $_REQUEST['login'] ); ?>" autocomplete="off" />
            <input type="hidden" name="rp_key" value="<?php echo esc_attr( $_REQUEST['key']); ?>" />

            @include('elements.input',['name'=>'pass', 'placeholder'=>'New Password', 'type'=>'password', 'required'=>true])
            @include('elements.input',['name'=>'pass_confirm', 'placeholder'=>'Confirm Password', 'type'=>'password', 'required'=>true])
            <button type="submit" id="reset_submit" class="bg-accent px-4 py-2 rounded-lg font-semibold text-white">Reset Password</button>
        </form>
    </section>
@endsection