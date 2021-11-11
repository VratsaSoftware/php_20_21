


<?php $__env->startSection('title','VSO Students Blog - Posts'); ?>

<?php $__env->startSection('content'); ?>

<h2>
    All posts
</h2>
<section>


	 <table class="table table-responsive">
		<tr>
			<td>Title</td>
			<td>Content</td>
			<td>Category Title</td>
			<td>Category Description</td>
		</tr>

     <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
		<tr>
			<td><?php echo e($post->title); ?></td>
			<td><?php echo e($post->content); ?></td>
			<td><?php echo e($post->category->name); ?></td>
			<td><?php echo e($post->category->description); ?></td>
		</tr>


		
     	
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	 </table>

     <?php for($i=0; $i< 10; $i++): ?>
     <?php endfor; ?>


     
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\10_Laravel_eloquent_relaions\DEMO\blog\resources\views/posts.blade.php ENDPATH**/ ?>