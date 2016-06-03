<?php $__env->startSection('content'); ?>
<div class="col-lg-12">
  <h1 class="page-header">My Websites</h1>
  <div class="row">
      <a class="pull-right btn btn-primary buffer" href="<?php echo e(route('admin::admin.site.create')); ?>">Add Website <i class="fa fa-globe"></i></a>
  </div>
  <div class="list-group col-md-6">
    <?php foreach($sites as $site): ?>
    <div class="list-group-item">
      <a href="<?php echo e(route('admin::admin.site.edit', $site)); ?>" class="left-side" style="width: 70%; display: inline-block; color: #0c0c0c">
          <h4 class="list-group-item-heading"><?php echo e($site->name); ?></h4>
          <p class="list-group-item-text"><?php echo e($site->description); ?></p>
      </a>
      <a href="<?php echo e(route('admin::admin.site.destroy', $site)); ?>"
         data-method="delete"
         data-confirm="Are you sure that you want to delete `<?php echo $site->name; ?>`?">
        <i class="fa fa-trash"></i>
      </a>
      <a href="<?php echo e(route('admin::admin.site.edit', $site)); ?>">
        <img class="pull-right screenshot"  src="/uploads/screenshots/<?php echo e($site->screenshot); ?>" style=" width: 50px; height: 50px">
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>