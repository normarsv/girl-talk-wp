<section>
    @include('elements.wave',['inverted'=>false])
    <div class="bg-accent">
        <div class="container pt-24 pb-36">
            @include('elements.section-title',['text'=>$title])
            <p class="text-2xl text-center mt-5">{{$description}}</p>
            <div class="flex flex-col space-y-8 lg:space-y-0 lg:space-x-3 lg:flex-row lg:flex-wrap justify-between items-center mt-24 2xl:px-16">
                @foreach($cards as $card)
                    <div class="bg-accent-light w-full sm:w-80 xl:w-96 py-8 px-5 rounded-md shadow-lg flex flex-col justify-center items-center text-xl">
                        <img class="w-10" src="{{$card['icon']['sizes']['thumbnail']}}" alt="">
                        <p class="mt-3 font-semibold">{{$card['title']}}</p>
                        @if($card['description_type'] == 'none')
                            <p>{{$card['text']}}</p>
                        @elseif($card['description_type'] == 'email')
                            <a class="hover:underline" href="mailto:{{$card['email']}}">{{$card['email']}}</a>
                        @elseif($card['description_type'] == 'phone')
                            <a class="hover:underline" href="tel:{{$card['phone']}}">{{$card['phone']}}</a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>