<?php
$quote_title = get_field('quote_title');
$quote_paragraph = get_field('quote_paragraph');
$quote_image = get_field('quote_image');
?>
<section class="img-title anim-img">
    <div class="content-width">
        <div class="content">
            <?php if ($quote_image): ?>
                <figure>
                    <?php echo wp_get_attachment_image($quote_image, 'full'); ?>
                </figure>
            <?php endif; ?>
            <div class="text-wrap">
                <?php if ($quote_title): ?>
                    <h2>
                        <?php echo $quote_title ?>
                    </h2>
                <?php endif; ?>
                <?php if ($quote_paragraph): ?>
                    <p>
                        <?php echo $quote_paragraph ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>