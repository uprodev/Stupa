<?php
$title_first = get_field('title_first_screen');
$subtitle_first = get_field('subtitle_first_screen');
$second_first = get_field('second_first_screen');
$image_first = get_field('image_first_screen');
$button_first = get_field('button_first_screen');
$img_desk = get_field('home_picture_desktop');
$img_tab = get_field('home_picture_Tab');
$img_mob = get_field('home_picture_mobile');

?>
<section class="home-banner">
    <div class="bg">
        <?php if ($img_desk) : ?>
            <img src="<?php echo wp_get_attachment_image_url($img_desk, 'full'); ?>" alt="<?php echo $title_first ?>" class="img-desk">
        <?php endif; ?>
        <?php if ($img_tab) : ?>
            <img src="<?php echo wp_get_attachment_image_url($img_tab, 'full'); ?>" alt="<?php echo $title_first ?>" class="img-tab">
        <?php endif; ?>
        <?php if ($img_mob) : ?>
            <img src="<?php echo wp_get_attachment_image_url($img_mob, 'full'); ?>" alt="<?php echo $title_first ?>" class="img-mob">
        <?php endif; ?>
    </div>
    <div class="content-width">
        <div class="content">
            <?php if ($title_first) : ?>
                <h1>
                    <?php echo $title_first; ?>
                </h1>
            <?php endif; ?>
            <?php if ($subtitle_first) : ?>
                <p>
                    <?php echo $subtitle_first; ?>
                </p>
            <?php endif; ?>
            <?php if ($second_first) : ?>
                <p class="title">
                    <?php echo $second_first; ?>
                </p>
            <?php endif; ?>
            <?php if ($image_first) : ?>
                <div class="img-wrap">
                    <?php echo wp_get_attachment_image($image_first, 'full') ?>
                </div>
            <?php endif; ?>
            <?php if ($button_first) : ?>
                <div class="btn-wrap">
                    <a href="<?php echo esc_url($button_first['url']); ?>" class="btn-img scroll"><span><span>
                                <?php echo esc_html($button_first['title']); ?>
                            </span></span></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>