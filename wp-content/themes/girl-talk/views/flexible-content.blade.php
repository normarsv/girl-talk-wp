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
                    'is_home_hero' => get_sub_field('is_home_hero'),
                    'add_internal_container' => get_sub_field('add_internal_container'),
                    'desktop_image' => get_sub_field('desktop_image'),
                    'mobile_image' => get_sub_field('mobile_image'),
                    'copy' => get_sub_field('copy'),
                    'add_video' => get_sub_field('add_video'),
                    'video_url' => get_sub_field('video_url'),
                    'add_scroll_down_button' => get_sub_field('add_scroll_down_button'),
                ])
            @endif

            @if(get_row_layout() == 'copy_content')
                @include('components.copy-content', [
                    'is_featured' => get_sub_field('is_featured'),
                    'content' => get_sub_field('content'),
                    'shape' => get_sub_field('shape'),
                ])
            @endif

            @if(get_row_layout() == 'image_text_content')
                @include('components.image-text-content', [
                    'position' => get_sub_field('position'),
                    'theme' => get_sub_field('theme'),
                    'slides' => get_sub_field('slides'),
                    'shape' => get_sub_field('shape'),
                ])
            @endif

            @if(get_row_layout() == 'image_carousel')
                @include('components.image-carousel', [
                    'header' => get_sub_field('header'),
                    'title' => get_sub_field('title'),
                    'slides' => get_sub_field('slides'),
                    'content' => get_sub_field('content'),
                ])
            @endif

            @if(get_row_layout() == 'centered_image_text_content')
                @include('components.centered-image-text-content', [
                    'image' => get_sub_field('image'),
                    'content' => get_sub_field('content'),
                    'theme' => get_sub_field('theme'),
                    'shape' => get_sub_field('shape'),
                ])
            @endif

            @if(get_row_layout() == 'icons_module')
                @include('components.icons-module', [
                    'icons_list' => get_sub_field('icons_list'),
                    'shape' => get_sub_field('shape'),

                ])
            @endif

            @if(get_row_layout() == 'gallery')
                @include('components.gallery', [
                    'slides' => get_sub_field('slides'),
                    'theme' => get_sub_field('theme'),
                    'shape' => get_sub_field('shape'),
                ])
            @endif

            @if(get_row_layout() == 'contact_form')
                @include('components.contact-form', [
                    'content' => get_sub_field('content'),
                    'success_message' => get_sub_field('success_message'),
                    'shape' => get_sub_field('shape'),
                ])
            @endif

            @if(get_row_layout() == 'content_tiles')
                @include('components.content-tiles', [
                    'left_tile' => get_sub_field('left_tile'),
                    'right_tile' => get_sub_field('right_tile'),
                ])
            @endif

            @if(get_row_layout() == 'local_map')
                @include('components.local-map', [
                    'points_of_interest' => get_sub_field('points_of_interest'),
                ])
            @endif

            @if(get_row_layout() == 'contact_map')
                @include('components.contact-map', [
                    'map_url' => get_sub_field('map_url'),
                    'contact_title' => get_sub_field('contact_title'),
                    'address' => get_sub_field('address'),
                    'address_maps_link' => get_sub_field('address_maps_link'),
                    'email' => get_sub_field('email'),
                    'phone' => get_sub_field('phone'),
                ])
            @endif

            @if(get_row_layout() == 'floorplans')
                @include('components.floorplans', [
                    'content' => get_sub_field('content'),
                    'shape' => get_sub_field('shape'),
                ])
            @endif

            @if(get_row_layout() == 'dearflip_book')
                @include('components.dearflip-book', [
                    'dearflip_book' => get_sub_field('dearflip_book'),
                    'is_thumbnail' => get_sub_field('is_thumbnail'),
                ])
            @endif
        @endwhile

        @if(get_field('add_crosslink_module'))
            @include('partials.crosslink-module', [
                'item_id' => get_the_ID(),
            ])
        @endif

    @endwhile

@endsection
