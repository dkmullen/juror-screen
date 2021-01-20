<?php $__env->startSection('content'); ?>

<h3 class="center">Juror Information</h3>
<div class="center gray">
    If you have been summoned for jury duty, you can find your record by filling in your
    Driver's License and Date of Birth below.
</div>
<form method="POST" action="/jurors">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="id" class="form-label">Driver's License Number:</label><br>
        <input type="text" class="form-control" name="id" value="<?php echo e($id ?? ''); ?>" required><br>
    </div>
    <div class="mb-3">
        <label for="id" class="form-label">DOB:</label><br>
        <input type="date" class="form-control" name="dob" value="<?php echo e($dob ?? ''); ?>" required><br>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit">
    <?php if(session('message')): ?>
    <div class="session-message"><?php echo e(session('message')); ?></div>
    <?php endif; ?>
    <div class="session-message"><?php echo e($err ?? ''); ?></div>
</form> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dennis.mullen/Documents/laravel-projects/jurors/resources/views/home.blade.php ENDPATH**/ ?>