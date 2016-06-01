<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resume</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?php echo $__env->make('admin.resume.partials._tabs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo Form::open([
                'route'   => ['admin::admin.site.create'],
                'class'   => 'buffer-top'
              ]); ?>


                <label for="">Position Title</label>
                <?php echo Form::text('title', null, ['class'=>'form-control']); ?>


                <label for="">Employer</label>
                <?php echo Form::text('employer', null, ['class'=>'form-control']); ?>


                <label for="">City</label>
                <?php echo Form::text('city', null, ['class'=>'form-control']); ?>


                <label for="">State</label>
                <?php echo Form::text('state', null, ['class'=>'form-control']); ?>


                <label for="">Country</label>
                <?php echo Form::text('country', null, ['class'=>'form-control']); ?>


                <label for="">Experience</label>
                <?php echo Form::textarea('experience', null, ['class'=>'form-control']); ?>


                <label for="">Start Date</label>
                <?php echo Form::date('start_date', null, ['class'=>'form-control']); ?>


                <label for="">Until</label>
                <?php echo Form::date('until_date', null, ['class'=>'form-control']); ?>


                <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']); ?>


            <?php echo Form::close(); ?>

        </div>
    </div>
    <!-- /.row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>