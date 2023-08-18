<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Channels</h1>
        <a href="<?php echo e(route('channels.create')); ?>" class="btn btn-primary">Create Channel</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Subscribers</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($channel->id); ?></td>
                <td><?php echo e($channel->ChannelName); ?></td>
                <td><?php echo e($channel->Description); ?></td>
                <td><?php echo e($channel->SubscribersCount); ?></td>
                <td><?php echo e($channel->URL); ?></td>
                <td>
                    <a href="<?php echo e(route('channels.edit', $channel->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('channels.destroy', $channel->id)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/airm1/Workspace/outsource/huy-laravel-fakutube/resources/views/channels/index.blade.php ENDPATH**/ ?>