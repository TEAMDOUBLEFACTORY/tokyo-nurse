<?php get_header(); ?>

<div class="u-flex">
    <div class="l-content">
        <?php get_template_part('template-parts/header'); ?>
        <main class="l-main" id="<?php echo $post->post_name; ?>">
            <div class="l-page">
                <div class="c-pageheader">
                    <div class="l-container">
                        <div class="c-pageheader_title c-pageheader_title--<?php echo $post->post_name; ?>">
                            <p class="c-pageheader_title--en">
                                NEWS
                            </p>
                            <h2 class="c-pageheader_title--jp">
                                <?php
        if (is_year()) {
            // 年別アーカイブのときは「○○年度」と表示
            echo get_the_date('Y') . '年度';
        } else {
            // それ以外（投稿・カテゴリーページなど）はカテゴリー名を表示
            $category = get_the_category();
            if ($category) {
                echo esc_html($category[0]->name);
            }
        }
        ?>
                            </h2>
                        </div>

                        <div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                            <?php if (function_exists('bcn_display')) {
                                bcn_display();
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="l-main--content">
                    <section class="p-sub-news">
                        <div class="l-container">
                            <div class="l-article-wrap u-flex">
                                <div class="p-sub-news__body">
                                    <?php if (have_posts()): ?>
                                    <ul class="c-news__list">
                                        <?php while (have_posts()): the_post(); ?>
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
                                                        <time class="c-news__time"
                                                            datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                                            <?php echo get_the_date('Y.m.d'); ?>
                                                        </time>
                                                        <?php $category = get_the_category();
                    if ($category): ?>
                                                        <div class="c-news__cat">
                                                            <?php echo esc_html($category[0]->name); ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <p class="c-news__body">
                                                        <?php the_title(); ?>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <?php else: ?>
                                    <p>現在お知らせはありません。</p>
                                    <?php endif; ?>
                                    <?php if (function_exists('wp_pagenavi')): ?>
                                    <div class="c-pagination">
                                        <?php wp_pagenavi(); ?>
                                    </div>
                                    <?php else: ?>
                                    <?php the_posts_pagination(); ?>
                                    <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>

                                </div>
                                <?php get_template_part('template-parts/side-link'); ?>

                            </div>
                        </div>
                    </section>
                </div>

                <?php get_template_part('template-parts/event-cta'); ?>
            </div>
        </main>
        <?php get_template_part('template-parts/footer'); ?>
    </div>

    <?php get_template_part('template-parts/side-menu'); ?>
</div>
<?php get_footer(); ?>