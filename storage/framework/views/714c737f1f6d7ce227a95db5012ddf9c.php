<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="text-center text-green text-xl">
        <p class="max-w-sm mx-auto -tracking-[0.5px]">Je bent geweldig! Wat zullen mensen smullen van jouw donatie.</p>

        
        
        

        

        
        
        
        

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('donate-form', [])->html();
} elseif ($_instance->childHasBeenRendered('Dos0Fuy')) {
    $componentId = $_instance->getRenderedChildComponentId('Dos0Fuy');
    $componentTag = $_instance->getRenderedChildComponentTagName('Dos0Fuy');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Dos0Fuy');
} else {
    $response = \Livewire\Livewire::mount('donate-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('Dos0Fuy', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
































    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/donate.blade.php ENDPATH**/ ?>