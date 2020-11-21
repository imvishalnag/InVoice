<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(asset('vendors/animate.css/animate.min.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=<?php echo e(asset('build/css/custom.min.css')); ?> rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo e(Form::open(array('url' => 'admin/login', 'method' => 'post'))); ?>


              <h1><?php echo e(__('Admin Login')); ?></h1>
              <div>
                <?php if($message = Session::get('login_error')): ?>
                  <span class="invalid-feedback text-danger" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
                <?php endif; ?>

                <?php echo e(Form::email('email', '',array('class' => 'form-control','placeholder'=>'Enter Email','required'))); ?>

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
              <div>
                <?php echo e(Form::password('password',array('class' => 'form-control','placeholder'=>'Enter Password'))); ?>

                
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
              <div>
                <?php echo e(Form::submit('Log In', array('class'=>'btn btn-warning btn-block'))); ?>

                
              </div>

              <div class="clearfix"></div>
            <?php echo e(Form::close()); ?>

          </section>
        </div>
      </div>
    </div>
  </body>
</html>
<?php /**PATH E:\xampp\htdocs\invoice\resources\views/admin/index.blade.php ENDPATH**/ ?>