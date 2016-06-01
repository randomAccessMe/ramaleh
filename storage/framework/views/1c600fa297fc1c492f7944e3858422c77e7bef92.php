<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resume</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <?php echo $__env->make('admin.resume.partials._tabs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row" id="add-skill">
        <button class="btn btn-primary buffer pull-right"><i class="fa fa-plus-circle"></i></button>
    </div>

    <?php echo Form::open([
        'route'   => ['admin::skills.update'],
        'class'   => 'form-inline'
      ]); ?>

        <div id="form-container">
            <?php foreach($skills as $skill): ?>
            <div class="row buffer">
                <div class="col-lg-4">
                    <div class="input-group'">
                        <div class="row">
                            <label for="">Skill</label>
                        </div>
                        <div class="row">
                            <?php echo Form::text('name['.$skill->id.']', $skill->name, ['class'=>'form-control']); ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Started Practicing</label>
<?php /*                        <?php echo Form::date('start_date['.$skill->id.']', $skill->start_date, ['class'=>'form-control']); ?>*/ ?>
                        <?php echo Form::date('start_date['.$skill->id.']', null, ['class'=>'form-control']); ?>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Stopped Practicing</label>
                        <?php echo Form::date('end_date['.$skill->id.']', null, ['class'=>'form-control']); ?>

                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="row buffer" id="skill-form-fields">
                <div class="col-lg-4">
                    <div class="input-group'">
                        <div class="row">
                            <label for="">Skill</label>
                        </div>
                        <div class="row">
                            <?php echo Form::text('new[][name]', null, ['class'=>'form-control']); ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Started Practicing</label>
                        <?php echo Form::date('new[][start_date]', null, ['class'=>'form-control']); ?>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Stopped Practicing</label>
                        <?php echo Form::date('new[][end_date]', null, ['class'=>'form-control']); ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php echo Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']); ?>

        </div>

    <?php echo Form::close(); ?>



</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $('#add-skill').on('click', function(){
        var clone = $('#skill-form-fields').clone();
        clone.find('input').each(function () {
            $(this).val(null);
        });
        clone.appendTo('#form-container')
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>