<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if($data): ?>
  <!-- Favicons -->
  <link rel="icon" href="<?php echo e(asset($p.$data->tabfaviconfile)); ?>">
<?php endif; ?>
  <!-- Libs CSS -->
    <?php echo $__env->make('admin.layouts.web_common_styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <title><?php echo e(app_name() ?? 'Tagxi'); ?></title>
<style>
  .driver a.nav-link {
  font-size: 14px;  
  margin-top: 3px;
  font-weight: 100;
  color: #ffffff !important;
  display: none;
}
  .navbar-light .navbar-nav .nav-link:focus,
  .navbar-light .navbar-nav .nav-link:hover,
  .nav-link.active {
  background: linear-gradient(90deg, <?php echo e($data->menutexthover); ?> 15%, <?php echo e($data->menutexthover); ?> 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

</style>  
<body data-spy="scroll" data-target=".navbar" data-offset="71">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-xl navbar-light fixed-top py-2 border-bottom" style="background-color:<?php echo e($data->menucolor); ?>;">
    <div class="container-fluid">

      <!-- Brand -->
      <a class="navbar-brand order-1 order-md-1" href="">
        <?php if($data): ?>
        
        <img src="<?php echo e(asset($p.$data->faviconfile)); ?>" alt="Logo" style="max-width: 150px;">
        
        <?php endif; ?>
      </a>

      <!--<a class="navbar-brand order-3 order-md-2">
        <marquee>
          Coming Soon Fall 2021. Now Accepting Driver Applications
        </marquee>
      </a>-->

      <!-- Toggler -->
      <button class="navbar-toggler order-2" type="button" data-toggle="collapse" data-target="#navbarLandingCollapse" aria-controls="navbarLandingCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse order-md-3" id="navbarLandingCollapse">

        <ul class="navbar-nav nav-divided ml-auto">
          <li class="nav-item dn-1">
            <a class="nav-link active"  href="<?php echo e(url('/')); ?>">Rider</a>
          </li>
          <li class="nav-item dn-2">
            <a class="nav-link" style="color:<?php echo e($data->menutextcolor); ?> !important;" href="<?php echo e(url('/')); ?>">Rider</a>
          </li>
          <li class="nav-item dropdown">
  
            <a class="nav-link driver" style="color:<?php echo e($data->menutextcolor); ?> !important;" data-toggle="dropdown" href="#">Driver</a>

            <div class="dropdown-menu">
              <div class="card card-lg">
                <div class="card-body">
                  <ul class="list-styled font-size-sm">
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="<?php echo e(url('driverpage')); ?>">
                        Apply to Drive
                      </a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="<?php echo e(url('howdriving')); ?>">
                        How it works
                      </a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="<?php echo e(url('driverrequirements')); ?>">
                        Driver Requirements
                      </a>
                    </li>
                    <!-- <li class="list-styled-item">
                      <a class="list-styled-link" href="dmv.php">
                        DMV check
                      </a>
                    </li> -->
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="<?php echo e(url('safety')); ?>">
                        Safety
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link areas"  style="color:<?php echo e($data->menutextcolor); ?> !important;" href="<?php echo e(url('serviceareas')); ?>">Service&nbsp;Areas</a>
          </li>
          <li class="nav-item dropdown">

            <a class="nav-link" style="color:<?php echo e($data->menutextcolor); ?> !important;" data-toggle="dropdown" href="#">Sign&nbsp;up</a>

            <div class="dropdown-menu">
              <div class="card card-lg">
                <div class="card-body">
                  <ul class="list-styled font-size-sm">

                    <li class="list-styled-item">
                      <a class="list-styled-link" href="<?php echo e(url('driverpage')); ?>">
                        Apply to Drive
                      </a>
                    </li>
                    <li class="list-styled-item">
                      <a class="list-styled-link" href="<?php echo e(url('/')); ?>">
                        Sign up to ride
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </nav>
<?php /**PATH /var/www/html/tagxi-server-app-laravel-8/resources/views/admin/layouts/web_header.blade.php ENDPATH**/ ?>