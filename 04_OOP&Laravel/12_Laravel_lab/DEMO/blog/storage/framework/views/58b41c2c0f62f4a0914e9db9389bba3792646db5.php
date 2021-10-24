

<h1>Create New Tag</h1>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('tags.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div clas="form-group">
            <label for="tag">Tag Name</label>
            <input id="tag" type="text" name="tag" value="">
        </div>
        <div clas="form-group">
            <label for="description">Description</label>
            <input id="description" type="text" name="description" value="">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\12_Laravel_lab\DEMO\blog\resources\views/tags/create.blade.php ENDPATH**/ ?>