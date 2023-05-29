<?php
$title_first = get_field('title_first_screen');
$subtitle_first = get_field('subtitle_first_screen');
$second_first = get_field('second_first_screen');
$image_first = get_field('image_first_screen');
$button_first = get_field('button_first_screen');
?>
<section class="home-banner">
    <div class="bg">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-1.jpg' ?>" alt="<?php echo $title_first ?>"
            class="img-desk">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-1-2.jpg' ?>" alt="<?php echo $title_first ?>"
            class="img-tab">
        <img src="<?php echo get_template_directory_uri() . '/img/bg-1-3.jpg' ?>" alt="<?php echo $title_first ?>"
            class="img-mob">
    </div>

    <div class="content-width">
        <div class="content">
            <?php if ($title_first): ?>
                <h1>
                    <?php echo $title_first; ?>
                </h1>
            <?php endif; ?>
            <?php if ($subtitle_first): ?>
                <p>
                    <?php echo $subtitle_first; ?>
                </p>
            <?php endif; ?>
            <?php if ($second_first): ?>
                <p class="title">
                    <?php echo $second_first; ?>
                </p>
            <?php endif; ?>
            <?php if ($image_first): ?>
                <div class="img-wrap">
                    <?php echo wp_get_attachment_image($image_first, 'full') ?>
                </div>
            <?php endif; ?>
            <?php if ($button_first): ?>
                <div class="btn-wrap">
                    <a href="<?php echo esc_url($button_first['url']); ?>" class="btn-img scroll"><span><span>
                                <?php echo esc_html($button_first['title']); ?>
                            </span></span></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>