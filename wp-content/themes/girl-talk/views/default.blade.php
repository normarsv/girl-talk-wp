@extends('layouts.master')

@section('content')

    @while( have_posts() )
        @php
            the_post();
        @endphp
        <section class="default-page">
            {!! the_content() !!}
        </section>
    @endwhile

@endsection