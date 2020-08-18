<html>
    <head>
        <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lumen/bootstrap.min.css" integrity="sha384-GzaBcW6yPIfhF+6VpKMjxbTx6tvR/yRd/yJub90CqoIn2Tz4rRXlSpTFYMKHCifX" crossorigin="anonymous">
    </head>
    <body>
    <?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->yieldSection(); ?>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\zinobeBackEnd\resources\views/layouts/app.blade.php ENDPATH**/ ?>