


<?php $__env->startSection('title','VSO Students Blog - Posts'); ?>

<?php $__env->startSection('content'); ?>

<h2>
    All posts
</h2>
<section>
    
    <?php 
    	foreach( $posts as $post ){
    		echo $post->id ;
    		echo "<br>";
    		echo $post->title;
    		echo "<br>";    		
    		echo $post->content;
    		echo "<br>";
    		echo "<hr>";
    	}

    	for($i=0; $i<10; $i++){

    	}
     ?>

     <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     	<?= $post->title?>
     	<br>
     	<?= $post->content ?>
     	<hr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     <?php for($i=0; $i< 10; $i++): ?>
     <?php endfor; ?>


     <?php if(): ?>
     <?php else: ?>
     <?php endif; ?>
</section>
    <img src="http://images.panda.org/assets/images/pages/welcome/welcome.jpg">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\09_Laravel_models_migrations\DEMO\blog\resources\views/posts.blade.php ENDPATH**/ ?>