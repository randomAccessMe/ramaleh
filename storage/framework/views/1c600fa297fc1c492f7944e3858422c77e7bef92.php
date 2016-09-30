<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resume</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <?php echo $__env->make('admin.resume.partials._tabs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <button class="btn btn-primary buffer pull-right" id="add-skill">
            <i class="fa fa-plus-circle"></i>
        </button>
    </div>

    <?php echo Form::open([
        'route'   => ['admin::skills.update'],
        'class'   => 'form-inline'
      ]); ?>

        <div id="form-container">
            <?php $__empty_1 = true; foreach($skills as $skill): $__empty_1 = false; ?>
                <?php echo $__env->make('admin.resume.partials._skills_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endforeach; if ($__empty_1): ?>
                <?php echo $__env->make('admin.resume.partials._skills_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>

        </div>

        <div class="row">
            <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']); ?>

        </div>

    <?php echo Form::close(); ?>



</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>

    $('#add-skill').data('iterator', 1).on('click', function () {
        freshDuplicate($(this), 'skill', function() {});
    });

    $('#form-container').on('click', '.delete-skill', function() {
        deleteInstance($(this), 'skill');
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>