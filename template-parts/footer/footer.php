<?php

$email = get_field('e-mail-footer', 'option');
$linkedin = get_field('linkedin', 'option');
$facebook = get_field('facebook', 'option');
$telegram = get_field('telegram', 'option');
$instagram = get_field('instagram', 'option');
$copyright = get_field('copyright', 'option');
$title_first_menu = get_field('title_first_menu', 'option');
$title_second_menu = get_field('title_second_menu', 'option');
if ($title_first_menu) {
    $link_url_title_first_menu = $title_first_menu['url'];
    $link_title_title_first_menu = $title_first_menu['title'];
    $link_target_title_first_menu = $title_first_menu['target'] ? $title_first_menu['target'] : '_self';
}
if ($title_second_menu) {
    $link_url_title_second_menu = $title_second_menu['url'];
    $link_title_title_second_menu = $title_second_menu['title'];
    $link_target_title_second_menu = $title_second_menu['target'] ? $title_second_menu['target'] : '_self';
}
$title_third_menu = get_field('title_third_menu', 'option');
if ($title_third_menu) {
    $link_url_title_third_menu = $title_third_menu['url'];
    $link_title_title_third_menu = $title_third_menu['title'];
    $link_target_title_third_menu = $title_third_menu['target'] ? $title_third_menu['target'] : '_self';
}
$title_fourth_menu = get_field('title_fourth_menu', 'option');
$footer_link = get_field('footer_link', 'option');
?>
<footer id="footer">
    <div class="content-width">
        <nav class="footer-menu">

            <?php
            wp_nav_menu([
                'theme_location' => 'menu-footer-1',
                'menu' => 'menu-footer-1',
                'container' => false,
                'container_class' => false,
                'menu_class' => 'item item-1',
                'echo' => true,
                'fallback_cb' => 'menu-2',
                'items_wrap' => '<ul class="%2$s"><li><h6><a href="' . esc_url($link_url_title_first_menu) . '" target="' . esc_attr($link_target_title_first_menu) . '">' . esc_html($link_title_title_first_menu) . '</a></h6></li>%3$s</ul>'
            ]);
            ?>

            <?php
            wp_nav_menu([
                'theme_location' => 'menu-footer-2',
                'menu' => 'menu-footer-2',
                'container' => false,
                'container_class' => false,
                'menu_class' => 'item item-2',
                'echo' => true,
                'fallback_cb' => 'menu-2',
                'items_wrap' => '<ul class="%2$s"><li><h6><a href="' . esc_url($link_url_title_second_menu) . '" target="' . esc_attr($link_target_title_second_menu) . '">' . esc_html($link_title_title_second_menu) . '</a></h6></li>%3$s</ul>'
            ]);
            ?>

            <?php
            wp_nav_menu([
                'theme_location' => 'menu-footer-3',
                'menu' => 'menu-footer-3',
                'container' => false,
                'container_class' => false,
                'menu_class' => 'item item-3',
                'echo' => true,
                'fallback_cb' => 'menu-2',
                'items_wrap' => '<ul class="%2$s"><li><h6><a href="' . esc_url($link_url_title_third_menu) . '" target="' . esc_attr($link_target_title_third_menu) . '">' . esc_html($link_title_title_third_menu) . '</a></h6></li>%3$s</ul>'
            ]);
            ?>

            <ul class="item item-4">
                <?php if ($title_fourth_menu) :
                    $link_url = $title_fourth_menu['url'];
                    $link_title = $title_fourth_menu['title'];
                    $link_target = $title_fourth_menu['target'] ? $title_fourth_menu['target'] : '_self';
                ?>
                    <li>
                        <h6>
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        </h6>
                    </li>
                <?php endif; ?>
                <?php if ($email) : ?>
                    <li class="email">
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </li>
                <?php endif; ?>
                <li>
                    <ul class="soc">
                        <?php if ($linkedin) : ?>
                            <li>
                                <a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($facebook) : ?>
                            <li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if ($telegram) : ?>
                            <li><a href="<?php echo $telegram; ?>"><i class="fab fa-telegram-plane"></i></a></li>
                        <?php endif; ?>
                        <?php if ($instagram) : ?>
                            <li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="bottom">
        <div class="content-width">
            <?php if ($copyright) : ?>
                <p>
                    <?php echo $copyright; ?>
                </p>
            <?php endif; ?>
            <?php if ($footer_link) : ?>
                <p>
                    <?php echo $footer_link; ?></a>
                </p>
            <?php endif; ?>
        </div>
    </div>
</footer>