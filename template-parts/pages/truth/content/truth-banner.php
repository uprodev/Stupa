<?php
$first_truth_image = get_field('first_truth_image');
$first_truth_title = get_field('first_truth_title');
$first_truth_paragraph = get_field('first_truth_paragraph');
$img_desk = get_field('truth_picture_desktop');
$img_tab = get_field('truth_picture_tab');
$img_mob = get_field('truth_picture_mobile');

?>
<section class="truth-banner">
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
            <?php if ($first_truth_image) : ?>
                <div class="icon-wrap">
                    <?php echo wp_get_attachment_image($first_truth_image, 'full'); ?>
                </div>
            <?php endif; ?>
            <?php if ($first_truth_title) : ?>
                <h1>
                    <?php echo $first_truth_title; ?>
                </h1>
            <?php endif; ?>
            <?php if ($first_truth_paragraph) : ?>
                <p>
                    <?php echo $first_truth_paragraph; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>