

<h1>Show Tag <?php echo e($tag->tag); ?></h1>

<?php $__env->startSection('content'); ?>
    <h3>Name</h3>
    <div><?php echo e($tag->tag); ?></div>
    <h3>Description</h3>
    <div><?php echo e($tag->description); ?></div>
    <h3>Visible?</h3>
    <div><?php echo e($tag->is_visible ? 'YES' : 'NO'); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\12_Laravel_lab\DEMO\blog\resources\views/tags/show.blade.php ENDPATH**/ ?>