<?php $__env->startSection('title', 'Main page'); ?>


<?php $__env->startSection('content'); ?>

<!-- Start Page content -->
<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-sm-12">
    <div class="box">

        <div class="box-header with-border">
            <a href="<?php echo e(url('vehicle_fare')); ?>">
                <button class="btn btn-danger btn-sm pull-right" type="submit">
                    <i class="mdi mdi-keyboard-backspace mr-2"></i>
                    <?php echo app('translator')->get('view_pages.back'); ?>
                </button>
            </a>
        </div>

<div class="col-sm-12">

<form  method="post" class="form-horizontal" action="<?php echo e(url('vehicle_fare/store')); ?>" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<div class="row">
<div class="col-6">
<div class="form-group">
<label for="admin_id"><?php echo app('translator')->get('view_pages.select_zone'); ?>
    <span class="text-danger">*</span>
</label>
<select name="zone" id="zone" class="form-control" required>
    <option value="" selected disabled><?php echo app('translator')->get('view_pages.select_zone'); ?></option>
    <?php $__currentLoopData = $zones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($zone->id); ?>" <?php echo e(old('zone') == $zone->id ? 'selected' : ''); ?>><?php echo e($zone->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
</div>
<div class="col-sm-6">
        <div class="form-group">
            <label for="type"><?php echo app('translator')->get('view_pages.select_type'); ?>
                <span class="text-danger">*</span>
            </label>
            <select name="type" id="type" class="form-control" required>
                <option value="" ><?php echo app('translator')->get('view_pages.select_type'); ?></option>
            </select>
            </div>
    </div>

</div>
<div class="row">


<div class="col-sm-6">
<div class="form-group">
<label for="payment_type"><?php echo app('translator')->get('view_pages.payment_type'); ?>
    <span class="text-danger">*</span>
</label>
<?php
    $card = '';
    $cash = '';
    $wallet = '';
?>
<?php if(old('payment_type')): ?>
    <?php $__currentLoopData = old('payment_type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item == 'card'): ?>
            <?php
                $card = 'selected';
            ?>
        <?php elseif($item == 'cash'): ?>
            <?php
                $cash = 'selected';
            ?>
        <?php elseif($item == 'wallet'): ?>
            <?php
                $wallet = 'selected';
            ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<!-- <option value="card" <?php echo e($card); ?>><?php echo app('translator')->get('view_pages.card'); ?></option> -->
<select name="payment_type[]" id="payment_type" class="form-control select2" multiple="multiple" data-placeholder="<?php echo app('translator')->get('view_pages.select'); ?> <?php echo app('translator')->get('view_pages.payment_type'); ?>" required>
    <option value="cash" <?php echo e($cash); ?>><?php echo app('translator')->get('view_pages.cash'); ?></option>
    <option value="wallet" <?php echo e($wallet); ?>><?php echo app('translator')->get('view_pages.wallet'); ?></option>
</select>
</div>
</div>

</div>
    
<div class="row">
<div class="col-12">
    <div class="box box-solid box-info">
        <div class="box-header with-border">
        <h4 class="box-title"><?php echo app('translator')->get('view_pages.ride_now'); ?></h4>
        </div>

        <div class="box-body">
                <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                               <label for="base_price"><?php echo app('translator')->get('view_pages.base_price'); ?>&nbsp (<?php echo app('translator')->get('view_pages.kilometer'); ?>) <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="ride_now_base_price" name="ride_now_base_price" value="<?php echo e(old('ride_now_base_price')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.base_price'); ?>">
                                <span class="text-danger"><?php echo e($errors->first('ride_now_base_price')); ?></span>
                            </div>
                        </div>

                          <div class="col-sm-6">
                            <div class="form-group">
                           <label for="price_per_distance"><?php echo app('translator')->get('view_pages.price_per_distance'); ?>&nbsp (<?php echo app('translator')->get('view_pages.kilometer'); ?>) <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="ride_now_price_per_distance" name="ride_now_price_per_distance" value="<?php echo e(old('ride_now_price_per_distance')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.distance_price'); ?>">
                            <span class="text-danger"><?php echo e($errors->first('ride_now_price_per_distance')); ?></span>

                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                <label for="base_distance"><?php echo app('translator')->get('view_pages.select_base_distance'); ?>
                    <span class="text-danger">*</span>
                </label>
                 <input class="form-control" type="number" id="ride_now_base_distance" name="ride_now_base_distance" value="<?php echo e(old('ride_now_base_distance')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.base_distance'); ?>">
                
               
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                <label for="price_per_time"><?php echo app('translator')->get('view_pages.price_per_time'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_now_price_per_time" name="ride_now_price_per_time" value="<?php echo e(old('ride_now_price_per_time')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.price_per_time'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_now_price_per_time')); ?></span>

                </div>
                </div>

                </div>

                <div class="row">
                 <div class="col-sm-6">
                <div class="form-group">
                <label for="cancellation_fee"><?php echo app('translator')->get('view_pages.cancellation_fee'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_now_cancellation_fee" name="ride_now_cancellation_fee" value="<?php echo e(old('ride_now_cancellation_fee')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.cancellation_fee'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_now_cancellation_fee')); ?></span>

                </div>
                </div>


                <div class="col-sm-6">
                <div class="form-group">
                <label for="waiting_charge"><?php echo app('translator')->get('view_pages.waiting_charge'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_now_waiting_charge" name="ride_now_waiting_charge" value="<?php echo e(old('ride_now_waiting_charge')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.waiting_charge'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_now_waiting_charge')); ?></span>

                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                <label for="free_waiting_time_in_mins_before_trip_start"><?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_before_trip_start'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_now_free_waiting_time_in_mins_before_trip_start" name="ride_now_free_waiting_time_in_mins_before_trip_start" value="<?php echo e(old('ride_now_free_waiting_time_in_mins_before_trip_start')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_before_trip_start'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_now_free_waiting_time_in_mins_before_trip_start')); ?></span>

                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                <label for="free_waiting_time_in_mins_after_trip_start"><?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_after_trip_start'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_now_free_waiting_time_in_mins_after_trip_start" name="ride_now_free_waiting_time_in_mins_after_trip_start" value="<?php echo e(old('ride_now_free_waiting_time_in_mins_after_trip_start')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_after_trip_start'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_now_free_waiting_time_in_mins_after_trip_start')); ?></span>

                </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="row">
    <div class="col-12">
        <div class="box box-solid box-info">
        <div class="box-header with-border">
        <h4 class="box-title"><?php echo app('translator')->get('view_pages.ride_later'); ?></h4>
        </div>

        <div class="box-body">
                <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                <label for="base_price"><?php echo app('translator')->get('view_pages.base_price'); ?>&nbsp (<?php echo app('translator')->get('view_pages.kilometer'); ?>) <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="ride_later_base_price" name="ride_later_base_price" value="<?php echo e(old('ride_later_base_price')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.base_price'); ?>">
                                <span class="text-danger"><?php echo e($errors->first('ride_later_base_price')); ?></span>

                            </div>
                        </div>

                            <div class="col-sm-6">
                            <div class="form-group">
                            <label for="price_per_distance"><?php echo app('translator')->get('view_pages.price_per_distance'); ?>&nbsp (<?php echo app('translator')->get('view_pages.kilometer'); ?>) <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="ride_later_price_per_distance" name="ride_later_price_per_distance" value="<?php echo e(old('ride_later_price_per_distance')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.distance_price'); ?>">
                            <span class="text-danger"><?php echo e($errors->first('ride_later_price_per_distance')); ?></span>

                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-sm-6">
                <div class="form-group">
                <label for="base_distance"><?php echo app('translator')->get('view_pages.select_base_distance'); ?>
                    <span class="text-danger">*</span>
                </label>
                 <input class="form-control" type="number" id="ride_later_base_distance" name="ride_later_base_distance" value="<?php echo e(old('ride_later_base_distance')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.base_distance'); ?>">

               
                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                <label for="price_per_time"><?php echo app('translator')->get('view_pages.price_per_time'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_later_price_per_time" name="ride_later_price_per_time" value="<?php echo e(old('ride_later_price_per_time')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.price_per_time'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_later_price_per_time')); ?></span>

                </div>
                </div>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                <div class="form-group">
                <label for="cancellation_fee"><?php echo app('translator')->get('view_pages.cancellation_fee'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_later_cancellation_fee" name="ride_later_cancellation_fee" value="<?php echo e(old('ride_later_cancellation_fee')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.cancellation_fee'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_later_cancellation_fee')); ?></span>

                </div>
                </div>


                <div class="col-sm-6">
                <div class="form-group">
                <label for="waiting_charge"><?php echo app('translator')->get('view_pages.waiting_charge'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_later_waiting_charge" name="ride_later_waiting_charge" value="<?php echo e(old('ride_later_waiting_charge')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.waiting_charge'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_later_waiting_charge')); ?></span>

                </div>
                </div>

                <div class="col-sm-6">
                <div class="form-group">
                <label for="free_waiting_time_in_mins_before_trip_start"><?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_before_trip_start'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_later_free_waiting_time_in_mins_before_trip_start" name="ride_later_free_waiting_time_in_mins_before_trip_start" value="<?php echo e(old('ride_later_free_waiting_time_in_mins_before_trip_start')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_before_trip_start'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_later_free_waiting_time_in_mins_before_trip_start')); ?></span>

                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                <label for="free_waiting_time_in_mins_after_trip_start"><?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_after_trip_start'); ?><span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="ride_later_free_waiting_time_in_mins_after_trip_start" name="ride_later_free_waiting_time_in_mins_after_trip_start" value="<?php echo e(old('ride_later_free_waiting_time_in_mins_after_trip_start')); ?>" required="" placeholder="<?php echo app('translator')->get('view_pages.enter'); ?> <?php echo app('translator')->get('view_pages.free_waiting_time_in_mins_after_trip_start'); ?>">
                <span class="text-danger"><?php echo e($errors->first('ride_later_free_waiting_time_in_mins_after_trip_start')); ?></span>

                </div>
                </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="form-group">
    <div class="col-12">
        <button class="btn btn-primary btn-sm pull-right mb-4" type="submit">
            <?php echo app('translator')->get('view_pages.save'); ?>
        </button>
    </div>
</div>

</form>

            </div>
        </div>


    </div>
</div>
</div>

</div>
<!-- container -->

</div>
<!-- content -->
<!-- jQuery 3 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.select2').select2({
        placeholder : "Select ...",
    });

    $(document).on('change', '#zone', function() {
        let zone = $(this).val();

        $.ajax({
            url: "<?php echo e(url('vehicle_fare/fetch/vehicles')); ?>",
            type: 'GET',
            data: {
                '_zone': zone,
            },
            success: function(result) {
                var vehicles = result.data;
                var option = ''
                vehicles.forEach(vehicle => {
                    option += `<option value="${vehicle.id}">${vehicle.name}</option>`;
                });

                $('#type').html(option)
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/tagxi-server-app-laravel-8/resources/views/admin/vehicle_fare/create.blade.php ENDPATH**/ ?>