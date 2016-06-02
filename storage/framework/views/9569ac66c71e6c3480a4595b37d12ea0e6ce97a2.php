<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Resume</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php echo $__env->make('admin.resume.partials._tabs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="row">
                    <button class="btn btn-primary buffer pull-right" id="add-job">
                        <i class="fa fa-plus-circle"></i>
                    </button>
                </div>

                <?php echo Form::open([
                    'route'   => ['admin::experience.update'],
                    'class'   => 'buffer-top'
                  ]); ?>


                <div id="form-container">
                    <?php $__empty_1 = true; foreach($jobs as $job): $__empty_1 = false; ?>
                        <?php echo $__env->make('admin.resume.partials._experience_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endforeach; if ($__empty_1): ?>
                        <?php echo $__env->make('admin.resume.partials._experience_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php endif; ?>
                </div>

                <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']); ?>


                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $('#add-job').data('iterator', 1).on('click', function () {
        $(this).data('iterator', $(this).data('iterator') + 1);
        var iteration = $(this).data('iterator');
        var clone = $('#job-form-fields').clone();
        clone.find('input, textarea').each(function () {
            var fieldName = $(this).attr('name');
            $(this).val(null).attr({
                name: fieldName.replace(/[a-z]{3}\[\d\]/i, 'new['+iteration+']'),
                required: true
            });
        });
        clone.appendTo('#form-container');
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>