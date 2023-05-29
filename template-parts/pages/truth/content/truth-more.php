<?php
$more_title = get_field('more_title');
$more_paragraph = get_field('more_paragraph');
$more_button = get_field('more_button');
$more_image = get_field('more_image');

?>
<section class="text-more-img">
    <div class="content-width">
        <div class="content">
            <div class="text">
                <?php if ($more_title): ?>
                    <h2 class="title-img title-img-red">
                        <?php echo $more_title ?>
                    </h2>
                <?php endif; ?>
                <?php if ($more_paragraph): ?>
                    <p>
                        <?php echo $more_paragraph ?>
                    </p>
                <?php endif; ?>
                <?php if ($more_button):
                    $link = $more_button['url'];
                    $title = $more_button['title']; ?>
                    <div class="btn-wrap">
                        <a href="<?php echo esc_url($link); ?>" class="btn-default"><span><img
                                    src="<?php echo get_template_directory_uri() . '/img/arrow-right.svg' ?>"
                                    alt="<?php echo esc_html($title); ?>"></span><b>
                                <?php echo esc_html($title); ?>
                            </b></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($more_image): ?>
                <div class="img-wrap">
                    <div class="wrap">
                        <?php foreach ($more_image as $image): ?>
                            <?php echo wp_get_attachment_image($image, 'full'); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>