

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('sidebar'); ?>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/zinobeBackEnd/User/create_user_view/">Create User</a>
    </nav>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(isset($message)): ?>
        <div class="col-12 pt-2">
            <div class="alert alert-warning" role="">
                <p><?php echo e($message); ?></p>
            </div>
        </div>
    <?php endif; ?>
    <?php if(isset($error)): ?>
        <div class="col-12 pt-2">
            <div class="alert alert-danger" role="">
                <p><?php echo e($error); ?></p>
            </div>
        </div>
    <?php endif; ?>
    <form class="pt-4" method="post" action="/zinobeBackEnd/Login/login">
        <div class="form-group ">
            <label for="exampleInputEmail1">Email address</label>
            <?php if(isset($dataForm['email_login'])): ?>
                <input type="email" value="<?php echo e($dataForm['email_login']); ?>" name="email_login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php else: ?>
                <input type="email" name="email_login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php endif; ?>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password_login" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zinobeBackEnd\resources\views/index.blade.php ENDPATH**/ ?>