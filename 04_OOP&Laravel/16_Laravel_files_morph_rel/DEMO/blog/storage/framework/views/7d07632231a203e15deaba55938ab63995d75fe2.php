

<h1>Categories</h1>

<?php $__env->startSection('content'); ?>
<?php echo Form::open(['url' => 'categories']); ?>

    <?php echo csrf_field(); ?>
    <label>Category name</label>
    <input type="text" name="category_name">
    <label>Category Description</label>
    <textarea name="category_description"></textarea>
    <input type="submit" name="category_save" value="Save">
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\13_Laravel_lab_2\DEMO\blog\resources\views/categories/create.blade.php ENDPATH**/ ?>