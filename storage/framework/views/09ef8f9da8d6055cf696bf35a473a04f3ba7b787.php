<div>
    <div class="card">

        <div class="card header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del usuario">
        </div>

        <?php if($users->count()): ?>
            <div class="card-body">
                <table class="table table-strip">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>    
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->id); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td width="10px">
                                    <a class="btn btn-primary" href="<?php echo e(route('admin.users.edit', $user)); ?>">Editar</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <?php echo e($users->links()); ?>

            </div>

        <?php else: ?>
        <div class="card-body">
            <strong>No hay ningun registro....</strong>
        </div>
    
        <?php endif; ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\DECBLOG\resources\views/livewire/admin/users-index.blade.php ENDPATH**/ ?>