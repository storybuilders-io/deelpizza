{{--<div>--}}
{{--    --}}
{{--    <div class="pizza w-[400px] h-[400px] relative bg-pizza before:content-[''] rounded-[50%] border-[4px]">--}}
{{--        <div class="slices flex relative w-full h-full justify-center">--}}
{{--            <div class="slice slice-1 rotate-45"></div>--}}
{{--            <div class="slice slice-2 rotate-90" /></div>--}}
{{--        <div class="slice slice-3 rotate-[135deg]" /></div>--}}
{{--    <div class="slice" /></div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}

<div class="mt-3">
    @if(! $clicked)
    <button wire:click="showInput" class="text-white bg-red px-10 py-1 rounded-sm">
        &euro; ...
    </button>
    @else
        <div class="bg-red w-full rounded-sm text-white px-10">
            <span>
                &euro;
            </span>

            <input wire:model.debounce.10ms="donationAmount" type="text" class="bg-red max-w-[50px] py-1 outline-none" autofocus />

        </div>

        <span class="text-green text-lg">{{ $pizzas }} pizza's</span>

    @endif
</div>
