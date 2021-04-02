<section class="bg-accent-light">
    <div class="container pt-24 pb-36">
        @include('elements.section-title',['text'=>$title])
        <p class="text-2xl text-center mt-5">{{$description}}</p>
        <div class="flex flex-col justify-center items-center flex-col lg:flex-row lg:flex-wrap mt-24 2xl:px-16">
            @foreach($cards as $card)
                <div class="bg-white text-center my-4 md:my-8 md:mx-8 w-full  lg:w-96 py-8 px-5 rounded-md shadow-lg flex flex-col justify-center items-center text-xl">
                    @if($card['logo_link'] !== '')
                        <a class="h-16" href="{{$card['logo_link'] }}"
                           aria-label="{{$card['title']}}" target="_blank">
                            <img class="w-full h-full max-w-210 object-contain"
                                 src="{{$card['logo']['sizes']['large']}}"
                                 alt="{{$card['title']}}">
                        </a>
                    @else
                        <div class="h-16">
                            <img class="w-full h-full max-w-210 object-contain"
                                 src="{{$card['logo']['sizes']['large']}}"
                                 alt="{{$card['title']}}">
                        </div>
                    @endif
                    <p class="mt-3 font-semibold">{{$card['title']}}</p>
                    @if($card['url'] !== '')
                        <a class="hover:underline" href="{{$card['url']}}" target="_blank">{{$card['url']}}</a>
                    @endif
                    @if($card['email'] !== '')
                        <a class="hover:underline" href="mailto:{{$card['email']}}">Email: {{$card['email']}}</a>
                    @endif
                    @if($card['phone'] !== '')
                        <a class="hover:underline" href="tel:{{$card['phone']}}">Phone Number: {{$card['phone']}}</a>
                    @endif
                </div>
            @endforeach
            <div class="bg-white text-center my-4 md:my-8 md:mx-8 w-full  lg:w-96 py-8 px-5 rounded-md shadow-lg flex flex-col justify-center items-center text-xl">
                <p class="mt-3 font-semibold">Have a suggestion for a resource we should add?</p>
                <a class="hover:underline" href="mailto:hello@weneedtogirltalk.com">Click here and let us know!</a>
            </div>
        </div>
    </div>
</section>