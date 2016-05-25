<?php /*<!DOCTYPE html>*/ ?>
<?php /*<html lang="en">*/ ?>
<?php /*<head>*/ ?>
<?php /*<meta charset="utf-8">*/ ?>
<?php /*<meta http-equiv="X-UA-Compatible" content="IE=edge">*/ ?>
<?php /*<meta name="viewport" content="width=device-width, initial-scale=1">*/ ?>
<?php /*<title>Laravel log viewer</title>*/ ?>

<?php /*<!-- Bootstrap -->*/ ?>
<?php /*<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">*/ ?>
<?php /*<link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">*/ ?>


<?php /*<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/ ?>
<?php /*<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/ ?>
<?php /*<!--[if lt IE 9]>*/ ?>
<?php /*<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/ ?>
<?php /*<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/ ?>
<?php /*<![endif]-->*/ ?>
<?php /*<style>*/ ?>
<?php /*body {*/ ?>
<?php /*padding: 25px;*/ ?>
<?php /*}*/ ?>
<?php /*h1 {*/ ?>
<?php /*font-size: 1.5em;*/ ?>
<?php /*margin-top: 0px;*/ ?>
<?php /*}*/ ?>
<?php /*.stack {*/ ?>
<?php /*font-size: 0.85em;*/ ?>
<?php /*}*/ ?>
<?php /*.date {*/ ?>
<?php /*min-width: 75px;*/ ?>
<?php /*}*/ ?>
<?php /*.text {*/ ?>
<?php /*word-break: break-all;*/ ?>
<?php /*}*/ ?>
<?php /*a.llv-active {*/ ?>
<?php /*z-index: 2;*/ ?>
<?php /*background-color: #f5f5f5;*/ ?>
<?php /*border-color: #777;*/ ?>
<?php /*}*/ ?>
<?php /*</style>*/ ?>
<?php /*</head>*/ ?>
<?php /*<body>*/ ?>
<?php /*<div class="container-fluid">*/ ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <p class="text-muted"><i>by Rap2h</i></p>
            <div class="list-group">
                <?php foreach($files as $file): ?>
                    <a href="?l=<?php echo e(base64_encode($file)); ?>"
                       class="list-group-item <?php if($current_file == $file): ?> llv-active <?php endif; ?>">
                        <?php echo e($file); ?>

                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-sm-9 col-md-10 table-container">
            <?php if($logs === null): ?>
                <div>
                    Log file >50M, please download it.
                </div>
            <?php else: ?>
                <table id="table-log" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Level</th>
                        <th>Date</th>
                        <th>Content</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach($logs as $key => $log): ?>
                        <tr>
                            <td class="text-<?php echo e($log['level_class']); ?>"><span
                                        class="glyphicon glyphicon-<?php echo e($log['level_img']); ?>-sign"
                                        aria-hidden="true"></span> &nbsp;<?php echo e($log['level']); ?></td>
                            <td class="date"><?php echo e($log['date']); ?></td>
                            <td class="text">
                                <?php if($log['stack']): ?> <a class="pull-right expand btn btn-default btn-xs"
                                                       data-display="stack<?php echo e($key); ?>"><span
                                            class="glyphicon glyphicon-search"></span></a><?php endif; ?>
                                <?php echo e($log['text']); ?>

                                <?php if(isset($log['in_file'])): ?> <br/><?php echo e($log['in_file']); ?><?php endif; ?>
                                <?php if($log['stack']): ?>
                                    <div class="stack" id="stack<?php echo e($key); ?>"
                                         style="display: none; white-space: pre-wrap;"><?php echo e(trim($log['stack'])); ?>

                                    </div><?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php endif; ?>
            <div>
                <a href="?dl=<?php echo e(base64_encode($current_file)); ?>"><span class="glyphicon glyphicon-download-alt"></span>
                    Download file</a>
                -
                <a id="delete-log" href="?del=<?php echo e(base64_encode($current_file)); ?>"><span
                            class="glyphicon glyphicon-trash"></span> Delete file</a>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('scripts'); ?>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#table-log').DataTable({
                "order": [1, 'desc'],
                "stateSave": true,
                "stateSaveCallback": function (settings, data) {
                    window.localStorage.setItem("datatable", JSON.stringify(data));
                },
                "stateLoadCallback": function (settings) {
                    var data = JSON.parse(window.localStorage.getItem("datatable"));
                    if (data) data.start = 0;
                    return data;
                }
            });
            $('.table-container').on('click', '.expand', function () {
                $('#' + $(this).data('display')).toggle();
            });
            $('#delete-log').click(function () {
                return confirm('Are you sure?');
            });
        });
    </script>
    <?php /*<style>*/ ?>
        <?php /*body {*/ ?>
            <?php /*padding: 25px;*/ ?>
        <?php /*}*/ ?>
        <?php /*h1 {*/ ?>
            <?php /*font-size: 1.5em;*/ ?>
            <?php /*margin-top: 0px;*/ ?>
        <?php /*}*/ ?>
        <?php /*.stack {*/ ?>
            <?php /*font-size: 0.85em;*/ ?>
        <?php /*}*/ ?>
        <?php /*.date {*/ ?>
            <?php /*min-width: 75px;*/ ?>
        <?php /*}*/ ?>
        <?php /*.text {*/ ?>
            <?php /*word-break: break-all;*/ ?>
        <?php /*}*/ ?>
        <?php /*a.llv-active {*/ ?>
            <?php /*z-index: 2;*/ ?>
            <?php /*background-color: #f5f5f5;*/ ?>
            <?php /*border-color: #777;*/ ?>
        <?php /*}*/ ?>
    <?php /*</style>*/ ?>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>