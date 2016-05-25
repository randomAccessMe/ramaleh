<?php $__env->startSection('content'); ?>
    <div class="row">

        <?php echo Form::open(['route' => ['admin::admin.site.store'], 'enctype' => 'multipart/form-data']); ?>


        <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- Name Form Input -->
            <div class="form-group">
                <?php echo Form::label('name', 'Name:'); ?>

                <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

            </div>

            <!-- Description Form Input -->
            <div class="form-group">
                <?php echo Form::label('description', 'Description:'); ?>

                <?php echo Form::textarea('description',  null, ['class' => 'form-control']); ?>

            </div>

            <!-- Url Form Input -->
            <div class="form-group">
                <?php echo Form::label('url', 'Url:'); ?>

                <?php echo Form::text('url', null, ['class' => 'form-control']); ?>

            </div>

            <!-- Github Url Form Input -->
            <div class="form-group">
                <?php echo Form::label('github_url', 'Github Url:'); ?>

                <?php echo Form::text('github_url', null, ['class' => 'form-control']); ?>

            </div>

            <!-- Screenshot Form Input -->
            <div class="form-group">
                <?php echo Form::label('screenshot', 'Screenshot:'); ?>

                <?php echo Form::file('screenshot', ['class' => 'form-control']); ?>

            </div>

            <div class="form-group">
                <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

            </div>
        </div>

        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>