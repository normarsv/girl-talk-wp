@extends('layouts.master')
@set($post = get_queried_object())
@set($term = get_the_terms($post->ID, 'topics')[0])
@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-36">
        <div class="text-center">
            @include('elements.section-title', ['text'=>$term->name])
            <a href="{{get_term_link($term)}}" class="text-accent hover:underline mt-8 inline-block">
                <img src="@asset('images/arrow.png')" class="w-3 inline mr-3" alt="">
                Back to {{$term->name}}
            </a>
        </div>
        <div class="mt-14">
            <div class="flex flex-col">
                <p><img class="w-8 inline"
                        src="@asset('images/'.get_the_author_meta('gt_icon', $post->post_author).'.png')}}"
                        alt="">{{get_userdata($post->post_author)->data->display_name}}</p>
                <p>{{get_the_date('m/d/y', $post->ID)}}</p>
                <p class="text-lg mt-1 font-semibold leading-6">{{ $post->post_title }}</p>
                <p class="text-lg mt-3">{!! $post->post_content !!}</p>
            </div>
            <div class="pl-10 mt-10 space-y-10">

                <div class="flex flex-col">
                    <p><img class="w-8 inline"
                            src="@asset('images/'.get_the_author_meta('gt_icon', $post->post_author).'.png')}}"
                            alt="">{{get_userdata($post->post_author)->data->display_name}}</p>
                    <p>{{get_the_date('m/d/y', $post->ID)}}</p>
                    <p class="text-lg mt-3">
                        "SAMPLE RESPONSE". Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus, lectus vel scelerisque
                        sagittis, massa urna dictum risus, et placerat ex lorem nec orci. In ornare mattis interdum.
                        Aenean finibus nec ex a rhoncus. Nullam turpis justo, suscipit dapibus tellus bibendum, lobortis
                        laoreet dolor. </p>
                </div>
            </div>
        </div>
    </section>

@endsection

