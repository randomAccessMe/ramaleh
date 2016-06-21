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

        freshDuplicate($(this), 'job', function(clone) {
            var uniqueId = new Date().valueOf();
            clone.find('.collapse-trigger').each(function() {
                $(this).attr('href', '#panel-body' + uniqueId);
            });
            clone.find('.collapse').attr('id', 'panel-body' + uniqueId);
            clone.find('.panel-heading span').text('New Job');
            $('.job-form-fields .panel-body').slideUp();
            clone.find('.panel-body').show();
        });

//        $(this).data('iterator', $(this).data('iterator') + 1);
//        var iteration = $(this).data('iterator');
//        var clone = $('.job-form-fields').first().clone();
//        var uniqueId = new Date().valueOf();
//        clone.find('.collapse-trigger').each(function() {
//            $(this).attr('href', '#panel-body' + uniqueId);
//        });
//        clone.find('.collapse').attr('id', 'panel-body' + uniqueId);
//        clone.find('.panel-heading span').text('New Job');
//        $('.job-form-fields .panel-body').slideUp();
//        clone.find('.panel-body').show();
//        clone.find('input, textarea').each(function () {
//            var fieldName = $(this).attr('name');
//            $(this).val(null).attr({
//                name: fieldName.replace(/[a-z]{3}\[\d\]/i, 'new['+iteration+']')
//            });
//        });
//        clone.find('.delete-job').removeAttr('href');
//        clone.appendTo('#form-container');
    });

    function freshDuplicate(element, elementName, Callback) {

        element.data('iterator', element.data('iterator') + 1);
        var iteration = element.data('iterator');
        var clone = $('.' + elementName + '-form-fields').first().clone();
        clone.find('input, textarea').each(function () {
            var fieldName = $(this).attr('name');
            $(this).val(null).attr({
                name: fieldName.replace(/[a-z]{3}\[\d\]/i, 'new['+iteration+']')
            });
        });
        Callback(clone);
        clone.find('.delete-' + elementName + '').removeAttr('href')
        clone.appendTo('#form-container');
    }


    $('#form-container').on('click', '.delete-job', function() {
        deleteInstance($(this), 'job');
    });

    function deleteInstance(instanceElement, instanceName) {
        if($('.' + instanceName + '-form-fields').length <= 1) {
            alert('This is the last ' + instanceName.capitalizeFirstLetter() + '!');
            return;
        }
        instanceElement.parents('.' + instanceName + '-form-fields').remove();
    }

    String.prototype.capitalizeFirstLetter = function() {
        return this.charAt(0).toUpperCase() + this.slice(1);
    }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>