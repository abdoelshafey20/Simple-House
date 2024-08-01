<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        <?php echo e(__('language.CATEGORIES')); ?>

                        <a href=<?php echo e(route('categories.create')); ?>

                            class="btn btn-success"><?php echo e(__('language.`CREATE` NEW CATEGORY')); ?></a>
                    </div>
                    <div class="card-body">
                        <?php if(session('message_cate')): ?>
                            <h4 class="alert alert-success text-center"><?php echo e(session('message_cate')); ?></h4>
                        <?php endif; ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th><?php echo e(__('language.IMAGE')); ?></th>
                                    <th><?php echo e(__('language.ID')); ?></th>
                                    <th><?php echo e(__('language.TITLE')); ?></th>
                                    <th><?php echo e(__('language.DESCRIPTION')); ?></th>
                                    <th><?php echo e(__('language.PARENT_ID')); ?></th>
                                    <th><?php echo e(__('language.OPRATION')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo e(asset('img/categories/' . $item->cate_image)); ?>"
                                                style="height:70px;width:70px ">
                                        </td>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->description); ?></td>
                                        <td><?php echo e($item->parent_id); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('categories.show', $item->id)); ?>" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('categories.edit', $item->id)); ?>" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('categories.delete', $item->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        <?php echo e(__('language.PRODUCT')); ?>


                        <a href=<?php echo e(route('products.create')); ?>

                            class="btn btn-success"><?php echo e(__('language.`CREATE` NEW PRODUCT')); ?></a>
                    </div>
                    <div class="card-body">
                        <?php if(session('message_pro')): ?>
                            <h4 class="alert alert-success text-center"><?php echo e(session('message_pro')); ?></h4>
                        <?php endif; ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th><?php echo e(__('language.ID')); ?></th>
                                    <th><?php echo e(__('language.TITLE')); ?></th>
                                    <th><?php echo e(__('language.DESCRIPTION')); ?></th>
                                    <th><?php echo e(__('language.PRICE')); ?></th>
                                    <th><?php echo e(__('language.QUANTITY')); ?></th>
                                    <th><?php echo e(__('language.OPRATION')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->description); ?></td>
                                        <td><?php echo e($item->price); ?></td>
                                        <td><?php echo e($item->quantity); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('products.show', $item->id)); ?>" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('products.edit', $item->id)); ?>" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('products.delete', $item->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        <?php echo e(__('language.POST')); ?>


                        <a href=<?php echo e(route('posts.create')); ?>

                            class="btn btn-success"><?php echo e(__('language.`CREATE` NEW POST')); ?></a>
                    </div>
                    <div class="card-body">
                        <?php if(session('message_post')): ?>
                            <h4 class="alert alert-success text-center"><?php echo e(session('message_post')); ?></h4>
                        <?php endif; ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th><?php echo e(__('language.ID')); ?></th>
                                    <th><?php echo e(__('language.TITLE')); ?></th>
                                    <th><?php echo e(__('language.DESCRIPTION')); ?></th>

                                    <th><?php echo e(__('language.OPRATION')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->description); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('posts.show', $item->id)); ?>" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('posts.edit', $item->id)); ?>" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('posts.delete', $item->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        <?php echo e(__('language.COMMENTS')); ?>

                        <a href=<?php echo e(route('comments.create')); ?>

                            class="btn btn-success"><?php echo e(__('language.`CREATE` NEW COMMENT')); ?></a>
                    </div>
                    <div class="card-body">
                        <?php if(session('message_com')): ?>
                            <h4 class="alert alert-success text-center"><?php echo e(session('message_com')); ?></h4>
                        <?php endif; ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>

                                    <th><?php echo e(__('language.ID')); ?></th>
                                    <th><?php echo e(__('language.TITLE')); ?></th>
                                    <th><?php echo e(__('language.DESCRIPTION')); ?></th>

                                    <th><?php echo e(__('language.OPRATION')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->description); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('comments.show', $item->id)); ?>" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('comments.edit', $item->id)); ?>" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('comments.delete', $item->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        <?php echo e(__('language.USERS')); ?>

                        <a href=<?php echo e(route('users.create')); ?>

                            class="btn btn-success"><?php echo e(__('language.`CREATE` NEW USER')); ?></a>
                    </div>
                    <div class="card-body">
                        <?php if(session('message_user')): ?>
                            <h4 class="alert alert-success text-center"><?php echo e(session('message_user')); ?></h4>
                        <?php endif; ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>

                                    <th><?php echo e(__('language.ID')); ?></th>
                                    <th><?php echo e(__('language.NAME')); ?></th>
                                    <th><?php echo e(__('language.EMAIL')); ?></th>
                                    <th><?php echo e(__('language.ROLE')); ?></th>

                                    <th><?php echo e(__('language.OPRATION')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->role); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('users.show', $item->id)); ?>" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('users.edit', $item->id)); ?>" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('users.delete', $item->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-6">

                <div class="card">
                    <div class="card-header bg-dark text-light d-flex justify-content-between align-items-center">
                        <?php echo e(__('language.BOOK')); ?>


                        <a href=<?php echo e(route('books.create')); ?>

                            class="btn btn-success"><?php echo e(__('language.`CREATE` NEW BOOK')); ?></a>
                    </div>
                    <div class="card-body">
                        <?php if(session('message_book')): ?>
                            <h4 class="alert alert-success text-center"><?php echo e(session('message_book')); ?></h4>
                        <?php endif; ?>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th><?php echo e(__('language.ID')); ?></th>
                                    <th><?php echo e(__('language.TITLE')); ?></th>
                                    <th><?php echo e(__('language.DESCRIPTION')); ?></th>

                                    <th><?php echo e(__('language.OPRATION')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->description); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('books.show', $item->id)); ?>" class="btn btn-success">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('books.edit', $item->id)); ?>" class="btn btn-primary">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="<?php echo e(route('books.delete', $item->id)); ?>" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>





        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\elshafey\resources\views/home.blade.php ENDPATH**/ ?>