<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <h1><span class="fa fa-calendar" aria-hidden="true"></span> Log Viewer</h1>
                <div class="list-group">
                    <?php foreach($files as $file): ?>
                        <a href="?l=<?php echo e(base64_encode($file)); ?>" class="list-group-item <?php if($current_file == $file): ?> llv-active <?php endif; ?>">
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
                                <td class="text-<?php echo $log['level_class']; ?>">
                                    <span class="fa fa-<?php echo ($log['level_img']); ?>" aria-hidden="true"></span> &nbsp;<?php echo e($log['level']); ?>

                                </td>
                                <td class="date"><?php echo $log['date']; ?></td>
                                <td class="text">
                                    <?php if($log['stack']): ?>
                                        <a class="pull-right expand btn btn-default btn-xs" data-display="stack<?php echo $key; ?>">
                                            <span class="fa fa-search"></span>
                                        </a>
                                    <?php endif; ?>
                                    <?php echo $log['text']; ?>

                                    <?php if(isset($log['in_file'])): ?>
                                        <br /><?php echo $log['in_file']; ?>

                                    <?php endif; ?>
                                    <?php if($log['stack']): ?>
                                        <div class="stack" id="stack<?php echo $key; ?>" style="display: none; white-space: pre-wrap;">
                                            <?php echo trim($log['stack']); ?>

                                        </div>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                <?php endif; ?>
                <div>
                    <a href="?dl=<?php echo e(base64_encode($current_file)); ?>"><span class="fa fa-download"></span> Download file</a>
                    -
                    <a id="delete-log" href="?del=<?php echo e(base64_encode($current_file)); ?>"><span class="fa fa-trash"></span> Delete file</a>
                </div>
            </div>
        </div>
    </div>
    <?php /* TODO: clean this up */ ?>
    <style>
        h1 {
            font-size: 1em;
            margin-top: 0px;
        }
        .stack {
            font-size: 0.85em;
        }
        .date {
            min-width: 75px;
        }
        .text {
            word-break: break-all;
        }
        a.llv-active {
            z-index: 2;
            background-color: #f5f5f5;
            border-color: #777;
        }
        table {
            margin-left: 200px;
        }
        .sidebar {
            width: 200px;
        }
        #table-log_wrapper {
            margin-top: 10px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function(){
        $('#table-log').DataTable({
            "order": [ 1, 'desc' ],
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
        $('.table-container').on('click', '.expand', function(){
            $('#' + $(this).data('display')).toggle();
        });
        $('#delete-log').click(function(){
            return confirm('Are you sure?');
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('#admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>