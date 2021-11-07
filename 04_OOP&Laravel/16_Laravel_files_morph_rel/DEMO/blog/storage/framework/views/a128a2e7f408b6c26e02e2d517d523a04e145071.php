

<h1>Tags</h1>

<?php $__env->startSection('content'); ?>


    

    <?php if(Session::has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('message')); ?>

        </div>
    <?php endif; ?>

    <?php if($error = Session::get('error')): ?>
        <div class="alert alert-success">
            <?php echo e($error); ?>

        </div>
    <?php endif; ?>


    <a href="<?php echo e(route('tags.create')); ?>" class="btn btn-primary">Add new</a>
    <?php if($tags->isNotEmpty()): ?>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col">Tag</th>
                    <th scope="col">Description</th>
                    <th scope="col">Visibility</th>
                    <th scope="col">Editors Group Email</th>
                    <th scope="col">External Info Url</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(route('tags.show', $tag->id)); ?>"> <?php echo e($tag->tag); ?></a></td>
                        <td><?php echo e($tag->description); ?></td>
                        <td> <?php echo e($tag->is_visible ? 'YES' : 'NO'); ?></td>
                        <td> <?php echo e($tag->email); ?></td>
                        <td> <?php echo e($tag->url ?? 'NO'); ?></td>
                        
                        <td>
                            <?php if($tag->image): ?>
                                <img src="<?php echo e(asset('storage/' . $tag->image->image_name)); ?>" alt="" height="50px">
                            <?php else: ?>
                                No Image!
                            <?php endif; ?>
                        </td>
                        <td>
                            <form action="<?php echo e(route('tags.destroy', $tag->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a href="<?php echo e(route('tags.edit', $tag->id)); ?>" class="btn btn-warning">Edit</a>
                                <button class="btn btn-danger" type="submit"> Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php else: ?>
        <div>
            <h3>No Tags in DB</h3>
        </div>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\php_20_21\04_OOP&Laravel\16_Laravel_files_morph_rel\DEMO\blog\resources\views/tags/index.blade.php ENDPATH**/ ?>