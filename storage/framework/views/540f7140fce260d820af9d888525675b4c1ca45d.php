<?php $__env->startSection('content'); ?>
<h3 class="center">Juror Information</h3>

    <div>Last name: <?php echo e($juror->LAST_NAME); ?></div>
    <div>First name: <?php echo e($juror->FIRST_NAME); ?></div>
    <div>Date of birth: <?php echo e($juror->DOB); ?></div>
    <div>Id: <?php echo e($juror->id); ?></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dennis.mullen/Documents/laravel-projects/jurors/resources/views/show.blade.php ENDPATH**/ ?>