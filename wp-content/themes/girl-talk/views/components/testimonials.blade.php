<section class="py-20">
    <div class="flex flex-col space-y-16 container">
        @foreach($cards as $card)
            <div class="bg-white shadow-accent shadow-lg p-10 lg:w-3/5 rounded-2xl {{$loop->odd ? 'self-end' : ''}}">
                <span class="text-lg leading-normal">{!! $card['body'] !!}</span>
                <div class="flex space-x-2 mt-6 justify-center items-center">
                    @if($card['icon'])
                        <img src="{{$card['icon']['sizes']['thumbnail']}}" class="w-8" alt="">
                    @endif
                    <span class="font-black">{{$card['author']}}</span>
                </div>
            </div>
        @endforeach

    </div>
</section>