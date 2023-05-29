<?php
$way_title = get_field('way_title', 'options');
$way_button = get_field('way_button', 'options');
?>
<section class="way">
    <div class="content-width">
        <?php if ($way_title): ?>
            <h2>
                <?php echo $way_title; ?>
            </h2>
        <?php endif; ?>
        <div class="btn-wrap">
            <?php if ($way_button):
                $link = $way_button['url'];
                $title = $way_button['title']; ?>
                <a href="<?php echo esc_url($link); ?>" class="btn-default"><span><img
                            src="<?php echo get_template_directory_uri() . '/img/arrow-right.svg' ?>" alt=""></span><b>
                        <?php echo esc_html($title); ?>
                    </b></a>
            <?php endif; ?>
        </div>
    </div>
</section>