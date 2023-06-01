<?php
$counter = 1;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$posts_args = array(
    'meta_key' => 'sort_by_number',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'post_status' => 'publish',
    'post_type' => 'hotels',
    'posts_per_page' => 6,
    'suppress_filters' => false,
    'paged' => $paged,
);
$argsPagination = array(
    'show_all' => false,
    'end_size' => 1,
    'mid_size' => 1,
    'prev_next' => true,
    'prev_text' => __('Previous'),
    'next_text' => __('Next'),
    'add_args' => false,
    'add_fragment' => '',
    'class' => 'pagination',
);

$post_query = new WP_Query($posts_args);
if ($post_query->have_posts()): ?>
    <section class="hotels-content">
        <div class="content-width">
            <div class="content">
                <?php while ($post_query->have_posts()):
                    $post_query->the_post();
                    $ID = get_the_ID();
                    $content_image = get_field('content_image');
                    $content_title = get_the_title();
                    $content_stars = get_field('content_stars');
                    $button = get_field('button');
                    if ($button) {
                        $link = $button['url'];
                    }
                    ?>
                    <?php if ($content_stars > 3):
                        $content_stars = 3;
                    endif; ?>
                    <div class="item">
                        <div class="slider-wrap">
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
                            <div class="swiper-pagination min-img-pagination-<?php echo $counter; ?>"></div>
                        </div>
                        <div class="text">
                            <?php if ($content_title): ?>
                                <h3><a href="<?php echo $link ?>">
                                        <?php echo $content_title; ?>
                                    </a></h3>
                            <?php endif; ?>
                            <p>
                                <?php echo get_the_excerpt($id); ?>
                            </p>
                            <?php if ($content_stars): ?>
                                <div class="cost-wrap">
                                    <?php for ($i = 0; $i < $content_stars; $i++) { ?>
                                        <img src="<?php echo get_template_directory_uri() . '/img/icon-8.svg' ?>" alt="star">
                                    <?php } ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($button): ?>
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
                endwhile;
                wp_reset_postdata(); ?>
            </div>
            <div class="pagination">
                <?php the_posts_pagination($argsPagination); ?>
            </div>
        </div>
    </section>
<?php endif; ?>