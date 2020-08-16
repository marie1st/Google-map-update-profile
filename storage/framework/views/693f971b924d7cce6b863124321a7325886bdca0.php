<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <!-- User Profile -->
            <div class="card user-profile">
                <div class="card-header">
                    <h4 class="float-left mb-0 mt-2">User Profile</h4>
                    <a href="<?php echo e(url('/profile/edit'), false); ?>" class="btn btn-primary btn-100 float-right text-uppercase">Edit</a>
                </div>

                <div class="card-body pb-0 pt-0">
                <?php if(session('status')): ?>
                    <div class="alert alert-success mb-0 mt-3">
                        <strong><?php echo e(session('status'), false); ?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                </div>
                
                <?php if(config('laravelextendeduser.profile.avatar') !== false): ?>
                <div class="card-body border-bottom">
                    <!-- Image -->
                    <div class="user-profile-image">
                        <div class="user-profile-image--default">
                            <img src="<?php echo e(url($user->image), false); ?>">
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="card-header">
                    <h5 class="float-left mb-0 mt-1 w-100 text-center">
                        <span class="text-info"><?php echo e($user->email, false); ?></span> <small class="text-muted font-italic">(Private)</small>
                    </h5>
                </div>

                <div class="card-body">
                   <div class="row mb-2">
                        <div class="col-sm-6 text-sm-right">Name</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted"><?php echo e($user->name, false); ?></span>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Job</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['job'])) ? $user->profile['job'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Company</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['company'])) ? $user->profile['company'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                </div>

                <?php if(config('laravelextendeduser.profile.contact') !== false): ?>
                <div class="card-header border-top">
                    <h5 class="float-left mb-0 mt-1">Contact</h5>
                </div>
                
                <div class="card-body">
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Phone no.</div>
                        <div class="col-sm-6 field-bg">
                        <?php if($phones =  (old()) ? old('phones') : ( (isset($user->profile['phones'])) ? $user->profile['phones'] : '' )): ?>
                            <?php $__currentLoopData = $phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <span class="text-muted">
                                <?php if($phone[0]): ?>
                                   <?php echo e('+'.$phone[0].' '.$phone[1], false); ?>

                                <?php endif; ?>
                                </span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php endif; ?>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Mobile no.</div>
                        <div class="col-sm-6 field-bg">
                        <?php if($mobiles =  (old()) ? old('mobiles') : ( (isset($user->profile['mobiles'])) ? $user->profile['mobiles'] : '' )): ?>
                            <?php $__currentLoopData = $mobiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <span class="text-muted">
                                <?php if($mobile[0]): ?>
                                   <?php echo e('+'.$mobile[0].' '.$mobile[1], false); ?>

                                <?php endif; ?>
                                </span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php endif; ?>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Email</div>
                        <div class="col-sm-6 field-bg">
                        <?php if($emails =  (old()) ? old('emails') : ( (isset($user->profile['emails'])) ? $user->profile['emails'] : '' )): ?>
                            <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row">
                                <span class="text-muted">
                                   <?php echo e($email, false); ?>

                                </span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if(config('laravelextendeduser.profile.address') !== false): ?>
                <div class="card-header border-top">
                    <h5 class="float-left mb-0 mt-1">Address</h5>
                </div>

                <div class="card-body">
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Country</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['country'])) ? $user->profile['country'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Town / City</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['city'])) ? $user->profile['city'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Street / Road</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['road'])) ? $user->profile['road'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Building</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['building'])) ? $user->profile['building'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Office</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['office'])) ? $user->profile['office'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                    <div class="row  mb-2">
                        <div class="col-sm-6 text-sm-right">Extra Details</div>
                        <div class="col-sm-6 field-bg">
                            <span class="text-muted">
                                <?php echo e((isset($user->profile['extra_details'])) ? $user->profile['extra_details'] : '', false); ?>

                            </span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
            <!-- /User Profile -->
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('laravelextendeduser::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GKSys\resources\views/vendor/laravelextendeduser/pages/user/profile/show.blade.php ENDPATH**/ ?>