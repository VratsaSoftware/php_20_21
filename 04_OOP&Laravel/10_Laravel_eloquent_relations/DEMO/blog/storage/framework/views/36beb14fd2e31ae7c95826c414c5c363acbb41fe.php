

<h1>Edit tag <?php echo e($tag->tag); ?></h1>

<?php $__env->startSection('content'); ?>

    <form class="form" method="post" action="<?php echo e(route('tags.update', $tag->id)); ?>">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="form_group">
            <label for="tag">Tag</label>
            <input class="form-control" id="tag" type="text" name="tag" value="<?php echo e($tag->tag ?? ''); ?>">
        </div>
        <div>
            <button type="submit" class="btn btn-success"> Submit</button>
        </div>
    </form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\php_20_21\04_OOP&Laravel\10_Laravel_eloquent_relations\DEMO\blog\resources\views/edit_tag.blade.php ENDPATH**/ ?>