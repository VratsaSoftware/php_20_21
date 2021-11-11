

<h1>Categories</h1>

<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('categories.create')); ?>">Add category</a>
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
            <td><a href="<?php echo e(route('categories.edit', $category->id )); ?>"><?php echo e($category->name); ?></a></td>
            <td><?php echo e($category->description); ?></td>
            <td> <a href="<?php echo e(route('categoryDetails', ['id' => $category->id])); ?>"> Details</a></td>
            <td>
                <form action="<?php echo e(route('categories.destroy', $category->id )); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Delete</button>
                </form>
            </td>

        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>


</table>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\12_Laravel_lab\DEMO\blog\resources\views/categories/index.blade.php ENDPATH**/ ?>