<table class="table table-hover">
    <thead>
        <tr>
            <th> <?php echo app('translator')->get('view_pages.s_no'); ?></th>
            <th> <?php echo app('translator')->get('view_pages.name'); ?></th>
            <th> <?php echo app('translator')->get('view_pages.status'); ?></th>
            <th> <?php echo app('translator')->get('view_pages.action'); ?></th>
        </tr>
    </thead>

<tbody>
    <?php  $i= $results->firstItem(); ?>

    <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($i++); ?> </td>
            <td><?php echo e($result->name); ?></td>
            <?php if($result->active): ?>
            <td><span class="label label-success"><?php echo app('translator')->get('view_pages.active'); ?></span></td>
            <?php else: ?>
            <td><span class="label label-danger"><?php echo app('translator')->get('view_pages.inactive'); ?></span></td>
            <?php endif; ?>
            <td>

            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('view_pages.action'); ?>
            </button>
                <div class="dropdown-menu">
                <?php if(auth()->user()->can('edit-package-type')): ?>         
                    
                    <a class="dropdown-item" href="<?php echo e(url('package_type',$result->id)); ?>"><i class="fa fa-pencil"></i><?php echo app('translator')->get('view_pages.edit'); ?></a>
                <?php endif; ?>

                <?php if(auth()->user()->can('toggle-package-type')): ?>         
                    <?php if($result->active): ?>
                    <a class="dropdown-item" href="<?php echo e(url('package_type/toggle_status',$result->id)); ?>"><i class="fa fa-dot-circle-o"></i><?php echo app('translator')->get('view_pages.inactive'); ?></a>
                    <?php else: ?>
                    <a class="dropdown-item" href="<?php echo e(url('package_type/toggle_status',$result->id)); ?>"><i class="fa fa-dot-circle-o"></i><?php echo app('translator')->get('view_pages.active'); ?></a>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(auth()->user()->can('delete-package-type')): ?>         
                    
                <?php endif; ?>
                </div>
            </div>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="11">
                <p id="no_data" class="lead no-data text-center">
                    <img src="<?php echo e(asset('assets/img/dark-data.svg')); ?>" style="width:150px;margin-top:25px;margin-bottom:25px;" alt="">
                    <h4 class="text-center" style="color:#333;font-size:25px;"><?php echo app('translator')->get('view_pages.no_data_found'); ?></h4>
                </p>
            </td>
        </tr>
    <?php endif; ?>

    </tbody>
    </table>
    <ul class="pagination pagination-sm pull-right">
        <li>
            <a href="#"><?php echo e($results->links()); ?></a>
        </li>
    </ul>
<?php /**PATH /var/www/html/tagxi-server-app-laravel-8/resources/views/admin/master/package_type/_package.blade.php ENDPATH**/ ?>