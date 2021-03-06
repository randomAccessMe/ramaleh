<section class="about-us" id="about-us">

    <div class="content">

        <h1>ABOUT Me</h1>
        <hr/>
        <?php foreach($resume->jobs as $job): ?>
        <h2><?php echo e($job->title); ?></h2>
        <?php /*TODO: extract this into externall css file */ ?>
        <p style="margin: 10px auto"><?php echo e($job->city); ?>, <?php echo e($job->state ? $job->state . ', ' : ''); ?><?php echo e($job->country); ?></p>
        <p style="width:550px; color: #0c0c0c; margin-top: 0"><?php echo e($job->experience); ?></p>
        <?php endforeach; ?>
        <h2>Skills </h2>
        <p style="margin: 10px auto">(Size represents experience)</p>
        <p style="width: 550px">
            <?php $__empty_1 = true; foreach($resume->skills as $skill): $__empty_1 = false; ?>
                 <span style="font-size: <?php echo e($skill->practicedFor() / 2); ?>px; font-weight: bold"><?php echo e($skill->name); ?></span>&nbsp
            <?php endforeach; if ($__empty_1): ?>
                <p>No skills were entered.</p>
            <?php endif; ?>
        </p>

        <div class="column-one">

            <a href="https://github.com/randomAccessMe/ramaleh">
                <div class="circle-one"><i class=" fa fa-github fa-3x"></i></div>
            </a>

            <h2>TAKE A LOOK AT MY CODE</h2>
            <p>
                Take a look behind the scenes, and see how this project was built.
                You can also view other contributions of mine <a href="https://github.com/randomAccessMe">here</a>,
                although most of my contributions are to private repos.
            </p>

        </div>


        <div class="column-two">

            <a href="<?php echo e(route('admin::resume')); ?>">
                <div class="circle-two"></div>
            </a>

            <h2>VISIT THE ADMIN AREA</h2>
            <p>
                To compensate for the lack of websites I can share on here,
                I decided to show off a little bit of my skills in the admin area for this website.
            </p>

        </div>


        <div class="column-three">

            <a href="<?php echo e(route('resume')); ?>">
                <div class="circle-three"></div>
            </a>

            <h2>DOWNLOAD MY RESUME</h2>
            <p>
                In case you were an employer and you like what you see,
                feel free to download a PDF version of my updated resume
                and <a href="#contact">contact me</a> for any questions.
            </p>

        </div>

    </div>

</section>