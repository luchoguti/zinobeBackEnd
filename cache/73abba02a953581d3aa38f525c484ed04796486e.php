

<?php $__env->startSection('title', 'Create New User'); ?>

<?php $__env->startSection('content'); ?>
    <form class="p-2" method="post" action="./index.php/save_user">
        <div class="form-row">
            <div class="col-12 pt-2">
                <div class="alert alert-primary" role="alert">
                    Create new user
                </div>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="name1">Name</label>
                <input type="text" name="name" id="name1" class="form-control" placeholder="Names" required>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="document1">Number Document</label>
                <input type="number" max="9999999999" id="document1" name="document" class="form-control" placeholder="Number Document" required>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="email1">Email</label>
                <input type="email" name="email" id="email11" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password" required>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="password1">Password</label>
                <input type="password" name="password" id="password1" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="password1">Country</label>
                <select id="password1" class="form-control" required>
                    <option selected>Choose Country...</option>
                    <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataCountry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($dataCountry['id_country']); ?>"><?php echo e($dataCountry['name']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-12 pt-2">
                <input type="hidden" name="action" value="save_user">
                <button type="submit" class="btn btn-outline-success btn-block">Save</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\zinobeBackEnd\resources\views/user.blade.php ENDPATH**/ ?>