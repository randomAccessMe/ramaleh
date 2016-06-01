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
            <ul class="nav nav-tabs nav-stacked">
                <li role="presentation" class="active"><a href="#">Info</a></li>
                <li role="presentation"><a href="#">Experience</a></li>
                <li role="presentation"><a href="#">Skills</a></li>
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>