<?php
$image = get_field('banner_icon');
$banner_title = get_field('banner_title');
$banner_paragraph = get_field('banner_paragraph');
$img_desk = get_field('pagoda_picture_desktop');
$img_tab = get_field('pagoda_picture_tab');
$img_mob = get_field('pagoda_picture_mobile');
?>
<section class="truth-banner pagoda-banner">
    <div class="bg">
        <?php if ($img_desk) : ?>
            <img src="<?php echo wp_get_attachment_image_url($img_desk, 'full'); ?>" alt="<?php echo $banner_title ?>" class="img-desk">
        <?php endif; ?>
        <?php if ($img_tab) : ?>
            <img src="<?php echo wp_get_attachment_image_url($img_tab, 'full'); ?>" alt="<?php echo $banner_title ?>" class="img-tab">
        <?php endif; ?>
        <?php if ($img_mob) : ?>
            <img src="<?php echo wp_get_attachment_image_url($img_mob, 'full'); ?>" alt="<?php echo $banner_title ?>" class="img-mob">
        <?php endif; ?>
    </div>
    <div class="content-width">
        <div class="content">
            <?php if ($image) : ?>
                <div class="icon-wrap">
                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                </div>
            <?php endif; ?>
            <?php if ($banner_title) : ?>
                <h1>
                    <?php echo $banner_title ?>
                </h1>
            <?php endif; ?>
            <?php if ($banner_paragraph) : ?>
                <p>
                    <?php echo $banner_paragraph ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>