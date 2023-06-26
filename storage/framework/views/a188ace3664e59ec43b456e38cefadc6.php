<nav class="flex justify-center md:items-center md:justify-between h-20 md:px-20">
    <div class="flex items-center">
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.logo','data' => ['class' => 'w-16']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <h2 class="ml-6 leading-none uppercase text-green">DeelPizza.nl</h2>
    </div>

    <ul class="hidden md:block">
        <li class="space-x-14 text-green leading-none">
            <a href="#">FAQ</a>
            <a href="#">Ontvang</a>
            <a href="#">Doe mee</a>
            <a class="text-red" href="#">Doneer</a>
        </li>
    </ul>
</nav>
<?php /**PATH /var/www/html/resources/views/components/nav.blade.php ENDPATH**/ ?>