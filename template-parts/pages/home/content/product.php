<?php
$title_product = get_field('title_product');
$benefits_product = get_field('benefits_product');
$count = 1;
?>
<section class="product">
    <div class="content-width">
        <?php if ($title_product): ?>
            <h2>
                <?php echo $title_product; ?>
            </h2>
        <?php endif; ?>
        <div class="content">
            <div class="info">
                <?php if ('benefits_product'): ?>
                    <ul>
                        <?php while (have_rows('benefits_product')):
                            the_row();
                            $image = get_sub_field('image');
                            $text = get_sub_field('title') ?>
                            <li>
                                <div class="icon-wrap">
                                    <?php echo wp_get_attachment_image($image, 'full') ?>
                                </div>
                                <p>
                                    <?php echo $text ?>
                                </p>
                                <?php if (count($benefits_product) === get_row_index()): ?>
                                    <div class="arrow-wrap">
                                        <img src="<?php echo get_template_directory_uri() . '/img/icon-4-2.svg' ?>"
                                            alt="<?php echo $title_product; ?>">
                                    </div>
                                <?php else: ?>
                                    <div class="arrow-wrap">
                                        <img src="<?php echo get_template_directory_uri() . '/img/icon-4-1.svg' ?>"
                                            alt="<?php echo $title_product; ?>">
                                    </div>
                                <?php endif; ?>
                            </li>

                            <?php
                            $count++;
                        endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <figure>
                <div>
                    <img src="<?php echo get_template_directory_uri() . '/img/img-2-0.svg' ?>"
                        alt="<?php echo $title_product; ?>" class="img img-1">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-2-1.svg' ?>"
                        alt="<?php echo $title_product; ?>" class="img img-2">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-2-2.svg' ?>"
                        alt="<?php echo $title_product; ?>" class="img img-3">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-2-3.svg' ?>"
                        alt="<?php echo $title_product; ?>" class="img img-4">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-2-4.svg' ?>"
                        alt="<?php echo $title_product; ?>" class="img img-5">
                    <img src="<?php echo get_template_directory_uri() . '/img/img-2-5.svg' ?>"
                        alt="<?php echo $title_product; ?>" class="img img-6">
                </div>
            </figure>
        </div>
    </div>
</section>