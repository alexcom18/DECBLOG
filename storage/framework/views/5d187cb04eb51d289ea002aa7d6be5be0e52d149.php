

<?php $__env->startSection('title', 'DEC'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editar categoria</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
    <?php endif; ?>
    <div class="card-body">
        <?php echo Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put' ]); ?>

            <div class="form-group">
                <?php echo Form::label('name', 'Nombre'); ?>

                <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de la categoria']); ?>


                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>          
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <div class="form-group">
                <?php echo Form::label('slug', 'Slug'); ?>

                <?php echo Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug de la categoria', 'readonly']); ?>


                <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>          
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <?php echo Form::submit('Actualizar categoría', ['class' => 'btn btn-primary']); ?>


        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')); ?>"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DECBLOG\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>