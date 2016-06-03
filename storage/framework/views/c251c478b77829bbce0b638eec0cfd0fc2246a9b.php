<section class="portfolio" id="portfolio">

    <div class="portfolio-margin">

        <h1>PORTFOLIO</h1>
        <hr/>

        <ul class="grid">

            <?php foreach($sites as $site): ?>
                <li>
                    <a href="<?php echo e($site->url); ?>">
                        <img src="/uploads/screenshots/<?php echo e($site->screenshot); ?>" alt="Portfolio item"/>
                        <div class="text">
                            <p><?php echo e($site->name); ?></p>
                            <p class="description"><?php echo e($site->description); ?></p>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>

    </div>

</section>