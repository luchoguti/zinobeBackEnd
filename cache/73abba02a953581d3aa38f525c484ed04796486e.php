

<?php $__env->startSection('title', 'Create New UserController'); ?>
<?php $__env->startSection('sidebar'); ?>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="https://shielded-fjord-53139.herokuapp.com/">Login</a>
    </nav>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <form class="p-2" method="post" action="https://shielded-fjord-53139.herokuapp.com/User/store">
        <div class="form-row">
            <div class="col-12 pt-2">
                <div class="alert alert-primary" role="alert">
                    Create new user
                </div>
            </div>
            <?php if(!empty($validate)): ?>
                <div class="col-12 pt-2">
                    <div class="alert alert-danger" role="alert">
                        <?php $__currentLoopData = $validate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><?php echo e($valid); ?>!</p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="form-group col-4 pt-2">
                <label for="name1">Name</label>
                <?php if(isset($dataForm['name'])): ?>
                    <input type="text" name="name" id="name1" value="<?php echo e($dataForm['name']); ?>" class="form-control" placeholder="Names" required>
                <?php else: ?>
                    <input type="text" name="name" id="name1" class="form-control" placeholder="Names" required>
                <?php endif; ?>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="document1">Number Document</label>
                <?php if(isset($dataForm['document'])): ?>
                    <input type="number" max="9999999999" value="<?php echo e($dataForm['document']); ?>"  id="document1" name="document" class="form-control" placeholder="Number Document" required>
                <?php else: ?>
                    <input type="number" max="9999999999"  id="document1" name="document" class="form-control" placeholder="Number Document" required>
                <?php endif; ?>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="email1">Email</label>
                <?php if(isset($dataForm['email'])): ?>
                    <input type="email" name="email" value="<?php echo e($dataForm['email']); ?>" id="email11" class="form-control" placeholder="Email" required>
                <?php else: ?>
                    <input type="email" name="email" id="email11" class="form-control" placeholder="Email" required>
                <?php endif; ?>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="password2">Confirm Password</label>
                <?php if(isset($dataForm['password_confirm'])): ?>
                    <input type="password" name="password_confirm" value="<?php echo e($dataForm['password_confirm']); ?>" id="password2" class="form-control" placeholder="Confirm Password" required>
                <?php else: ?>
                    <input type="password" name="password_confirm" id="password2" class="form-control" placeholder="Confirm Password" required>
                <?php endif; ?>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="password1">Password</label>
                <?php if(isset($dataForm['password'])): ?>
                    <input type="password" name="password" value="<?php echo e($dataForm['password']); ?>" id="password1" class="form-control" placeholder="Password" required>
                <?php else: ?>
                    <input type="password" name="password" id="password1" class="form-control" placeholder="Password" required>
                <?php endif; ?>
            </div>
            <div class="form-group col-4 pt-2">
                <label for="country1">Country</label>
                <select id="country1" name="country" class="form-control" required>
                    <option value="">Choose Country...</option>
                    <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataCountry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($dataForm['country'])): ?>
                            <?php if($dataForm['country']== $dataCountry['id_country']): ?>
                                <option value="<?php echo e($dataCountry['id_country']); ?>" selected><?php echo e($dataCountry['name']); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($dataCountry['id_country']); ?>"><?php echo e($dataCountry['name']); ?></option>
                            <?php endif; ?>
                        <?php else: ?>
                            <option value="<?php echo e($dataCountry['id_country']); ?>"><?php echo e($dataCountry['name']); ?></option>
                        <?php endif; ?>
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