<div class="card">

    <div class="card header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de la publicacion">
    </div>

    <?php if($posts->count()): ?>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post->id); ?></td>
                            <td><?php echo e($post->name); ?></td>
                            <td with="10px">
                                <a class="btn btn-primary btn-sm" href="<?php echo e(route('admin.posts.edit', $post)); ?>">Editar</a>
                            </td>
                            <td with="10px">
                                <form action="<?php echo e(route('admin.posts.destroy', $post)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                
                                </form>
                            </td>
                        </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <?php echo e($posts->links()); ?>

        </div>
 
    <?php else: ?>
        <div class="card-body">
            <strong>No hay ningun registro....</strong>
        </div>
    
    <?php endif; ?>
</div>

<?php /**PATH C:\laragon\www\DECBLOG\resources\views/livewire/admin/post-index.blade.php ENDPATH**/ ?>