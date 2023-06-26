<x-layout>
    <div class="flex flex-col md:flex-row justify-between md:space-x-8">

        <div class="w-full text-center">
            <a href="{{ route('donate') }}">
                <button class="w-full box flex items-center justify-center text-center bg-green rounded-sm text-white p-1 md:p-0 text-lg md:text-3xl max-w-1/2 max-h-[500px]">
                    Ik maak iemand blij met een pizza
                </button>
            </a>

            <p class="hidden md:block leading-none text-green md:mt-4 lg:text-xl leading-none">Samen hebben we al <span class="text-red">x pizza's</span> gedoneerd.</p>
        </div>

        <div class="w-full text-center">
            <div class="box flex items-center justify-center text-center bg-red rounded-sm text-white p-1 md:p-0 text-lg md:text-3xl max-w-1/2 max-h-[500px]">
                Ik ontvang graag een pizza
            </div>

            <p class="hidden md:block text-red md:mt-4 lg:text-xl leading-none">Samen hebben we al <span class="text-green">x pizza's</span> ontvangen.</p>
        </div>
    </div>

    <div class="hidden md:block text-center mt-8">
        <h3 class="text-red text-xl">De pizza stash</h3>
        <p class="max-w-sm mx-auto mt-2">Deze slice's zijn beschikbaar om opgegeten te worden door de pizzeria, doneer snel en wij zorgen dat ze terecht komen bij een familie die wel een glimlach kan gebruiken ❤️</p>
        <div class="flex justify-center">
            <x-disabled-pizza class="w-20"/>
            <x-disabled-pizza class="w-20"/>
            <x-disabled-pizza class="w-20"/>
            <x-disabled-pizza class="w-20"/>
            <x-disabled-pizza class="w-20"/>
        </div>
    </div>
</x-layout>
