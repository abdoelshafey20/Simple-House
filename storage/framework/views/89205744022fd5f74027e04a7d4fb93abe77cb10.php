
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 m-auto ">
            <h3 class="text-center">Create New Category</h3>
                <form action="<?php echo e(route('categories.savenew')); ?>" method="post" enctype="multipart/form-data">
                    
                    <?php echo csrf_field(); ?>
                <label >Image</label>
                <input type="file" name="cate_image" class="form-control mb-3">    
                
                <?php $__errorArgs = ['cate_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label >ID</label>
                <input type="text" name="id" class="form-control mb-3">    
              
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
               
                <label >Title_en</label>
                <input type="text" name="title_en" class="form-control mb-3">    
                
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
                  
                  <label >Title_ar</label>
                  <input type="text" name="title_ar" class="form-control mb-3">    
                  
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
                    
                    <label >Description_en</label>
                    <input type="text" name="description_en" class="form-control mb-3">    
                    
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
                      
                      <label >Description_ar</label>
                      <input type="text" name="description_ar" class="form-control mb-3">    
                      
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
                        
                        <label >Parent_id</label>
                       <select name="parent_id" class="form-control mb-3">
                        <option value="main">Main Category</option>
                        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item->parent_id =="main"): ?>
                        <option value="<?php echo e($item->title_en); ?>"><?php echo e($item->id); ?>-<?php echo e($item->title_en); ?></option>     
                        <?php endif; ?> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>    
                        
                          <?php $__errorArgs = ['parent_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="alert alert-danger"><?php echo e($message); ?></div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               
                <input type="submit" class="btn btn-success btn-block"value="Create New Category">

                </form>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\elshafey\resources\views/categories/create.blade.php ENDPATH**/ ?>