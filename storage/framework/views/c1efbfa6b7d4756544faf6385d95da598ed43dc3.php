<div class="form-group">
    <?php echo Form::label('name', 'Nombre'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de la etiqueta...']); ?>


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

    <?php echo Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug de la etiqueta...', 'readonly']); ?>


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

<div class="form-group">
    

    <?php echo Form::label('color', 'Color:'); ?>

    <?php echo Form::select('color', $colors, null, ['class'=>'form-control']); ?>


    <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <small class="text-danger"><?php echo e($message); ?></small>          
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH C:\laragon\www\DECBLOG\resources\views/admin/tags/partials/form.blade.php ENDPATH**/ ?>