<?php
$quote_truth_image = get_field('quote_truth_image');
$quote_truth_title = get_field('quote_truth_title');
$quote_truth_paragraph = get_field('quote_truth_paragraph');
?>
<section class="section-bg">
    <?php if ($quote_truth_image): ?>
        <div class="bg">
            <?php echo wp_get_attachment_image($quote_truth_image, 'full'); ?>
        </div>
    <?php endif; ?>
    <div class="content-width">
        <div class="content">
            <?php if ($quote_truth_title): ?>
                <h2>
                    <?php echo $quote_truth_title ?>
                </h2>
            <?php endif; ?>
            <?php if ($quote_truth_paragraph): ?>
                <p>
                    <?php echo $quote_truth_paragraph ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>