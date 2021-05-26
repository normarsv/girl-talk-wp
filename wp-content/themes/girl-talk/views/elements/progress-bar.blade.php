<div class="flex flex row justify-center items-center m-auto">
    <div class="w-2/3 rounded overflow-hidden h-5 flex flex-row">
        @if($step >= 0)
            <div class="w-1/3 h-full" style="background-color: #FFE1EB"></div>
        @endif
        @if($step >= 2)
            <div class="w-1/3 h-full" style="background-color: #FFD1D8"></div>
        @else
            <div class="border-r border-t border-b w-1/3 h-full" style="border-color: #FFE1EB"></div>
        @endif
        @if($step >= 3)
            <div class="w-1/3 h-full" style="background-color: #FFBAC4"></div>
        @else
            <div class="border-r border-t border-b rounded-r w-1/3 h-full" style="border-color: #FFE1EB"></div>
        @endif
    </div>
    <span class="font-bold ml-4">{{$step}}/3</span>
</div>