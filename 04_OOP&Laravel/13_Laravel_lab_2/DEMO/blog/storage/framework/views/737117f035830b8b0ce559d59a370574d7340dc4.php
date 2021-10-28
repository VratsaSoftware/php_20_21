<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href=" <?php echo e(asset('styles/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

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
                <a href=" <?php echo route('posts'); ?>">Posts</a>
            </li>
            <li>
                <a href=" <?php echo e(route('categories.index')); ?>">Categories</a>
            </li>
            <li>
                <a href=" <?php echo e(route('tags.index')); ?>">Tags</a>
            </li>
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

</html>
<?php /**PATH D:\server774\htdocs\php_20_21\04_OOP&Laravel\13_Laravel_lab_2\DEMO\blog\resources\views/layouts/master.blade.php ENDPATH**/ ?>