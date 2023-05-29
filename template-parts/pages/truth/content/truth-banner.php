<?php
$first_truth_image = get_field('first_truth_image');
$first_truth_title = get_field('first_truth_title');
$first_truth_paragraph = get_field('first_truth_paragraph');
?>
<section class="truth-banner">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-3-1.jpg' ?>" alt="banner" class="img-desk">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-3-2.jpg' ?>" alt="banner" class="img-tab">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-3-3.jpg' ?>" alt="banner" class="img-mob">
    </div>
    <div class="content-width">
        <div class="content">
            <?php if ($first_truth_image): ?>
                <div class="icon-wrap">
                    <?php echo wp_get_attachment_image($first_truth_image, 'full'); ?>
                </div>
            <?php endif; ?>
            <?php if ($first_truth_title): ?>
                <h1>
                    <?php echo $first_truth_title; ?>
                </h1>
            <?php endif; ?>
            <?php if ($first_truth_paragraph): ?>
                <p>
                    <?php echo $first_truth_paragraph; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>