<?php ($prefix = (isset($job) ? 'old['.$job->id.']' : 'new[1]')); ?>
<?php ($unique_id = uniqid()); ?>
<div class="job-form-fields">
    <div class="panel panel-default">
        <div class="collapse-trigger panel-heading" href="#panel-body<?php echo e($unique_id); ?>" data-toggle="collapse">
            <span><?php echo e(isset($job) ? $job->title : 'New Job'); ?></span>
            <a class="collapse-trigger pull-right buffer-left" href="#panel-body<?php echo e($unique_id); ?>" data-toggle="collapse">
                <i class="fa fa-arrow-circle-down"></i>
            </a>
            <a class="pull-right buffer-left delete-job" href="<?php echo e(isset($job) ? route('admin::experience.delete', $job) : ''); ?>" style="">
                <i class="fa fa-trash"></i>
            </a>
        </div>
        <div class="panel-body collapse" id="panel-body<?php echo e($unique_id); ?>">
            <div class="row buffer">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <?php echo Form::label($prefix . '[title]', 'Position Title'); ?>

                    </div>
                    <div class="row">
                        <?php echo Form::text($prefix . '[title]', isset($job) ? $job->title : null, ['class'=>'form-control', 'required']); ?>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <?php echo Form::label($prefix . '[employer]', 'Employer'); ?>

                    </div>
                    <div class="row">
                        <?php echo Form::text($prefix . '[employer]', isset($job) ? $job->employer : null, ['class'=>'form-control', 'required']); ?>

                    </div>
                </div>
            </div>

            <div class="row buffer">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <?php echo Form::label($prefix . '[city]', 'City'); ?>

                    </div>
                    <div class="row">
                        <?php echo Form::text($prefix . '[city]', isset($job) ? $job->city : null, ['class'=>'form-control', 'required']); ?>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <?php echo Form::label($prefix . '[state]', 'State'); ?>

                    </div>
                    <div class="row">
                        <?php echo Form::text($prefix . '[state]', isset($job) ? $job->state : null, ['class'=>'form-control']); ?>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <?php echo Form::label($prefix . '[country]', 'Country'); ?>

                    </div>
                    <div class="row">
                        <?php echo Form::text($prefix . '[country]', isset($job) ? $job->country : null, ['class'=>'form-control', 'required']); ?>

                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php echo Form::label($prefix . '[experience]', 'Experience'); ?>

                <?php echo Form::textarea($prefix . '[experience]', isset($job) ? $job->experience : null, ['class'=>'form-control', 'required']); ?>

            </div>

            <div class="row buffer">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <?php echo Form::label($prefix . '[start_date]', 'Start Date'); ?>

                    </div>
                    <div class="row">
                        <?php echo Form::date($prefix . '[start_date]', isset($job) ? $job->start_date : null, ['class'=>'form-control', 'required']); ?>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <?php echo Form::label($prefix . '[until_date]', 'Until'); ?>

                    </div>
                    <div class="row">
                        <?php echo Form::date($prefix . '[until_date]', isset($job) ? $job->until_date : null, ['class'=>'form-control', 'required']); ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>