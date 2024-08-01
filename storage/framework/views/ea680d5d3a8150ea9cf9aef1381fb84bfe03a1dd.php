
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto">
            <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('comments.saveedit')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="old_id"  value="<?php echo e($item->id); ?>">

                <label>ID</label>
                <input class="form-control mb-4" type="text" name="id" value="<?php echo e($item->id); ?>">
                
                <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             

                <label>Title_en</label>
                <input class="form-control mb-4" type="text" name="title_en" value="<?php echo e($item->title_en); ?>">
                  
                <?php $__errorArgs = ['title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              
                <label>Title_ar</label>
                <input class="form-control mb-4" type="text" name="title_ar" value="<?php echo e($item->title_ar); ?>">
                
                  
                <?php $__errorArgs = ['title_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              
                <label>Description_en</label>
                <input class="form-control mb-4" type="text" name="description_en" value="<?php echo e($item->description_en); ?>">
                  
                <?php $__errorArgs = ['description_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               
                
                <label>Description_ar</label>
                <input class="form-control mb-4" type="text" name="description_ar" value="<?php echo e($item->description_ar); ?>">
                    
                   
                <?php $__errorArgs = ['description_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
             
                <input type="submit" value="Save Edit" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\elshafey\resources\views/comments/edit.blade.php ENDPATH**/ ?>