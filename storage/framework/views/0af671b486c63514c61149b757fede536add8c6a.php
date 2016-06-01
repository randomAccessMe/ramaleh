<ul class="nav nav-tabs">
    <li role="presentation" class="<?php echo e(routeIs('admin::resume') ? 'active' : ''); ?>">
        <a href="<?php echo e(route('admin::resume')); ?>">Info</a>
    </li>
    <li role="presentation" class="<?php echo e(routeIs('admin::experience') ? 'active' : ''); ?>">
        <a href="<?php echo e(route('admin::experience')); ?>">Experience</a>
    </li>
    <li role="presentation" class="<?php echo e(routeIs('admin::skills') ? 'active' : ''); ?>">
        <a href="<?php echo e(route('admin::skills')); ?>">Skills</a>
    </li>
</ul>