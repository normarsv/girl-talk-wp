<section>
    @include('elements.wave',['inverted'=>false])
    <div class="bg-accent">
        <div class="container flex flex-col pt-10 md:pb-10">
            @foreach($cards as $card)
                @php $is_image_position_right = $card['image_position'] == 'right' @endphp
                <div class="flex flex-col lg:flex-row justify-between items-center xl:px-20 py-10 lg:py-0 {{$is_image_position_right ? 'lg:flex-row-reverse' : ''}}">
                    <div class="w-52 md:w-80 xl:w-80 shadow-lg">
                        <div class="aspect-w-7 aspect-h-10">
                            <img src="{{$card['image']['sizes']['large']}}" alt="placeholder"
                                 class="rounded object-cover">
                        </div>
                    </div>
                    <div class="py-10 lg:py-0 text-center lg:text-left px-6 {{$is_image_position_right ? 'lg:pl-0 lg:pr-10' : 'lg:pl-14 lg:pr-0 pr-0 '}} lg:w-3/5">
                        <h2 class="font-title font-dark text-4xl xl:text-5xl">{{$card['title']}}</h2>
                        @if($card['body'])
                            <p class="font-dark text-lg leading-normal md:text-xl mt-5">
                                {!! $card['body'] !!}
                            </p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('elements.wave', ['inverted'=>true])
</section>