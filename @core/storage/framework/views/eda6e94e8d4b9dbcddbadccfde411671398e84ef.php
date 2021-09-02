<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\laragon\www\nexelit-v2.4.1\@core\resources\views/backend/partials/message.blade.php ENDPATH**/ ?>