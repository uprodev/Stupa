<?php
$background_title = get_field('background_title');
$title_about_stupa = get_field('title_about_stupa');
$text_repeater = get_field('text_repeater');
$text_block_left = get_field('text_block_left');
$text_block_center = get_field('text_block_center');
$text_block_right = get_field('text_block_right');
?>
<section class="text-col-3">
    <?php if ($background_title): ?>
        <div class="bg">
            <p>
                <?php echo $background_title; ?>
            </p>
        </div>
    <?php endif; ?>
    <?php if ($text_repeater): ?>
        <div class="content-width">
            <?php if ($title_about_stupa): ?>
                <div class="top">
                    <h2>
                        <?php echo $title_about_stupa; ?>
                    </h2>
                </div>
            <?php endif; ?>
            <div class="content">
                <?php if ($text_block_left): ?>
                    <div class="item item-1">
                        <h2 class="title-img" data-aos-delay="100" data-aos="fade-down">
                            <?php echo ($text_block_left['title']); ?>
                        </h2>
                        <p data-aos-delay="200" data-aos="fade-down">
                            <?php echo ($text_block_left['paragraph']); ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if ($text_block_center): ?>
                    <div class="item item-2">
                        <p data-aos-delay="300" data-aos="fade-down">
                            <?php echo ($text_block_center['paragraph_top']); ?>
                        </p>
                        <h2 class="title-img" data-aos-delay="400" data-aos="fade-down">
                            <?php echo ($text_block_center['title']); ?>
                        </h2>
                        <p data-aos-delay="500" data-aos="fade-down">
                            <?php echo ($text_block_center['paragraph_bottom']); ?>
                        </p>
                    </div>
                <?php endif; ?>
                <?php if ($text_block_right): ?>
                    <div class="item item-3">
                        <p data-aos-delay="600" data-aos="fade-down">
                            <?php echo ($text_block_right['paragraph']); ?>
                        </p>
                        <h2 class="title-img" data-aos-delay="700" data-aos="fade-down">
                            <?php echo ($text_block_right['title']); ?>
                        </h2>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

</section>