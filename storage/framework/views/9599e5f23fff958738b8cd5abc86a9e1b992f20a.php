<?php $__env->startSection('content'); ?>
<div class="row">
	<a class="pull-right btn btn-primary buffer" href="<?php echo e(route('admin::admin.site.create')); ?>">Add Website <i class="fa fa-globe"></i></a>
</div>
<div class="list-group col-md-6">
  <?php foreach($sites as $site): ?>
  <a href="<?php echo e(route('admin::admin.site.edit', $site)); ?>" class="list-group-item">
    <div class="left-side" style="width: 70%; display: inline-block">
      <h4 class="list-group-item-heading"><?php echo e($site->name); ?></h4>
      <p class="list-group-item-text"><?php echo e($site->description); ?></p>
    </div>
    <img class="pull-right screenshot"  src="/uploads/screenshots/<?php echo e($site->screenshot); ?>" style=" width: 50px; height: 50px">
  </a>
  <?php endforeach; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>