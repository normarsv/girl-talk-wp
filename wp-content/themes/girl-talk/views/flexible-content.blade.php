@extends('layouts.master')

@section('content')

    @while( have_posts() )
        @php
            the_post();
        @endphp

        @while (have_rows('flexible_content'))
            @php the_row(); @endphp

            @if(get_row_layout() == 'hero')
                @include('components.hero', [
                    'header' => get_sub_field('header'),
                    'cta' => get_sub_field('cta'),
                ])
            @endif

            @if(get_row_layout() == 'intros_text')
                @include('components.intros-text', [
                    'cards' => get_sub_field('cards'),
                ])
            @endif

        @endwhile

    @endwhile

@endsection
