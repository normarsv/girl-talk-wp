<section class="container py-16 md:py-16 xl:px-28 md:pb-32">
    @include('elements.section-title',['text'=>$title])

    <div class="flex flex-col md:flex-row items-center justify-start mt-10">
        <div class="text-2xl max-w-650">
            {!! $body !!}
        </div>
        <div class="w-60 mt-14 md:w-full lg:w-60 md:ml-20 lg:ml-40 md:-mt-20">
            <div class="aspect-w-8 aspect-h-10 rounded shadow-lg shadow-accent">
                <img src="{{ $image_profile['sizes']['large'] }}" alt="placeholder"
                     class="w-full h-full rounded object-cover">
            </div>
            <p class="font-title mt-5 text-center text-xl">{{ wp_get_attachment_caption($image_profile['id']) }}</p>
        </div>
    </div>
</section>