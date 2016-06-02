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
                <a href="<?php echo e(route('admin::resume')); ?>">
                    <i class="fa fa-file-text fa-fw"></i>
                    Resume
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo e(route('admin::resume')); ?>">
                            <i class="fa fa-arrow-circle-o-right"></i>
                            Info
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin::experience')); ?>">
                            <i class="fa fa-arrow-circle-o-right"></i>
                            Experience
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin::skills')); ?>">
                            <i class="fa fa-arrow-circle-o-right"></i>
                            Skills
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo e(route('admin::admin.site.index')); ?>">
                    <i class="fa fa-book fa-fw"></i>
                    Portfolio
                </a>
            </li>
            <li>
                <a href="<?php echo e(route('admin::log')); ?>">
                    <i class="fa fa-database fa-fw"></i>
                    Error Logs
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->