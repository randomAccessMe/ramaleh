<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/resume.css">
    <link rel="stylesheet" type="text/css"
          href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all"/>

</head>
<body>

<div class="hr"></div>
<div class="row">
    <div class="left top-left">
        <h1><?php echo e($resume->name); ?></h1>
        <h2>Senior PHP Developer</h2>
    </div>
    <div class="top-right">
        <ul>
            <li><span>Phone:</span><?php echo e($resume->phone); ?></li>
            <li><span>Address:</span><?php echo e($resume->address); ?></li>
            <li><span>Email:</span><a href="mailto:<?php echo e($resume->email); ?>"><?php echo e($resume->email); ?></a></li>
            <li><span>Github:</span><a href="http://github.com/randomAccessMe">Github.com/randomAccessMe</a</li>
            <li><span>LinkedIn:</span><a href="https://www.linkedin.com/in/rami-al-maleh-81b22b91">https://goo.gl/3UC5bB</a</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="left body-left">
        <h2>Summary</h2>
    </div>
    <div class="right body-right">
        <p><?php echo e($resume->summary); ?></p>
    </div>
</div>
<div class="row">
    <div class="left body-left">
        <h2>Skills</h2>
    </div>
    <div class="right body-right skills">
        <div class="row">
            <?php for($i=0; $i<count($skills); $i++): ?>
                <span><?php echo e($skills[$i]->name); ?></span>
                <?php if(($i + 1) % 5 == 0): ?>
                    </div>
                    <div class="row">
                <?php endif; ?>
            <?php endfor; ?>
    </div>
</div>
<div class="row">
    <?php for($i=0; $i<count($jobs); $i++): ?>
    <div class="left body-left">
        <?php if($i==0): ?>
            <h2>Experience</h2>
        <?php endif; ?>
    </div>
    <div class="right body-right row">
        <div class="left" style="width: 50%">
            <h3><?php echo e($jobs[$i]->employer); ?></h3>
            <h4><?php echo e($jobs[$i]->title); ?></h4>
        </div>
        <div class="right body-right" style="width: 50%">
            <p><?php echo e($jobs[$i]->start_date); ?> - <?php echo e($jobs[$i]->until_date); ?></p>
        </div>
        <p><?php echo e($jobs[$i]->experience); ?></p>
    </div>
    <?php endfor; ?>
</div>

<div class="row">
    <div class="left body-left">
        <h2>Education</h2>
    </div>
    <div class="right body-right">
        <h3>Jordan University of Science and Technology</h3>
        <p>Bachelors In Computer Science ___ 3.75 GPA</p>
    </div>
</div>
</body>
</html>
