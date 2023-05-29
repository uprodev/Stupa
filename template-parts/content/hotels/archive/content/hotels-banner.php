<?php
$hotels_banner_image = get_field('hotels_banner_image', 'options');
$hotels_banner_title = get_field('hotels_banner_title', 'options');
$hotels_banner_paragraph = get_field('hotels_banner_paragraph', 'options');

?>
<section class="truth-banner hotels-banner">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-6-1.jpg' ?>" alt="banner" class="img-desk">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-6-2.jpg' ?>" alt="banner" class="img-tab">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-6-3.jpg' ?>" alt="banner" class="img-mob">
    </div>
    <div class="content-width">
        <div class="content">
            <?php if ($hotels_banner_image): ?>
                <div class="icon-wrap">
                    <?php echo wp_get_attachment_image($hotels_banner_image, 'full'); ?>
                </div>
            <?php endif; ?>
            <?php if ($hotels_banner_title): ?>
                <h1>
                    <?php echo $hotels_banner_title ?>
                </h1>
            <?php endif; ?>
            <?php if ($hotels_banner_paragraph): ?>
                <p>
                    <?php echo $hotels_banner_paragraph ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>