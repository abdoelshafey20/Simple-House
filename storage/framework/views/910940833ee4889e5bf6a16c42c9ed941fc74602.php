
<div class="container">

 <div class="placeholder">
    <div class="parallax-window" data-parallax="scroll" data-image-src=<?php echo e(asset('img/simple-house-01.jpg')); ?>>
        <div class="tm-header">
            <div class="row tm-header-inner">
                <div class="col-md-6 col-12">
                    <img src=<?php echo e(asset('img/simple-house-logo.png')); ?> alt="Logo" class="tm-site-logo" />
                    <div class="tm-site-text-box">
                        <h1 class="tm-site-title">Simple House</h1>
                        <h6 class="tm-site-description">new restaurant template</h6>
                    </div>
                </div>
                <nav class="col-md-7 col-12 tm-nav">
                    <ul class="tm-nav-ul">
                        <li class="tm-nav-li"><a href=<?php echo e(route('welcomepage')); ?> class="tm-nav-link active">Home</a></li>
                        <li class="tm-nav-li"><a href=<?php echo e(route('about')); ?> class="tm-nav-link">About</a></li>
                        <li class="tm-nav-li"><a href=<?php echo e(route('contact')); ?> class="tm-nav-link">Contact</a></li>
                       
                       
                        <li class="tm-nav-li"> <a href=<?php echo e(route('home')); ?> class="tm-nav-link">Dashboard</a></li>
                       
                        
                     

                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="tm-nav-li">
                            <a class="tm-nav-link"   rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <?php echo e($properties['native']); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="tm-nav-li">
                                <a class="tm-nav-link" href=<?php echo e(route('login')); ?>><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="tm-nav-li">
                                    <a class="tm-nav-link" href=<?php echo e(route('register')); ?>><?php echo e(__('Register')); ?></a>
                                   
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="tm-nav-li dropdown">
                                <a id="navbarDropdown" class="tm-nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href=<?php echo e(route('logout')); ?>

                                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action=<?php echo e(route('logout')); ?> method="POST" class="d-none tm-nav-link">
                                        <?php echo csrf_field(); ?>
                                                                                            
                                                    
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div><?php /**PATH C:\laravel\elshafey\resources\views/temp/navbar.blade.php ENDPATH**/ ?>