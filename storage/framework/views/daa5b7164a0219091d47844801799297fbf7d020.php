<div class="box-body no-padding">
    <div class="table-responsive">
      <table class="table table-hover">
            <thead> 

                    <tr>
<th> <?php echo app('translator')->get('view_pages.s_no'); ?>
<span style="float: right;">
</span>
</th>
<th> <?php echo app('translator')->get('view_pages.zone_name'); ?>
<span style="float: right;">
</span>
</th><th> <?php echo app('translator')->get('view_pages.vehicle_type'); ?>
<span style="float: right;">
</span>
</th><th> <?php echo app('translator')->get('view_pages.price_type'); ?>
<span style="float: right;">
</span>
</th><th> <?php echo app('translator')->get('view_pages.status'); ?>
<span style="float: right;">
</span>
</th><th> <?php echo app('translator')->get('view_pages.action'); ?>
<span style="float: right;">
</span>
</th>
                </tr>
                </thead>
                <tbody>
                    <?php  $i= $results->firstItem(); ?>
                    <?php $__empty_1 = true; $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($result->zoneType->zone->name); ?></td>
                            <td><?php echo e($result->zoneType->vehicleType->name); ?>

                            <?php if($result->zoneType->zone->default_vehicle_type == $result->zoneType->vehicleType->id): ?>
                            <button class="btn btn-warning btn-sm">Default</button>
					        <?php endif; ?>
                            </td>
                            <td>
                                <?php if($result->price_type == 1): ?>
                                    <span class="btn btn-success btn-sm"><?php echo e(__('view_pages.ride_now')); ?></span>
                                <?php else: ?>
                                    <span class="btn btn-danger btn-sm"><?php echo e(__('view_pages.ride_later')); ?></span>
                                <?php endif; ?>
                            </td>
                                <?php if($result->zoneType->active): ?>
                            <td><button class="btn btn-success btn-sm"><?php echo app('translator')->get('view_pages.active'); ?></button></td>
                                <?php else: ?>
                            <td><button class="btn btn-danger btn-sm"><?php echo app('translator')->get('view_pages.inactive'); ?></button></td>
                                <?php endif; ?>
                           <td>
                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo app('translator')->get('view_pages.action'); ?>
                            </button>
                            <div class="dropdown-menu w-48 ">
                                <a class="dropdown-item" href="<?php echo e(url('vehicle_fare/edit', $result->id)); ?>">
                                    <i class="fa fa-pencil"></i><?php echo app('translator')->get('view_pages.edit'); ?>
                                </a>
                                <a class="dropdown-item" href="<?php echo e(url('vehicle_fare/rental_package/index', $result->zoneType->id)); ?>">
                                    <i class="fa fa-plus"></i><?php echo app('translator')->get('view_pages.assign_rental_package'); ?>
                                </a>
                        <?php if($result->active == 1 && $result->zoneType->zone->default_vehicle_type != $result->zoneType->vehicleType->id): ?>
                        <a class="dropdown-item" href="<?php echo e(url('vehicle_fare/set/default',$result->id)); ?>"><i class="fa fa-dot-circle-o"></i><?php echo app('translator')->get('view_pages.set_as_default'); ?></a>
                        <?php endif; ?>  
                                <?php if($result->zoneType->active): ?>
                                    <a class="dropdown-item" href="<?php echo e(url('vehicle_fare/toggle_status', $result->id)); ?>">
                                    <i class="fa fa-dot-circle-o"></i><?php echo app('translator')->get('view_pages.inactive'); ?></a>
                                <?php else: ?>
                                    <a class="dropdown-item" href="<?php echo e(url('vehicle_fare/toggle_status', $result->id)); ?>">
                                    <i class="fa fa-dot-circle-o"></i><?php echo app('translator')->get('view_pages.active'); ?></a>
                                <?php endif; ?>  
                                <a class="dropdown-item sweet-delete" href="#" data-url="<?php echo e(url('vehicle_fare/delete',$result->id)); ?>">
                                 <i class="fa fa-trash-o"></i><?php echo app('translator')->get('view_pages.delete'); ?></a>                                                              
                            </div>
                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6">
                                <div id="no_data" class="lead no-data text-center">
                                    <img src="<?php echo e(asset('assets/img/dark-data.svg')); ?>">
                                    <h4 class="text-center"><?php echo app('translator')->get('view_pages.no_data_found'); ?></h4>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="intro-y g-col-12 d-flex flex-wrap flex-sm-row flex-sm-nowrap align-items-center">
    <nav class="w-full w-sm-auto me-sm-auto">
        <ul class="pagination">
            <?php echo e($results->links('pagination::bootstrap-4')); ?>

        </ul>
    </nav>
</div><?php /**PATH /var/www/html/tagxi-server-app-laravel-8/resources/views/admin/vehicle_fare/_fare_list.blade.php ENDPATH**/ ?>