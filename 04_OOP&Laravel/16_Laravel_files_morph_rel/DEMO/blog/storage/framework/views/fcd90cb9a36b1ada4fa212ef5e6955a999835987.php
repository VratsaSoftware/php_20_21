

<h1>Categories</h1>

<?php $__env->startSection('content'); ?>
    <?php echo Form::open(['url' => 'categories', 'enctype' => 'multipart/form-data']); ?>

    <?php echo csrf_field(); ?>
    <label>Category name</label>
    <input type="text" name="category_name">
    <label>Category Description</label>
    <textarea name="category_description"></textarea>
    <div class="form-group">
        <label for="image"> Upload Tag Image</label>
        <input type="file" name="image_file" id="image">
        <?php $__errorArgs = ['image_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <input type="submit" name="category_save" value="Save">
    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\14_Laravel_validation\DEMO\blog\resources\views/categories/create.blade.php ENDPATH**/ ?>