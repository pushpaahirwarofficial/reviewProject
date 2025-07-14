<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('../template/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <!-- Header Start -->
    <?php echo $__env->make('../template/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header End -->


    <!-- Main-Content Start -->
     <?php echo $__env->yieldContent('main-content'); ?>
    <!-- Main-Content End -->


    <!-- Footer Start -->
    <?php echo $__env->make('../template/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('../template/foot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Footer End -->


</body>

</html><?php /**PATH G:\Laravel\reviewProject\resources\views/layout/app.blade.php ENDPATH**/ ?>