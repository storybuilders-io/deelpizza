












<div class="mt-3">
    <?php if(! $clicked): ?>
    <button wire:click="showInput" class="text-white bg-red px-10 py-1 rounded-sm">
        &euro; ...
    </button>
    <?php else: ?>
        <div class="bg-red w-full rounded-sm text-white px-10">
            <span>
                &euro;
            </span>

            <input wire:model.debounce.10ms="donationAmount" type="text" class="bg-red max-w-[50px] py-1 outline-none" autofocus />

        </div>

        <span class="text-green text-lg"><?php echo e($pizzas); ?> pizza's</span>

    <?php endif; ?>
</div>
<?php /**PATH /var/www/html/resources/views/livewire/counter.blade.php ENDPATH**/ ?>