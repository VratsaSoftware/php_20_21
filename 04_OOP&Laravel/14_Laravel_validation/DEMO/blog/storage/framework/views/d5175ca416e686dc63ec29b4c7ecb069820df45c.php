

<h1>Edit Tag <?php echo e($tag->tag); ?></h1>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('tags.update', $tag->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div clas="form-group">
            <label for="tag">Tag Name</label>
            <input id="tag" type="text" name="tag" value="<?php echo e($tag->tag); ?>">
        </div>
        <div clas="form-group">
            <label for="description">Description</label>
            <input id="description" type="text" name="description" value=" <?php echo e($tag->description ?? ''); ?>">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\12_Laravel_lab\DEMO\blog\resources\views/tags/edit.blade.php ENDPATH**/ ?>