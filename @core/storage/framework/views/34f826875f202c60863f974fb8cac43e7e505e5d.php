<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.home-pages.home-'.get_static_option('home_page_variant'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\nexelit-v2.4.1\@core\resources\views/frontend/frontend-home.blade.php ENDPATH**/ ?>