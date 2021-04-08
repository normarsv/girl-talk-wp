@extends('layouts.master')

@section('content')
    <section class="container max-w-none xl:max-w-6xl pt-12 pb-28 md:pb-40">
        <div class="text-center">
            @include('elements.section-title',['text'=>'Choose a Topic'])
            <p class="text-lg md:text-xl mt-5">Pick a topic to see questions and answers from other Girl Talk users and
                to add your own!</p>
        </div>

        <div class="mt-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 gap-y-20 lg:gap-32">
            @php $terms = get_categories('taxonomy=topics&type=question') @endphp
            @foreach($terms as $term)
                @set($image = get_field('featured_image', $term))
                <a href="{{get_term_link($term)}}" aria-label="{{ $term->name }}" class="w-52 relative m-auto">
                    <div class="aspect-w-8 aspect-h-10 rounded shadow-lg shadow-accent ">
                        <img src="{{ $image['sizes']['large'] }}" alt="" aria-hidden="true"
                             class="w-full h-full rounded object-cover">
                    </div>
                    <h2 class="text-5xl text-accent-light text-center font-title text-shadow absolute bottom-3 left-1/2 transform -translate-x-1/2">{{ $term->name }}</h2>
                </a>
            @endforeach
            <div class="w-52 relative m-auto bg-white">
                <div class="aspect-w-8 aspect-h-10 rounded shadow-lg shadow-accent"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full px-3 text-center">
                    <p class="font-semibold">Have an idea for a topic we should add?</p>
                    <a class="text-sm hover:underline pt-1" href="mailto:hello@weneedtogirltalk.com">Click here and let us know!</a>
                </div>
            </div>
        </div>
    </section>
@endsection