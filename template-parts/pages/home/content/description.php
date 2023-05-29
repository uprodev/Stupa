<section class="text-col-2">
    <?php if ('block_description'): ?>
        <div class="content-width">
            <div class="content">
                <?php while (have_rows('block_description')):
                    the_row();
                    $title = get_sub_field('title');
                    $paragraph = get_sub_field('paragraph'); ?>
                    <div class="item item-<?php echo get_row_index(); ?>">
                        <?php if (get_row_index() % 2 === 1): ?>
                            <h2 class="title-img title-img-red" data-aos-delay="100" data-aos="fade-down">
                                <?php echo $title; ?></b>
                            </h2>
                            <div class="wrap" data-aos-delay="300" data-aos="fade-down">
                                <?php echo $paragraph; ?>
                            </div>
                        <?php else: ?>
                            <h2 class="title-img title-img-orange" data-aos-delay="500" data-aos="fade-down">
                                <?php echo $title; ?></b>
                            </h2>
                            <div class="wrap" data-aos-delay="700" data-aos="fade-down">
                                <?php echo $paragraph; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</section>