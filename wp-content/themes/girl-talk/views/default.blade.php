@extends('layouts.master')

@section('content')

    @while( have_posts() )
        @php
            the_post();
        @endphp
        <section class="container font-sans prose prose-xl text-dark pt-16 pb-28 sm:pt-24 sm:pb-36 max-w-6xl leading-8">
            {!! the_content() !!}
        </section>
    @endwhile

@endsection