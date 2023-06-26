<div>
    @if($showDonationButtons)
    <div class="flex justify-center space-x-2 mt-4" wire:loading.remove>
        <div>
            <button wire:click="donate(2)" class="text-white bg-red px-10 py-1 rounded-sm mt-3">
                &euro; 2
            </button>

            <p class="text-green">1 slice</p>
        </div>

        <div>
            <button wire:click="donate(4)" class="text-white bg-red px-10 py-1 rounded-sm mt-3">
                &euro; 4
            </button>

            <p class="text-green">2 slice's</p>
        </div>

        <div>
            <button wire:click="donate(10)" class="text-white bg-red px-10 py-1 rounded-sm mt-3">
                &euro; 10
            </button>

            <p class="text-green">1 pizza</p>
        </div>

        <div>
            <livewire:counter/>
        </div>
    </div>
    @endif

    <div class="mt-4 text-red">
        <p wire:loading>We zetten je betaling klaar..</p>

        @if(! $showDonationButtons)
            <p>Je wordt doorgestuurd naar de betalingsprovider, tot zo!</p>
        @endif
    </div>
</div>
