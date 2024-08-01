
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 m-auto">
                <h3 class='text-center'>Details Of One Record</h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created At</th>
                            <th>Operation</th>


                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><?php echo e($result->id); ?></td>
                            <td><?php echo e($result->name); ?></td>
                            <td><?php echo e($result->email); ?></td>
                            <td><?php echo e($result->role); ?></td>
                      
                            <td><?php echo e($result->created_at); ?></td>
                            <td>
                                <a href="<?php echo e(route('home')); ?>" class="btn btn-success">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\elshafey\resources\views/users/show.blade.php ENDPATH**/ ?>