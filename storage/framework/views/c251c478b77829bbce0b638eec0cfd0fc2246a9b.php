<section class="portfolio" id="portfolio">

    <div class="portfolio-margin">

        <h1>PORTFOLIO</h1>
        <hr/>

        <p style="width:550px; color: #0c0c0c; text-align: center; margin:auto">Disclaimer: I do not own the websites listed in my portfolio, I have only worked on them doing some all on  my own and contributing to others with a team of developers.</p>

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