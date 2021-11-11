

<h1>Create New Tag</h1>

<?php $__env->startSection('content'); ?>

    <?php echo Form::open(['url' => 'tags']); ?>

    
       
        <div clas="form-group">
            <label for="tag">Tag Name</label>
            <input id="tag" type="text" name="tag" value="">
        </div>
        <div clas="form-group">
            <label for="description">Description</label>
            <input id="description" type="text" name="description" value="">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    <?php echo Form::close(); ?>


    <?php echo e(<script type="text/javascript">alert(1)</script>); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\13_Laravel_lab_2\DEMO\blog\resources\views/tags/create.blade.php ENDPATH**/ ?>