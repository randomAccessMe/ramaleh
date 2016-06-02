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
                    'route'   => ['admin::resume.update', $resume],
                    'class'   => 'buffer-top'
                  ]); ?>


                <?php echo Form::label('name', 'Name'); ?>

                <?php echo Form::text('name', $resume->name, ['class'=>'form-control']); ?>


                <?php echo Form::label('address', 'Address'); ?>

                <?php echo Form::text('address', $resume->address, ['class'=>'form-control']); ?>


                <?php echo Form::label('email', 'E Mail'); ?>

                <?php echo Form::email('email', $resume->email, ['class'=>'form-control']); ?>


                <?php echo Form::label('phone', 'Phone'); ?>

                <?php echo Form::text('phone', $resume->phone, ['class'=>'form-control']); ?>


                <?php echo Form::label('summary', 'Summary'); ?>

                <?php echo Form::textarea('summary', $resume->summary, ['class'=>'form-control']); ?>


                <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']); ?>


                <?php echo Form::close(); ?>

            </div>
        </div>
        <!-- /.row -->
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>