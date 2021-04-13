@extends('layouts.master')
@set($user = wp_get_current_user())
@set($thisthat = get_user_meta($user->ID, 'gt_thisthat',true))

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-16 pb-28">
        <div class="bg-white shadow-accent p-10 rounded-3xl flex flex-col md:flex-row justify-center items-center">
            <div class="flex flex-col w-1/2 items-center">
                <p class="font-semibold text-2xl">
                    <img class="w-11 inline" src="@asset('images/'.get_user_meta($user->ID, 'gt_icon', true).'.png')"
                         alt="" aria-hidden="true">{{$user->data->user_login}}</p>
                <p class="text-lg">{{$user->data->user_email}}</p>
                <a href="#" class="text-lg underline mt-3">Edit email</a>
                <a class="bg-accent px-4 py-2 rounded-md mt-6 font-semibold text-white" href="{{wp_logout_url()}}">Logout</a>
            </div>
            <div class="flex flex-col w-1/2 text-center space-y-6">
                <div class="flex justify-between items-center space-x-1">
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['place']=='beach'?'radio-button-active':''}}">
                        Beach
                    </div>
                    <span class="flex-1 text-sm">or</span>
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['place']=='mountain'?'radio-button-active':''}}">
                        Mountain
                    </div>
                </div>
                <div class="flex justify-between items-center space-x-1">
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['taste']=='sweet'?'radio-button-active':''}}">
                        Sweet
                    </div>
                    <span class="flex-1 text-sm">or</span>
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['taste']=='salty'?'radio-button-active':''}}">
                        Salty
                    </div>
                </div>
                <div class="flex justify-between items-center space-x-1">
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['animal']=='early_bird'?'radio-button-active':''}}">
                        Early Bird
                    </div>
                    <span class="flex-1 text-sm">or</span>
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['animal']=='night_owl'?'radio-button-active':''}}">
                        Night Owl
                    </div>
                </div>
                <div class="flex justify-between items-center space-x-1">
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['genre']=='romance'?'radio-button-active':''}}">
                        Romance
                    </div>
                    <span class="flex-1 text-sm">or</span>
                    <div class="bg-white shadow-accent text-accent font-semibold text-sm py-2 px-1 rounded-lg flex-1 {{$thisthat['genre']=='thriller'?'radio-button-active':''}}">
                        Thriller
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-20">
            <div id="my-activity-panel">
                <div class="border-b border-accent px-48 pb-5">
                    <div class="flex justify-between">
                        <button type="button" data-tab-id="questions-group"
                                class="panel-button font-semibold text-gray-400 text-accent">Your Questions
                        </button>
                        <button type="button" data-tab-id="answers-group"
                                class="panel-button font-semibold text-gray-400">Your Answers
                        </button>
                        <button type="button" id="invite-friend-button" class="font-semibold text-accent">Invite a
                            friend
                        </button>
                    </div>
                </div>

                <div class="mt-10">
                    <div id="questions-group" class="panel-group space-y-8">
                        @php $questionsQuery = ['author' =>  $user->ID, 'orderby' => 'post_date', 'post_type' => 'question'] @endphp
                        @foreach(get_posts($questionsQuery) as $question)
                            @php $term = get_the_terms($question->ID, 'topics')[0] @endphp
                            <div class="bg-white shadow-accent px-8 py-6 rounded-3xl flex flex-col">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <img class="w-8 inline"
                                             src="@asset('images/'.get_the_author_meta('gt_icon',$question->post_author).'.png')}}"
                                             alt="">{{$user->data->user_login}}
                                    </div>
                                    <div class="text-sm font-semibold"> {{$term->name}}</div>
                                </div>
                                <p>{{get_the_date('m/d/y', $question->ID)}}</p>
                                <a href="{{get_permalink($question->ID)}}" target="_blank"
                                   class="text-lg mt-1 font-semibold hover:underline leading-6">{{mb_strimwidth($question->post_title,0,100,'...')}}</a>
                                <a href="{{get_permalink($question->ID)}}" target="_blank"
                                   class="mt-3 hover:underline">{!! mb_strimwidth($question->post_content, 0, 300, '...') !!}</a>
                            </div>
                        @endforeach
                    </div>
                    <div id="answers-group" class="panel-group hidden space-y-8">
                        @php $answersQuery = ['user_id' =>  $user->ID, 'post_type' => 'question'] @endphp
                        @foreach(get_comments($answersQuery) as $answer)
                            @php $term = get_the_terms($answer->comment_post_ID, 'topics')[0] @endphp
                            <div class="bg-white shadow-accent px-8 py-6 rounded-3xl flex flex-col">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <img class="w-8 inline"
                                             src="@asset('images/'.get_the_author_meta('gt_icon',$answer->post_author).'.png')}}"
                                             alt="">{{$user->data->user_login}}
                                    </div>
                                    <div class="text-sm font-semibold"> {{$term->name}}</div>
                                </div>
                                <p>{{get_comment_date('m/d/y', $answer->comment_ID)}}</p>
                                <a href="{{get_permalink($answer->comment_post_ID)}}" target="_blank"
                                   class="mt-3 hover:underline">{!! mb_strimwidth($answer->comment_content, 0, 300, '...') !!}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection