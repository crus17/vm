<?php
	if (Auth::user()->dashboard_style == "light") {
		$bg="light";
		$text = "dark";
	} else {
		$bg="dark";
		$text = "light";
	}
?>

    <?php $__env->startSection('content'); ?> 
        <?php echo $__env->make('user.topmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('user.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="main-panel bg-<?php echo e($bg); ?>">
			<div class="content bg-<?php echo e($bg); ?>">
				<div class="page-inner">
					<nav>
						<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">

							<a class="nav-item nav-link active pt-3 " id="nav-home-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="nav-home" aria-selected="true">Wallet</a>

							<a class="nav-item nav-link pt-3" id="nav-profile-tab" data-toggle="tab" href="#proof" role="tab" aria-controls="nav-profile" aria-selected="false">Proof Upload</a>
							
						</div>
					</nav>
					<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
						
						<div class="tab-pane fade show active bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?> card p-3" id="payment" role="tabpanel" aria-labelledby="nav-profile-tab">
							<?php echo $__env->make('user.includes.deposit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						</div>

						
						<div class="tab-pane fade p-3 bg-<?php echo e(Auth('admin')->User()->dashboard_style); ?>" id="proof" role="tabpanel" aria-labelledby="nav-profile-tab">
							<?php echo $__env->make('user.includes.withdrawal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						</div>
					</div>
					<?php if(Session::has('message')): ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-info alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<i class="fa fa-info-circle"></i> <?php echo e(Session::get('message')); ?>

								</div>
							</div>
						</div>
					<?php endif; ?>
					<?php if(count($errors) > 0): ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-danger alert-dismissable">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<i class="fa fa-warning"></i> <?php echo e($error); ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
						</div>
                	<?php endif; ?>
					







				</div>
			</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>