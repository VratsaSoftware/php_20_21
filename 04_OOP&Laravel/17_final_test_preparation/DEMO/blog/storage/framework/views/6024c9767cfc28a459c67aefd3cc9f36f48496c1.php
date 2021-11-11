

<h1>Categories</h1>


<?php $__env->startSection('content'); ?>
<?php echo Form::open(['url' => 'categories']); ?>

<?php echo csrf_field(); ?>
<div class="form-group">
	<label>Category name</label>
	<input type="text" name="category_name" value="<?php echo e(old('category_name')); ?>">
	<?php if( $errors->has('category_name') ): ?>
		<?php echo e($errors->first('category_name')); ?>

	<?php endif; ?>
	<?php $__errorArgs = ['category_name'];
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
<div class="form-group">
	<label>Category Description</label>
	<textarea name="category_description"><?php echo e(old('category_description')); ?></textarea>
	<?php if( $errors->has('category_description') ): ?>
		<?php echo e($errors->first('category_description')); ?>

	<?php endif; ?>
</div>	

<input type="submit" name="category_save" value="Save">	
<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\17_final_test_preparation\DEMO\blog\resources\views/categories/create.blade.php ENDPATH**/ ?>