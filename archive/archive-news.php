<section class="p-top-news">
    <div class="l-container">
        <div class="p-top-news__body">
            <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => $paged,
      );
      $news_query = new WP_Query($args);
      ?>

            <ul class="c-news__list">
                <?php if ($news_query->have_posts()): ?>
                <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                <li class="c-news__item">
                    <a href="<?php the_permalink(); ?>" class="c-news__link">
                        <div class="c-news__img">
                            <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium'); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/news_defaults.png"
                                alt="お知らせ記事画像">
                            <?php endif; ?>
                        </div>
                        <div class="c-news__txt">
                            <div class="c-news__head">
                                <time class="c-news__time" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </time>
                                <?php $category = get_the_category();
                    if ($category): ?>
                                <div class="c-news__cat"><?php echo esc_html($category[0]->name); ?></div>
                                <?php endif; ?>
                            </div>
                            <p class="c-news__body">
                                <?php echo wp_trim_words(get_the_excerpt(), 50, '…'); ?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
                <?php else: ?>
                <li class="c-news__item">
                    <p>現在お知らせはありません。</p>
                </li>
                <?php endif; ?>
            </ul>

            <?php if (function_exists('wp_pagenavi')): ?>
            <div class="c-pagination">
                <?php wp_pagenavi(array('query' => $news_query)); ?>
            </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>