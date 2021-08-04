<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <div class="container py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <article class="w-full h-80 bg-cover bg-center <?php if($loop->first): ?> md:col-span-2 <?php endif; ?>" style="background-image: url(<?php if($post->image): ?> <?php echo e(asset("storage/" . $post->image->url)); ?> <?php else: ?> https://cdn.pixabay.com/photo/2021/07/12/19/42/sup-6421284_960_720.jpg <?php endif; ?>)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('posts.tag', $tag)); ?>" class="inline-block px-3 h-6 bg-<?php echo e($tag->color); ?>-600 text-white ronde"><?php echo e($tag->name); ?></a> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="<?php echo e(route('posts.show', $post)); ?>">
                                <?php echo e($post->name); ?>

                            </a>
                        </h1>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <div class="mt-4">
            <?php echo e($posts->links()); ?>

        </div>

    </div>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\DECBLOG\resources\views/posts/index.blade.php ENDPATH**/ ?>