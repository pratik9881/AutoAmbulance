<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Manage Product Unit')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-button'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create product unit')): ?>
        <div class="all-button-box row d-flex justify-content-end">
            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                <a href="#" class="btn btn-xs btn-white btn-icon-only width-auto" data-url="<?php echo e(route('productunits.create')); ?>" data-ajax-popup="true" data-title="<?php echo e(__('Create Product Unit')); ?>"><i class="fas fa-plus"></i> <?php echo e(__('Create')); ?> </a>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped dataTable">
                        <thead>
                        <tr>
                            <th><?php echo e(__('Unit')); ?></th>
                            <th width="250px"><?php echo e(__('Action')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $productunits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productunit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr data-id="<?php echo e($productunit->id); ?>">
                                <td>
                                    <a><?php echo e($productunit->name); ?></a>
                                </td>
                                <td class="Action">
                                    <span>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit product unit')): ?>
                                            <a href="#" class="edit-icon" data-url="<?php echo e(route('productunits.edit',$productunit->id)); ?>" data-ajax-popup="true" data-title="<?php echo e(__('Edit Product Unit')); ?>" class="table-action" ><i class="fas fa-pencil-alt"></i></a>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete product unit')): ?>
                                            <a href="#" class="delete-icon"  data-confirm="<?php echo e(__('Are You Sure?').'|'.__('This action can not be undone. Do you want to continue?')); ?>" data-confirm-yes="document.getElementById('delete-form-<?php echo e($productunit->id); ?>').submit();"><i class="fas fa-trash"></i></a>
                                            <?php echo Form::open(['method' => 'DELETE', 'route' => ['productunits.destroy', $productunit->id],'id'=>'delete-form-'.$productunit->id]); ?>

                                            <?php echo Form::close(); ?>

                                        <?php endif; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home1/xgjtsdo/work.xalop.com/resources/views/productunits/index.blade.php ENDPATH**/ ?>