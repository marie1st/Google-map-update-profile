<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php echo e(url('/'), false); ?>">
        <img class="navbar-brand-full" src="svg/modulr.svg" width="89" height="25" alt="Modulr Logo">
        <img class="navbar-brand-minimized" src="svg/modulr-icon.svg" width="30" height="30" alt="Modulr Logo">
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto mr-3">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <?php if(Auth::user()): ?> 
                <img class="img-avatar mx-1" src="<?php echo e(Auth::user()->avatar_url, false); ?>">
                <?php endif; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow mt-2">
                <a class="dropdown-item">
                <?php if(Auth::user()): ?>
                    <?php echo e(Auth::user()->name, false); ?><br>
                
                    <small class="text-muted"><?php echo e(Auth::user()->email, false); ?></small>
                <?php endif; ?>
                </a>
                <a class="dropdown-item" href="/profile">
                    <i class="fas fa-user"></i> Profile
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="/password">
                    <i class="fas fa-key"></i> Password
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('logout'), false); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> <?php echo e(__('Logout'), false); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        </li>
    </ul>
</header><?php /**PATH C:\xampp\htdocs\GKSys\resources\views/layouts/header.blade.php ENDPATH**/ ?>