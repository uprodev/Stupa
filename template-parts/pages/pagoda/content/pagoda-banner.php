<?php
$image = get_field('banner_icon');
$banner_title = get_field('banner_title');
$banner_paragraph = get_field('banner_paragraph');
?>
<section class="truth-banner pagoda-banner">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-7-1.jpg' ?> " alt=" <?php echo $banner_title ?>"
            class=" img-desk">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-7-2.jpg' ?>" alt=" <?php echo $banner_title ?>"
            class=" img-tab">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-7-3.jpg' ?> " alt=" <?php echo $banner_title ?>"
            class=" img-mob">
    </div>
    <div class="content-width">
        <div class="content">
            <?php if ($image): ?>
                <div class="icon-wrap">
                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                </div>
            <?php endif; ?>
            <?php if ($banner_title): ?>
                <h1>
                    <?php echo $banner_title ?>
                </h1>
            <?php endif; ?>
            <?php if ($banner_paragraph): ?>
                <p>
                    <?php echo $banner_paragraph ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>