

<?php $__env->startSection('title','All Users'); ?>

<h1>All users</h1>
<?php $__env->startSection('content'); ?>

<table class="table table-responsive">
<thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">IsApproved?</th>
        <th scope="col">Created At</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
    <tr>
        <td><?php echo e($user->name); ?></td>
        <td><?php echo e($user->email); ?></td>
        <td><?php echo e($user->approved); ?></td>
        <td><?php echo e($user->created_at); ?></td>
        <td><?php echo e(isset($user->profile->first_name) ? $user->profile->first_name : 'None'); ?></td>
        <td><?php echo e(isset($user->profile->family) ? $user->profile->family : 'None'); ?></td>
        <td><?php echo e(isset($user->profile->phone) ? $user->profile->phone : 'None'); ?></td>
        <td><?php echo e(!isset($user->profile->address) ? 'None' : $user->profile->address); ?></td>
    </tr>
       
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>


</table>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php_20_21\04_OOP&Laravel\10_Laravel_eloquent_relaions\DEMO\blog\resources\views/admin/users.blade.php ENDPATH**/ ?>