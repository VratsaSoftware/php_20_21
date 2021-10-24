

<h1>Category Title <?php echo e($category->name); ?></h1>
<h3>Category Title <?php echo e($category->description); ?></h3>

<?php $__env->startSection('content'); ?>

<h3>Posts:</h3>
<table class="table table-responsive">
<thead>
    <tr>
        <th scope="col">Post Title</th>
        <th scope="col">Post Content</th>
    </tr>
</thead>
<tbody>
 <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($post->title); ?></td>
        <td><?php echo e($post->content); ?></td>
    </tr>
       
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>


</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\10_Laravel_eloquent_relaions\DEMO\blog\resources\views/single_category.blade.php ENDPATH**/ ?>