<?php
if (get_post_type() === 'page'):
    get_template_part('template-parts/content/page/content', 'none');
elseif (get_post_type() === 'post'):
    if (is_single()):
        get_template_part('template-parts/content/post/single/content', 'none');
    else:
        get_template_part('template-parts/content/post/archive/content', 'none');
    endif;
elseif (get_post_type() === 'hotels'):
    if (is_single()):
        get_template_part('template-parts/content/hotels/single/content', 'none');
    else:
        get_template_part('template-parts/content/hotels/archive/content', 'none');
    endif;
endif;