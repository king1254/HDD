<?php if(!empty(get_static_option('preloader_status'))): ?>
    <?php
        $preloader = 'preloader-default';
        if (!empty(get_static_option('preloader_custom'))){
            $preloader = 'preloader-custom';
        }elseif(empty(get_static_option('preloader_custom')) && !empty(get_static_option('preloader_default'))){
            $preloader = 'preloader-dynamic';
        }
    ?>
    <?php echo $__env->make('frontend.partials.preloader.'.$preloader, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\nexelit-v2.4.1\@core\resources\views/frontend/partials/preloader.blade.php ENDPATH**/ ?>