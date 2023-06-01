<?php
$content_truth_image = get_field('content_truth_image');
$content_truth = get_field('content_truth');
?>
<section class="truth-content">
  <div class="bg">
    <div class="wrap">
    </div>
  </div>
  <div class="content-width">
    <?php if ($content_truth_image): ?>
      <figure>
        <img src="<?php echo wp_get_attachment_image_url($content_truth_image, 'full'); ?>" alt="image" />
      </figure>
    <?php endif; ?>


    <?php if ($content_truth): ?>
      <div class="content">
        <?php foreach ($content_truth as $content):
          $bachground = $content['truth_bachground_text'];
          $image = $content['truth_image'];
          $title = $content['truth_title'];
          $subtitle = $content['subtitle'];
          $color_for_subtitle = $content['color'];
          $text = $content['text'];
          $sutitle_color = '';
          $title_icon = '';
          if ($color_for_subtitle === 'brown' && $title) {
            $title_icon = '';
            $sutitle_color = '';
          } elseif ($color_for_subtitle === 'yelow' && $title) {
            $title_icon = 'title-img-yellow';
            $sutitle_color = 'info-yellow';
          } elseif ($color_for_subtitle === 'orange' && $title) {
            $title_icon = 'title-img-orange';
            $sutitle_color = 'info-orange';
          } elseif ($color_for_subtitle === 'red' && $title) {
            $title_icon = 'title-img-red';
            $sutitle_color = 'info-red';
          }
          ?>
          <div class="item">
            <?php if ($bachground): ?>
              <div class="bg">
                <p>
                  <?php echo $bachground ?>
                </p>
              </div>
            <?php endif; ?>
            <?php if ($image): ?>
              <div class="text-img">
                <?php echo wp_get_attachment_image($image, 'full'); ?>
              </div>
            <?php endif; ?>
            <div class="text">
              <?php if ($title): ?>
                <h2 class="title-img <?php echo $title_icon; ?>">
                  <?php echo $title ?>
                </h2>
              <?php endif; ?>
              <?php if ($subtitle): ?>
                <p class="info <?php echo $sutitle_color; ?>"><?php echo $subtitle ?></p>
              <?php endif; ?>
              <?php if ($text): ?>
                <p>
                  <?php echo $text ?>
                </p>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>


</section>