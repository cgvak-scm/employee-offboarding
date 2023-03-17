

<?php $__env->startSection('content'); ?>


<!-- Progress bar -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center" style="margin-top: 100px; margin-bottom: -80px;" >My Resignation Progress</h1>
            <div class="progress_content" >
                <div class="arrow-steps clearfix">
                    <a href="<?php echo e(route('acceptanceStatus')); ?>" class="step <?php echo e(($completed_acceptance == NULL) ? 'current' : 'current_prev'); ?>"><div> <span> 1.Acceptance  </span> </div></a>
                    <a href="<?php echo e(route('noDueStatus')); ?>" class="step <?php echo e((($noDueStatus != NULL && $completed_no_due == NULL) ? 'current' : (($completed_no_due != NULL) ? 'current_prev' : 'current_next'))); ?>"><div > <span> 2.No Due </span></div></a>
			        <a href="<?php echo e(route('noDueStatus')); ?>" class="step <?php echo e((($completed_no_due != NULL && $finalChecklist == NULL) ? 'current' : (($exitInterview != NULL && $finalChecklist != NULL) ? 'current_prev' : 'current_next'))); ?>"><div> <span> &nbsp; 3.Exit Interview </span> </div></a>
			        <a href="<?php echo e(route('noDueStatus')); ?>" class="step <?php echo e(((($exitInterview != NULL && $finalChecklist != NULL) && ($myResignation->is_completed == 0)) ? 'current' : (($finalChecklist != NULL && $myResignation->is_completed != 0) ? 'current_prev' : 'current_next'))); ?> last_progress"><div> <span> &nbsp; &nbsp; 4.Final Checklist </span> </div></a>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
  jQuery( document ).ready(function() {

		var back =jQuery(".prev");
		var	next = jQuery(".next");
		var	steps = jQuery(".step");

		next.bind("click", function() {
			jQuery.each( steps, function( i ) {
				if (!jQuery(steps[i]).hasClass('current') && !jQuery(steps[i]).hasClass('done')) {
					jQuery(steps[i]).addClass('current');
					jQuery(steps[i - 1]).removeClass('current').addClass('done');
					return false;
				}
			})
		});
		back.bind("click", function() {
			jQuery.each( steps, function( i ) {
				if (jQuery(steps[i]).hasClass('done') && jQuery(steps[i + 1]).hasClass('current')) {
					jQuery(steps[i + 1]).removeClass('current');
					jQuery(steps[i]).removeClass('done').addClass('current');
					return false;
				}
			})
		});

	})
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\OfzProjects\Laravel\employee-offboarding\resources\views/resignation/progress.blade.php ENDPATH**/ ?>