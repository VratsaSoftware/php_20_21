

<h1>Categories</h1>

<?php $__env->startSection('content'); ?>

<table class="table table-responsive">
<thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Details</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <tr>
        <td><?php echo e($category->name); ?></td>
        <td><?php echo e($category->description); ?></td>
        <td> <a href="<?php echo e(route('categoryDetails', ['id' => $category->id])); ?>"> Details</a></td>
    </tr>
       
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>


</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\blog\resources\views/categories/index.blade.php ENDPATH**/ ?>