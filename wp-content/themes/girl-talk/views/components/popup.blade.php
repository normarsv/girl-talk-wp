<div class="gt-popup hidden">
    @if($type  == 'single')
        @php $content = get_field('popup_single','option') @endphp
        <div class="bg-white shadow shadow-lg rounded-lg fixed z-10 top-24 right-0 md:right-4 p-6 pr-12 w-full md:w-1/2 max-w-650">
            <button type="button" class="close-popup absolute top-2 right-2" aria-label="Close popup">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <p>{!! $content['body'] !!}</p>
        </div>
    @elseif($type  == 'image')
        @php $content = get_field('popup_image','option') @endphp
        <div class="bg-white shadow shadow-lg rounded fixed z-10 top-24 right-0 md:right-4 py-12 px-16 w-full md:w-1/2 max-w-460 text-center">
            <button type="button" class="close-popup absolute top-2 right-2" aria-label="Close popup">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="aspect-w-3 aspect-h-2 ">
                <img class="w-full object-cover rounded m-auto" style="max-width: 500px"
                     src="{{$content['image']['sizes']['large']}}" aria-hidden="true" alt=""/>
            </div>
            <p class="font-semibold text-lg mt-5">{{ $content['title'] }}</p>
            <p class="mt-2">{!! $content['body'] !!}</p>
            @if($content['cta']!='')
                <a href="{{$content['cta']['url']}}" target="{{$content['cta']['target']}}"
                   class="block mt-5 bg-accent px-4 py-2 rounded-lg font-semibold text-white">{{$content['cta']['title']}}</a>
            @endif
        </div>
    @elseif($type  == 'banner')
        @php $content = get_field('popup_top_banner','option') @endphp
        <div class="bg-white py-3 px-8 w-full flex flex-col md:flex-row text-center items-center justify-center">
            <button type="button" class="close-popup absolute top-2 right-2" aria-label="Close banner">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <p class="font-semibold text-lg">{{ $content['title'] }}</p>
            <span class="px-2">{{ $content['body'] }}</span>
            @if($content['cta']!='')
                <a href="{{$content['cta']['url']}}" target="{{$content['cta']['target']}}"
                   class="text-accent underline">{{$content['cta']['title']}}</a>
            @endif
        </div>
    @endif
</div>