<x-layout>
    <div class="text-center text-green text-xl">
        <p class="max-w-sm mx-auto -tracking-[0.5px]">Je bent geweldig! Wat zullen mensen smullen van jouw donatie.</p>

        {{--    <form action="{{ url('donate')}} " method="post">--}}
        {{--        @csrf--}}
        {{--        Hoeveel slices wil je doneren?--}}

        {{--        <input class="bg-gray-800" type="number" name="slices" /> <br>--}}

        {{--        <button>--}}
        {{--            Doneer--}}
        {{--        </button>--}}
        {{--    </form>--}}

        <livewire:donate-form />

{{--        <form action="{{ url('donate') }}" method="post" class="flex justify-center space-x-2 mt-4">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <button class="text-white bg-red px-10 py-1 rounded-sm mt-3">--}}
{{--                    &euro; 2--}}
{{--                </button>--}}

{{--                <p class="text-green">1 slice</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <button class="text-white bg-red px-10 py-1 rounded-sm mt-3">--}}
{{--                    &euro; 4--}}
{{--                </button>--}}

{{--                <p class="text-green">2 slice's</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <button class="text-white bg-red px-10 py-1 rounded-sm mt-3">--}}
{{--                    &euro; 10--}}
{{--                </button>--}}

{{--                <p class="text-green">1 pizza</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <livewire:counter />--}}
{{--            </div>--}}
{{--        </form>--}}
    </div>
</x-layout>
