

<?php $__env->startSection('title', 'DEC'); ?>

<?php $__env->startSection('content_header'); ?>

    <a class="btn btn-secondary btn-sm float-right" href="<?php echo e(route('admin.posts.create')); ?>">Nueva publicacion</a>
    <h1>Listado de publicaciones</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
    <?php endif; ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.post-index')->html();
} elseif ($_instance->childHasBeenRendered('8QAtHDD')) {
    $componentId = $_instance->getRenderedChildComponentId('8QAtHDD');
    $componentTag = $_instance->getRenderedChildComponentTagName('8QAtHDD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8QAtHDD');
} else {
    $response = \Livewire\Livewire::mount('admin.post-index');
    $html = $response->html();
    $_instance->logRenderedChild('8QAtHDD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DECBLOG\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>