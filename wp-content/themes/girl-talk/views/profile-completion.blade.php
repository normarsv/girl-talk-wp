@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-10 pb-18">
        <div class="text-center" id="">
            <h2 class="mt-5 font-semibold text-3xl">You’re verified!</h2>
            <p class="text-xl mt-3">We knew you were the real deal. <br>
                Let’s finish creating your account below.</p>
        </div>
        <div class="w-full my-12 border border-t-0 border-accent"></div>
        <div class="text-center">
            <h3 class="text-5xl font-title">This or That? <span class="font-lg text-xl font-sans font-normal">Choose which best describes you.</span>
            </h3>

{{--            <div>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <input checked type="radio" name="option" id="option3" class="hidden" />--}}
{{--                        <label for="option3" class="cursor-pointer label-checked:bg-red-600" tabindex="0">option 3</label>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <input checked type="radio" name="option" id="option4" class="hidden" />--}}
{{--                        <label for="option4" class="cursor-pointer label-checked:bg-red-600" tabindex="0">option 4</label>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
        </div>
    </section>
@endsection