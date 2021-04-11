@extends('layouts.master')

@section('content')
    @php
        $term = get_queried_object();
        $termImage = get_field('featured_image','term_' . $term->term_id);
        $args = ['post_type' => 'question',
            'tax_query' => [
                [
                    'taxonomy' => 'topics',
                    'field' => 'slug',
                    'terms' => $term->slug,
                ],
            ],
         ];
         $posts = new WP_Query($args);
    @endphp

    <section class="container">
        <div class="max-w-6xl m-auto pt-10">
            <a href="{{get_home_url(null,'topics')}}" class="text-accent hover:underline inline-block"><img
                        src="@asset('images/arrow.png')" class="w-3 inline mr-3" alt=""> Back to Topics</a>
            <div class="flex justify-start items-center pt-10">
                <div class="w-52 relative">
                    <div class="aspect-w-8 aspect-h-10 rounded shadow-lg shadow-accent ">
                        <img src="{{$termImage['sizes']['large']}}" alt="" aria-hidden="true"
                             class="w-full h-full rounded object-cover">
                    </div>
                    <h2 class="text-5xl text-accent-light text-center font-title text-shadow absolute bottom-3 left-1/2 transform -translate-x-1/2">
                        {{$term->name}}</h2>
                </div>
                <div class="font-semibold text-xl leading-6 pl-14 max-w-4xl">
                    <button type="button"
                            class="open-question-modal shadow-accent rounded-lg py-2 px-4 text-lg w-72 text-left relative border border-accent leading-6">
                        Ask a question
                        <img src="@asset('images/arrow_black.png')"
                             class="w-3 h-5 inline absolute right-3 top-1/2 transform -translate-y-1/2" alt="">
                    </button>
                    <p class="mt-10">{{$term->description}}</p>
                </div>
            </div>
        </div>

        <div class="mt-20 mb-36 space-y-14">
            @while($posts->have_posts())
                @php $posts->the_post() @endphp
                <div class="bg-white shadow-accent p-10 rounded-3xl flex flex-col">
                    <p><img class="w-8 inline" src="@asset('images/'.get_the_author_meta('gt_icon').'.png')}}"
                            alt="">{{get_the_author()}}</p>
                    <p>{{get_the_date('m/d/y')}}</p>
                    <a href="{{get_permalink()}}"
                       class="text-lg mt-1 font-semibold hover:underline leading-6">{{mb_strimwidth(get_the_title(),0,100,'...')}}</a>
                    <a href="{{get_permalink()}}"
                       class="mt-3 hover:underline">{{mb_strimwidth(get_the_content(), 0, 300, '...')}}</a>
                </div>
            @endwhile
        </div>
    </section>
    @include('partials.question-modal',['topic'=>$term->slug])
@endsection