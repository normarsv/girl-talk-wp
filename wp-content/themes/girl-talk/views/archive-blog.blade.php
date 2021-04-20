@extends('layouts.master')

@section('content')
    @php
        $posts = get_posts([
           'post_type' => 'blog',
           'post_status' => ['publish'],
           'posts_per_page' => 70,
        ]);
        if(!count($posts)){
            wp_safe_redirect('/');
        }
        $featuredPost = $posts[0];
        $posts = array_splice($posts, 1);
    @endphp
    <section class="container pt-12 pb-28 md:pb-40 max-w-5xl">
        @include('elements.section-title',['text'=>'The Girl Talk Blog'])
        <p class="text-lg text-center mt-5">Follow along for updates, musings and Girl Talk IRL.</p>
        <div class="mt-8 md:mt-16">
            <div>
                <div class="aspect-w-16 aspect-h-7 rounded-lg overflow-hidden">
                    <img class="object-cover w-full" src="{{get_the_post_thumbnail_url($featuredPost->ID)}}" alt="">
                </div>
                <a class="font-semibold text-lg mt-3 block hover:underline"
                   href="{{get_permalink($featuredPost->ID)}}">{{$featuredPost->post_title}}</a>
                <p>{{get_the_date('m/d/Y', $featuredPost->ID)}}</p>
            </div>
            <div class="flex justify-between items-center flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-16 mt-6 md:mt-16">
                @foreach($posts as $post)
                    <div class="w-full md:w-1/2">
                        <div class="aspect-w-16 aspect-h-7 md:aspect-h-9 rounded-lg overflow-hidden">
                            <img class="object-cover w-full" src="{{get_the_post_thumbnail_url($post->ID)}}" alt="">
                        </div>
                        <a class="font-semibold text-lg mt-3 block hover:underline"
                           href="{{get_permalink($post->ID)}}">{{$post->post_title}}</a>
                        <p>{{get_the_date('m/d/Y',$post->ID)}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection