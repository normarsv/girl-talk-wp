<section class="w-full overflow-hidden">
    <div class="py-8 flex flex-row animate-scroll-infinite">
        <div class="flex flex-row font-bold text-xl whitespace-nowrap">
            @set($i=0)
            @while($i<=9)
                @set($i)
                <p class="px-2 {{$i % 2 ? '': 'text-accent'}}" aria-hidden="true">{{$text}}</p>
            @endwhile
        </div>
    </div>
</section>