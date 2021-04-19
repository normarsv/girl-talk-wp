@extends('layouts.master')
@set($post = get_queried_object())
@set($term = get_the_terms($post->ID, 'topics')[0])
@set($user_id = get_current_user_id())
@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-36 px-6">
        <div class="text-center">
            @include('elements.section-title', ['text'=>$term->name])
            <a href="{{get_term_link($term)}}" class="text-accent hover:underline mt-8 inline-block">
                <img src="@asset('images/arrow.png')" class="w-3 inline mr-3" alt="">
                Back to {{$term->name}}
            </a>
        </div>
        <div class="mt-14">
            <div>
                <div class="flex flex-col">
                    <p><img class="w-8 inline"
                            src="@asset('images/'.get_the_author_meta('gt_icon', $post->post_author).'.png')}}"
                            alt="">{{get_userdata($post->post_author)->data->display_name}}</p>
                    <p>{{get_the_date('m/d/y', $post->ID)}}</p>
                    <p class="text-lg mt-1 font-semibold leading-6">{{ $post->post_title }}</p>
                    <p class="text-lg mt-3">{!! $post->post_content !!}</p>
                </div>
                <div class="text-right mt-2 space-x-4 flex flex-row justify-end items-center">
                    @if($tags = wp_get_post_tags($post->ID))
                        <span class="bg-accent px-4 py-1 rounded text-xs font-semibold">{{$tags[0]->name}}</span>
                    @endif
                    @if((int)$post->post_author === (int)$user_id)
                        <button type="button" aria-label="delete question"
                                class="delete-question italic hover:underline"
                                title="Delete" data-url="{{admin_url('admin-ajax.php')}}"
                                data-question-id="{{$post->ID}}">
                            Delete
                        </button>
                    @endif
                    <button type="button" aria-label="answer question" class="open-answer-modal"
                            title="Answer Question">
                        <img src="@asset('images/answer.png')" class="w-6 h-6" alt="">
                    </button>
                    @if(get_post_status($post->ID) !== 'flagged')
                        <button type="button" aria-label="answer question" class="flag-question-trigger" title="Flag Question"
                                data-question-id="{{$post->ID}}" data-url="{{admin_url('admin-ajax.php')}}">
                            <img src="@asset('images/flag.png')" class="w-6 h-6" alt="">
                        </button>
                    @endif
                </div>
            </div>
            <div class="pl-10 mt-10 space-y-10">
                @foreach(get_comments(['post_id'=>$post->ID]) as $comment)
                    <div class="flex flex-col">
                        <p><img class="w-8 inline"
                                src="@asset('images/'.get_the_author_meta('gt_icon', $comment->user_id).'.png')}}"
                                alt="">{{get_userdata($comment->user_id)->data->display_name}}</p>
                        <p>{{get_comment_date('m/d/y', $comment->comment_ID)}}</p>
                        <p class="text-lg mt-3">{{$comment->comment_content}}</p>
                        @if((int)$comment->user_id=== (int)$user_id)
                            <div class="text-right mt-2 space-x-3">
                                <button type="button" aria-label="delete answer"
                                        class="delete-answer italic hover:underline"
                                        title="Delete" data-url="{{admin_url('admin-ajax.php')}}"
                                        data-answer-id="{{$comment->comment_ID}}">
                                    Delete
                                </button>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('partials.answer-modal',['post_id'=>$post->ID, 'question'=>$post->post_content])
@endsection

