<div class="form-group">
    <?php echo Form::label('name', 'Nombre'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de la publicacion']); ?>


    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>          
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>

<div class="form-group">
    <?php echo Form::label('slug', 'Slug'); ?>

    <?php echo Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug de la publicacion', 'readonly']); ?>


    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>          
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
    <?php echo Form::label('category_id', 'Categoria'); ?>

    <?php echo Form::select('category_id', $categories, null, ['class'=> 'form-control']); ?>


    <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <small class="text-danger"><?php echo e($message); ?></small>          
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <label class="mr-2">
            <?php echo Form::checkbox('tags[]', $tag->id, null); ?>

            <?php echo e($tag->name); ?>

        </label>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <br>
        <small class="text-danger"><?php echo e($message); ?></small>          
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    </div>

    <div class="form-group">
        <p class="font-weight-bold">Estado</p>

        <label>
            <?php echo Form::radio('status', 1, true); ?>

            Borrador
        </label>

        <label>
            <?php echo Form::radio('status', 2); ?>

            Publicado
        </label>

        <hr>

        
        <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-danger"><?php echo e($message); ?></small>          
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                <?php if(isset($post->image)): ?>

                    
                    <img id="picture" src="<?php echo e(asset("storage/" . $post->image->url)); ?>" alt="">
                <?php else: ?>
                    <img id="picture" src="https://cdn.pixabay.com/photo/2021/07/12/19/42/sup-6421284_960_720.jpg" alt="">
                <?php endif; ?>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <?php echo Form::label('file', 'Imagen que se mostrara en la publicacion'); ?>

                <?php echo Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']); ?>

                <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger"><?php echo e($message); ?></small>          
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, officiis eum aperiam tempora, quae ducimus unde animi dignissimos nesciunt pariatur ad fugiat illo sint recusandae fugit deserunt rerum debitis illum.</p>
        </div>

    </div>

    <div class="form-group">
        <?php echo Form::label('extract', 'Extraxto: '); ?>

        <?php echo Form::textarea('extract', null, ['class' => 'form-control']); ?>

    
        
        <?php $__errorArgs = ['extract'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-danger"><?php echo e($message); ?></small>          
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <?php echo Form::label('body', 'Cuerpo de la publicacion: '); ?>

        <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

    
    
        
        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small class="text-danger"><?php echo e($message); ?></small>          
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div><?php /**PATH C:\laragon\www\DECBLOG\resources\views/admin/posts/partials/form.blade.php ENDPATH**/ ?>