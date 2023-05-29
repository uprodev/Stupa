<?php
$prefooter_image = get_field('prefooter_image');
$prefooter_icon = get_field('prefooter_icon');
$prefooter_title = get_field('prefooter_title');
$prefooter_button = get_field('prefooter_button');
?>
<section class="bottom-link">
    <?php if ($prefooter_image): ?>
        <div class="bg">
            <?php echo wp_get_attachment_image($prefooter_image, 'full'); ?>
        </div>
    <?php endif; ?>
    <div class="content-width">
        <?php if ($prefooter_icon): ?>
            <div class="icon-wrap">
                <?php echo wp_get_attachment_image($prefooter_icon, 'full'); ?>
            </div>
        <?php endif; ?>
        <?php if ($prefooter_title): ?>
            <h2>
                <?php echo $prefooter_title; ?>
            </h2>
        <?php endif; ?>
        <?php if ($prefooter_button):
            $link = $prefooter_button['url'];
            $title = $prefooter_button['title'] ?>
            <div class="btn-wrap">
                <a href="<?php echo esc_url($link); ?>" class="btn-img"><span><span>
                            <?php echo esc_html($title); ?>
                        </span></span></a>
            </div>
        <?php endif; ?>
    </div>
</section>