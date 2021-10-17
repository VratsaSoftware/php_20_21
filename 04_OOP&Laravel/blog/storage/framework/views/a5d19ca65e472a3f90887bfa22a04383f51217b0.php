<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    
    <?php echo $__env->yieldPushContent('head'); ?>

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <header>
    
    </header>

    <nav>
       <ul>
            <li>
                <a href=" <?php echo e(route('landing')); ?>">Homepage</a>
            </li>
            <li>
                <a href=" <?php echo route('posts') ?>">Posts</a>
            </li>
            <li></li>
       </ul>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <aside>
        <?php echo $__env->yieldContent('sidebar'); ?>
    </aside>

    <footer>
        <?php echo $__env->yieldPushContent('foot'); ?>
    </footer>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\blog\resources\views/layouts/master.blade.php ENDPATH**/ ?>