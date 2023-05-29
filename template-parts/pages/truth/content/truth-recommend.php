<?php
$truth_recommend_title = get_field('truth_recommend_title');
$truth_recommend_repeater = get_field('truth_recommend_repeater');
?>
<section class="recommend">
    <div class="content-width">
        <?php if ($truth_recommend_title): ?>
            <h2 class="title-img title-img-yellow">
                <?php echo $truth_recommend_title ?>
            </h2>
        <?php endif; ?>
        <?php if ($truth_recommend_repeater): ?>
            <div class="slider-wrap">
                <div class="swiper recommend-slider">
                    <div class="swiper-wrapper">

                        <?php foreach ($truth_recommend_repeater as $repeater):
                            $recommend_link = $repeater['recommend_link'];
                            $recommend_image = $repeater['recommend_image'];
                            $title_fo_video = $repeater['title_fo_video'];
                            $recommend_title = $repeater['recommend_title'];
                            $recommend_subtitle = $repeater['recommend_subtitle'];
                            $recommend_paragraph = $repeater['recommend_paragraph'];
                            $recommend_button = $repeater['recommend_button'];
                            ?>
                            <div class="swiper-slide">
                                <figure>
                                    <?php if ($recommend_image): ?>
                                        <a href="<?php echo $recommend_link; ?>">
                                            <?php echo wp_get_attachment_image($recommend_image, 'full') ?>
                                            <?php if ($title_fo_video): ?>
                                                <span class="time">
                                                    <?php echo $title_fo_video ?>
                                                </span>
                                            <?php endif; ?>
                                        </a>
                                    <?php endif; ?>
                                </figure>
                                <div class="text">
                                    <?php if ($recommend_title): ?>
                                        <h6 class="title">
                                            <?php echo $recommend_title; ?>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($recommend_subtitle):
                                        $link = $recommend_subtitle['url'];
                                        $title = $recommend_subtitle['title']; ?>
                                        <h6><a href="<?php echo esc_url($link); ?>">
                                                <?php echo esc_html($title); ?>
                                            </a></h6>
                                    <?php endif; ?>
                                    <?php if ($recommend_paragraph): ?>
                                        <p>
                                            <?php echo $recommend_paragraph; ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if ($recommend_button):
                                        $link = $recommend_button['url'];
                                        $title = $recommend_button['title']; ?>
                                        <div class="link-wrap">
                                            <a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>
                </div>

            </div>
        <?php endif; ?>
        <div class="swiper-button-next recommend-next"><img
                src="<?php echo get_template_directory_uri() . '/img/icon-5.svg' ?>" alt=""></div>
        <div class="swiper-button-prev recommend-prev"><img
                src="<?php echo get_template_directory_uri() . '/img/icon-5.svg' ?>" alt=""></div>
    </div>
</section>