

<?php $__env->startPush('head'); ?>
    <link rel="stylesheet" href=" <?php echo e(asset('styles/style.css')); ?>"> 

<?php $__env->stopPush(); ?>

<?php $__env->startSection('title','VSO Students Blog'); ?>
    

<?php $__env->startSection('content'); ?>

<h2> This is landing page</h2>

<div>
    Info 
</div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('foot'); ?>
    <h3> Time, Date</h3>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\09_Laravel_models_migrations\DEMO\blog\resources\views/homepage.blade.php ENDPATH**/ ?>