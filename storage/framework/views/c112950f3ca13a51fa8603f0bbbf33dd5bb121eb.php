 

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('temp.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<header class="row tm-welcome-section">
    <h2 class="col-12 text-center tm-section-title">Login Page</h2>
    <p class="col-12 text-center">You may use image has a parallax effect. Total 3 HTML pages included in this template.</p>
</header>

 
<div class="container form-group tm-container-inner-2 tm-contact-section m-auto">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card col-md-12">
             

                <div class="card-body col-md-12 ">
                               
                    <form method="post" class=" col-md-12" action=<?php echo e(route('login')); ?> role="form">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row ">
                            <label for="email" class="col-md-12 "><?php echo e(__('E-Mail')); ?></label>

                            <div class="col-md-12 form-control">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group  col-md-12">
                            <label for="password" class="col-md-12 "><?php echo e(__('Password')); ?></label>

                            <div class="col-md-12">
                                     <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group col-md-12 ">
                            <div class="col-md-10 offset-md-4">
                                <div class="form-check col-md-12">
                                    <input class="form-check-input col-md-10" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label col-md-10" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12 mx-auto mb-2">
                            <div class="col-md-12 ">
                                <button  type="submit" class="btn btn-primary form-control" >
                                    login
                                </button>
                              

                            
                            </div>
                              
                            <a href="<?php echo e(route('register')); ?>" class="btn btn-link">
                                Register
                             </a>
                        </div>
                        <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Forgot Your Password?')); ?>

                        </a>
                    <?php endif; ?>
                    </form>

               





               
                </div> 



                
            </div>
        </div>
    </div>
</div> 
 <?php $__env->stopSection(); ?> 




 

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\elshafey\resources\views/auth/login.blade.php ENDPATH**/ ?>