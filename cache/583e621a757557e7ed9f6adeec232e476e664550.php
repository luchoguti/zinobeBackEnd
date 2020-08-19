

<?php $__env->startSection('title', 'Create New UserController'); ?>
<?php $__env->startSection('sidebar'); ?>
    <nav class="navbar navbar-light bg-light">
        <?php if(isset($_SESSION['email'])): ?>
            <p><?php echo e($_SESSION['email']); ?></p>
        <?php endif; ?>
        <a class="navbar-brand" href="/zinobeBackEnd/Login/logout/">LogOut</a>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($_SESSION['name_user'])): ?>
        <p class="pt-5"><b>Hello <?php echo e($_SESSION['name_user']); ?> wellcome to page!</b></p>
    <?php endif; ?>
    <form class="form-inline pt-3" method="POST" action="/zinobeBackEnd/User/search_user">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Name User or Email" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <?php if(isset($result_filter)): ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Document</th>
                <th scope="col">Country</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $result_filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($key+1); ?></th>
                        <td><?php echo e($result['name']); ?></td>
                        <td><?php echo e($result['email']); ?></td>
                        <td><?php echo e($result['document']); ?></td>
                        <td><?php echo e($result['country'][0]['name']); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zinobeBackEnd\resources\views/home.blade.php ENDPATH**/ ?>