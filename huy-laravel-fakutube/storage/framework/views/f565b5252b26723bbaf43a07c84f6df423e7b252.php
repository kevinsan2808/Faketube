<?php $__env->startSection('content'); ?>
    <h1><?php echo e(isset($channel) ? 'Edit Channel' : 'Create Channel'); ?></h1>
    <form action="<?php echo e(isset($channel) ? route('channels.update', $channel->id) : route('channels.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($channel)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <div class="form-group">
            <label for="ChannelName">Name</label>
            <input type="text" id="ChannelName" name="ChannelName" class="form-control" value="<?php echo e($channel->ChannelName ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea id="Description" name="Description" class="form-control"><?php echo e($channel->Description ?? ''); ?></textarea>
        </div>
        <div class="form-group">
            <label for="SubscribersCount">Subscribers Count</label>
            <input type="number" id="SubscribersCount" name="SubscribersCount" class="form-control" value="<?php echo e($channel->SubscribersCount ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="URL">URL</label>
            <input type="url" id="URL" name="URL" class="form-control" value="<?php echo e($channel->URL ?? ''); ?>">
        </div>

        <button type="submit" class="btn btn-success"><?php echo e(isset($channel) ? 'Update' : 'Create'); ?></button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/airm1/Workspace/outsource/huy-laravel-fakutube/resources/views/channels/form.blade.php ENDPATH**/ ?>