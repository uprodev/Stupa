<?php
$hotels_banner_image = get_field('hotels_banner_image');
$hotels_banner_title = get_field('hotels_banner_title');
$hotels_banner_paragraph = get_field('hotels_banner_paragraph');
$img_desk = get_field('hotel_picture_desktop');
$img_tab = get_field('hotel_picture_tab');
$img_mob = get_field('hotel_picture_mobile');
?>
<section class="truth-banner hotels-banner">
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
            <?php if ($hotels_banner_image) : ?>
                <div class="icon-wrap">
                    <?php echo wp_get_attachment_image($hotels_banner_image, 'full'); ?>
                </div>
            <?php endif; ?>
            <?php if ($hotels_banner_title) : ?>
                <h1>
                    <?php echo $hotels_banner_title ?>
                </h1>
            <?php endif; ?>
            <?php if ($hotels_banner_paragraph) : ?>
                <p>
                    <?php echo $hotels_banner_paragraph ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>