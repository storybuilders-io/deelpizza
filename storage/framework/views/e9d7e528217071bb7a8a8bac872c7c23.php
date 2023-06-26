<div>
    <?php if($showDonationButtons): ?>
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
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('counter', [])->html();
} elseif ($_instance->childHasBeenRendered('l3007311792-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3007311792-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3007311792-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3007311792-0');
} else {
    $response = \Livewire\Livewire::mount('counter', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3007311792-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php endif; ?>

    <div class="mt-4 text-red">
        <p wire:loading>We zetten je betaling klaar..</p>

        <?php if(! $showDonationButtons): ?>
            <p>Je wordt doorgestuurd naar de betalingsprovider, tot zo!</p>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/donate-form.blade.php ENDPATH**/ ?>