<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo e(route('admin::blank')); ?>">Blank Page</a>
            </li>
            <li>
                <a href="<?php echo e(route('admin::admin.site.index')); ?>">Portfolio</a>
            </li>
            <li>
                <a href="<?php echo e(route('admin::log')); ?>">Error Logs</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
