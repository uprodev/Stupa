<?php
$contact_title = get_field('contact_title');
$contact_Paragraph = get_field('contact_Paragraph');

$contact_paragraph_book = get_field('contact_paragraph_book');
$contact_button_book = get_field('contact_button_book');
$contact_title_phone = get_field('contact_title_phone');
$contact_phone_number = get_field('contact_phone_number');
$contact_e_mail = get_field('contact_e_mail');

$contact_link_map = get_field('contact_link_map');
$contact_invitation = get_field('contact_invitation');
?>
<section class="contact-section">
    <div class="content-width">
        <div class="content">
            <div class="left">
                <?php if ($contact_title): ?>
                    <h2 class="title-img title-img-yellow">
                        <?php echo $contact_title; ?>
                    </h2>
                <?php endif; ?>
                <?php if ($contact_Paragraph): ?>
                    <p>
                        <?php echo $contact_Paragraph; ?>
                    </p>
                <?php endif; ?>
                <?php if ($contact_paragraph_book): ?>
                    <p class="red">
                        <?php echo $contact_paragraph_book; ?>
                    </p>
                <?php endif; ?>
                <?php if ($contact_button_book):
                    $link_url = $contact_button_book['url'];
                    $link_title = $contact_button_book['title']; ?>
                    <div class="btn-wrap">
                        <a href="<?php echo esc_url($link_url); ?>" class="btn-img btn-img-black"><span><span>
                                    <?php echo esc_html($link_title); ?>
                                </span></span></a>

                    </div>
                <?php endif; ?>
                <?php if ($contact_title_phone): ?>
                    <p>
                        <?php echo $contact_title_phone; ?>
                    </p>
                <?php endif; ?>
                <ul>
                    <?php if ($contact_phone_number): ?>
                        <li>
                            <a href="tel:<?php echo $contact_phone_number; ?>"> <img
                                    src="<?php echo get_template_directory_uri() . '/img/icon-10-1.svg' ?>"
                                    alt="<?php echo $contact_title; ?>"><?php echo $contact_phone_number; ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if ($contact_e_mail): ?>
                        <li>
                            <a href="mailto:<?php echo $contact_e_mail; ?>"> <img
                                    src="<?php echo get_template_directory_uri() . '/img/icon-10-2.svg' ?>"
                                    alt="<?php echo $contact_title; ?>"><?php echo $contact_e_mail; ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="right">
                <?php if ($contact_link_map): ?>
                    <div class="map-wrap">
                        <iframe src="<?php echo $contact_link_map; ?>" width="600" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                <?php endif; ?>
                <?php if ($contact_invitation):
                    $link_url = $contact_invitation['url'];
                    $link_title = $contact_invitation['title']; ?>
                    <p><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>