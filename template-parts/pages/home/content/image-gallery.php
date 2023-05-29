<?php
$image_gallery = get_field('image_gallery');
?>
<section class="img-scroll">
    <?php if ($image_gallery): ?>
        <div class="content">
            <?php foreach ($image_gallery as $image): ?>
                <figure class="item item-big">
                    <a href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" data-fancybox="img">
                        <?php echo wp_get_attachment_image($image, 'full'); ?>
                    </a>
                </figure>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>