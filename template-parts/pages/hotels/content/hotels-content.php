<?php
$content_fields = get_field('content_fields');
$link_next = get_field('link_next');
$link_previous = get_field('link_previous');
$counter = 1;
?>
<section class="hotels-content">
    <div class="content-width">
        <?php if ($content_fields): ?>
            <div class="content">
                <?php foreach ($content_fields as $field):
                    $content_image = $field['content_image'];
                    $content_title = $field['content_title'];
                    $content_distans = $field['content_distans'];
                    $content_stars = $field['content_stars'];
                    $button = $field['button']; ?>
                    <div class="item">
                        <div class="slider-wrap">
                            <?php if ($content_fields): ?>
                                <div class="swiper slider-min-img slider-min-img-<?php echo $counter; ?>">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($content_image as $image): ?>
                                            <div class="swiper-slide">
                                                <figure>
                                                    <?php echo wp_get_attachment_image($image, 'full'); ?>
                                                </figure>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            <?php endif; ?>
                            <div class="swiper-pagination min-img-pagination-<?php echo $counter; ?>"></div>
                        </div>
                        <div class="text">
                            <?php if ($content_title):
                                $link = $content_title['url'];
                                $title = $content_title['title']; ?>
                                <h3><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h3>
                            <?php endif; ?>
                            <?php if ($content_distans): ?>
                                <p>
                                    <?php echo $content_distans ?>
                                </p>
                            <?php endif; ?>
                            <?php if ($content_stars): ?>
                                <div class="cost-wrap">
                                    <?php for ($i = 0; $i < $content_stars; $i++) { ?>
                                        <img src="<?php echo get_template_directory_uri() . '/img/icon-8.svg' ?>" alt="star">
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($button):
                                $link = $button['url']; ?>
                                <div class="btn-wrap">
                                    <a href="<?php echo esc_url($link); ?>" class="btn-default"><span><img
                                                src="<?php echo get_template_directory_uri() . '/img/arrow-right.svg' ?>"
                                                alt="button"></span><b>
                                            <?php echo __('VIEW', 'stupa') ?>
                                        </b></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                    $counter++;
                endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="pagination">
            <ul>
                <?php if ($link_previous):
                    $link = $link_previous['url']; ?>
                    <li class="disabled"><a href="<?php echo esc_url($link); ?>"><span class="icon-wrap"><img
                                    src="<?php echo get_template_directory_uri() . '/img/icon-9.svg' ?>" alt=""></span>
                            <?php echo __('Previous', 'stupa') ?>
                        </a></li>
                <?php endif; ?>
                <?php if ($link_next):
                    $link = $link_next['url']; ?>
                    <li><a href="<?php echo esc_url($link); ?>"></span>
                            <?php echo __('Next', 'stupa') ?> <span class="icon-wrap"><img
                                    src="<?php echo get_template_directory_uri() . '/img/icon-9.svg' ?>" alt=""></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>