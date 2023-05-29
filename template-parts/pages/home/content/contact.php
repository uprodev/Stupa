<?php
$contact_image = get_field('contact_image');
$contact_title = get_field('contact_title');
$contact_second_title = get_field('contact_second_title');
$contact_paragraph_location = get_field('contact_paragraph_location');
$contact_link_maps = get_field('contact_link_maps');

$contact_title_book = get_field('contact_title_book');
$contact_link_book = get_field('contact_link_book');
$contact_title_work_hours = get_field('contact_title_work_hours');
$contact_title_time = get_field('contact_title_time');

$contact_title_right = get_field('contact_title_right');
$contact_paragraph_right = get_field('contact_paragraph_right');
$contact_button = get_field('contact_button');
?>
<section class="contact">
    <?php if ($contact_image): ?>
        <div class="bg">
            <?php echo wp_get_attachment_image($contact_image, 'full') ?>
        </div>
    <?php endif; ?>
    <div class="content-width">
        <div class="content">
            <div class="left">
                <?php if ($contact_title): ?>
                    <h2 class="title-img title-img-yellow">
                        <?php echo $contact_title ?>
                    </h2>
                <?php endif; ?>
                <?php if ($contact_second_title): ?>
                    <p class="title">
                        <?php echo $contact_second_title ?>
                    </p>
                <?php endif; ?>
                <?php if ($contact_paragraph_location): ?>
                    <p>
                        <?php echo $contact_paragraph_location ?>
                    </p>
                <?php endif; ?>
                <?php if ($contact_link_maps): ?>
                    <p class="map"><a href="<?php echo esc_url($contact_link_maps['url']); ?>" target="_blank">
                            <?php echo esc_html($contact_link_maps['title']); ?>
                        </a></p>
                <?php endif; ?>
                <ul>
                    <li>
                        <?php if ($contact_title_book): ?>
                            <p>
                                <?php echo $contact_title_book ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($contact_link_book): ?>
                            <p><a href="<?php echo esc_url($contact_link_book['url']); ?>"><?php echo esc_html($contact_link_book['title']); ?></a></p>
                        <?php endif; ?>
                    </li>
                    <li>
                        <?php if ($contact_title_work_hours): ?>
                            <p>
                                <?php echo $contact_title_work_hours ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($contact_title_time): ?>
                            <p class="time">
                                <?php echo $contact_title_time ?>
                            </p>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <div class="right">
                <?php if ($contact_title_right): ?>
                    <h2 class="title-img title-img-orange">
                        <?php echo $contact_title_right ?>
                    </h2>
                <?php endif; ?>
                <?php if ($contact_paragraph_right): ?>
                    <p>
                        <?php echo $contact_paragraph_right ?>
                    </p>
                <?php endif; ?>
                <?php if ($contact_title_time): ?>
                    <div class="btn-wrap">
                        <a href="<?php echo esc_url($contact_button['url']); ?>" class="btn-img"><span><span>
                                    <?php echo esc_html($contact_button['title']); ?>
                                </span></span></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>