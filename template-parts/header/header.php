<?php
$logo = get_field('logo', 'option');
$buttons = get_field('header_buttons', 'option');
?>
<header>
    <div class="top-line">
        <div class="content-width">
            <div class="left">
                <div class="open-menu">
                    <a href="#">
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <?php
            if ($logo):
                $logo_size = 'logo_size';
                $logo_url = wp_get_attachment_image_url($logo, $logo_size);
                $logo_alt = get_post_meta($logo, '_wp_attachment_image_alt', true);
                $home_url = (is_front_page()) ? '#page' : get_home_url();
                ?>
                <div class="logo-wrap">
                    <a href="<?php echo $home_url; ?>">
                        <?php if (strripos($logo_url, '.svg')): ?>
                            <img src="<?php echo $logo_url; ?>" alt="<?php echo $logo_alt ?>" width="180" height="76">
                        <?php else: ?>
                            <?php echo wp_get_attachment_image($logo, $logo_size); ?>
                        <?php endif; ?>
                    </a>
                </div>
            <?php endif; ?>
            <nav class="top-menu">
                <div class="lang-wrap">
                    <div class="nice-select" tabindex="0">
                        <span class="current">EN</span>
                        <ul class="list">
                            <li class="option selected"><a href="#">EN</a></li>
                            <li class="option"><a href="#">UA</a></li>
                            <li class="option"><a href="#">RU</a></li>
                        </ul>
                    </div>
                </div>
                <?php if ($buttons): ?>
                    <ul>
                        <?php foreach ($buttons as $item):
                            $button_link = $item['button']; ?>
                            <?php

                            if ($button_link):
                                $link_url = $button_link['url'];
                                $link_title = $button_link['title']; ?>
                                <li><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </nav>
        </div>
    </div>
</header>

<div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="wrap-block">
        <?php
        wp_nav_menu([
            'theme_location' => 'menu-main',
            'menu' => 'menu-main',
            'container' => false,
            'container_class' => false,
            'menu_class' => 'menu-nav-items',
            'echo' => true,
            'fallback_cb' => 'menu-2',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]);
        ?>
        <div class="lang-wrap">
            <div class="nice-select" tabindex="0">
                <span class="current">EN</span>
                <ul class="list">
                    <li class="option selected"><a href="#">EN</a></li>
                    <li class="option"><a href="#">UA</a></li>
                    <li class="option"><a href="#">RU</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>