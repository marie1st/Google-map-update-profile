<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale(), false); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

    <title><?php echo e(config('app.name', 'GKS Enterprise Panel'), false); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js'), false); ?>" defer></script>
    <script src="<?php echo e(asset('vendor/laravelextendeduser/js/laravelextendeduser.js'), false); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css'), false); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/laravelextendeduser/css/laravelextendeduser.css'), false); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/'), false); ?>">
                    <?php echo e(config('app.name', 'My App'), false); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a class="nav-link" href="<?php echo e(route('login'), false); ?>"><?php echo e(__('Login'), false); ?></a></li>
                            <li><a class="nav-link" href="<?php echo e(route('register'), false); ?>"><?php echo e(__('Register'), false); ?></a></li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name, false); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dark-hover" href="<?php echo e(route('home'), false); ?>"><?php echo e(__('Dashboard'), false); ?></a>
                                    <a class="dropdown-item dark-hover" href="<?php echo e(route('profile'), false); ?>"><?php echo e(__('Profile'), false); ?></a>
                                    <a class="dropdown-item dark-hover" href="<?php echo e(route('account'), false); ?>"><?php echo e(__('Account'), false); ?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item dark-hover" href="<?php echo e(route('logout'), false); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout'), false); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\GKSys\resources\views/vendor/laravelextendeduser/layouts/app.blade.php ENDPATH**/ ?>