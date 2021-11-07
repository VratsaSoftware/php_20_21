

<h1>Tags</h1>

<?php $__env->startSection('content'); ?>
    <?php echo e(dd(Session::all())); ?>

    <?php if($message = Session::get('message')): ?>
        <div class="bg-success">
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>
    <?php if(!is_null($tags) && !$tags->isEmpty()): ?>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">Tag</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tag->tag); ?></td>
                        <td>
                            <form action="<?php echo e(route('tags.destroy', $tag->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a href="<?php echo e(route('tags.edit', $tag->id)); ?>" class="btn btn-warning">Edit</a>
                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
    <?php endif; ?>

    <a href="<?php echo e(route('tags.create')); ?>" class="btn btn-primary">Create</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\php_20_21\04_OOP&Laravel\10_Laravel_eloquent_relations\DEMO\blog\resources\views/tags.blade.php ENDPATH**/ ?>