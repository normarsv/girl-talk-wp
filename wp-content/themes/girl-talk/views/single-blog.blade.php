@extends('layouts.master')

@section('content')
    @php
        the_post();
        if(get_post_status() !== 'publish'){
            wp_safe_redirect('/');
        }
    @endphp
    <section class="container pt-6 pb-28 md:pt-16 sm:pb-36 max-w-5xl px-6">
        <a href="{{get_home_url(null,'blog')}}" class="text-accent hover:underline inline-block"><img
                    src="@asset('images/arrow.png')" class="w-3 inline mr-3" alt=""> Back to Blog</a>
        <div class="pt-10 md:pt-12">
            <h1 class="font-semibold text-2xl">{{get_the_title()}}</h1>
            <p>{{get_the_date('m/d/Y')}}</p>
            @if(has_excerpt())
                <p>{{get_the_excerpt()}}</p>
            @endif
        </div>
        <div class="font-sans prose md:prose-xl md:text-lg leading-normal max-w-none md:leading-normal text-dark pt-8">
            @php the_content() @endphp
        </div>
    </section>
@endsection