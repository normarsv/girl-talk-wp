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
                ])
            @endif

        @endwhile

    @endwhile

@endsection
