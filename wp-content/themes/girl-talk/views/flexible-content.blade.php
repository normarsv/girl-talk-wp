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

            @if(get_row_layout() == 'rotating_text')
                @include('components.rotating-text', [
                    'text' => get_sub_field('text'),
                ])
            @endif

            @if(get_row_layout() == 'testimonials')
                @include('components.testimonials', [
                    'cards' => get_sub_field('cards'),
                ])
            @endif

            @if(get_row_layout() == 'profile_description')
                @include('components.profile-description', [
                    'title' => get_sub_field('title'),
                    'body' => get_sub_field('body'),
                    'image_profile' => get_sub_field('image_profile'),
                ])
            @endif

            @if(get_row_layout() == 'contact_us')
                @include('components.contact-us', [
                    'title' => get_sub_field('title'),
                    'description' => get_sub_field('description'),
                    'cards' => get_sub_field('cards'),
                ])
            @endif

        @endwhile

    @endwhile

@endsection
