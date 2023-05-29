<?php
$title_about = get_field('title_about');
$subtitle_about = get_field('subtitle_about');
$paragraph_about = get_field('paragraph_about');
$images_about = get_field('images_about');
?>
<section class="about" id="about">
    <div class="content-width">
        <div class="content">
            <div class="left">
                <?php if ($title_about): ?>
                    <h2 class="title-img">
                        <?php echo $title_about; ?>
                    </h2>
                <?php endif; ?>
                <?php if ($subtitle_about): ?>
                    <p class="title">
                        <?php echo $subtitle_about; ?>
                    </p>
                <?php endif; ?>
                <?php if ($paragraph_about): ?>
                    <p>
                        <?php echo $paragraph_about; ?>
                    </p>
                <?php endif; ?>
                <?php if ($images_about): ?>
                    <div class="nav-wrap">
                        <div class="swiper-button-next img-next"><img
                                src="<?php echo get_template_directory_uri() . '/img/arrow-right.svg' ?>"
                                alt="<?php echo $title_about ?>"></div>
                        <div class="swiper-button-prev img-prev"><img
                                src="<?php echo get_template_directory_uri() . '/img/arrow-right.svg' ?>"
                                alt="<?php echo $title_about ?>"></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($images_about): ?>
                <div class="slider-wrap">
                    <div class="swiper slider-img">
                        <div class="swiper-wrapper">
                            <?php foreach ($images_about as $image): ?>
                                <div class="swiper-slide">
                                    <a data-fancybox="gallery"
                                        href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>">
                                        <?php echo wp_get_attachment_image($image, 'full'); ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>