

<h1>Categories</h1>

<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route( 'categories.update', $category->id )); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" name="_method" value="PUT">
    <label>Category name</label>
    <input type="text" name="category_name" value="<?php echo e($category->name); ?>">
    <label>Category Description</label>
    <textarea name="category_description"><?php echo e($category->description); ?></textarea>
    <input type="submit" name="category_save" value="Save">
</form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\11_Laravel_resource_controllers\DEMO\blog\resources\views/categories/edit.blade.php ENDPATH**/ ?>