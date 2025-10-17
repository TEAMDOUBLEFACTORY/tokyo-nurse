<?php get_header(); ?>

<div class="u-flex">
    <div class="l-content">
        <?php get_template_part('template-parts/header'); ?>
        <main class="l-main" id="<?php echo $post->post_name; ?>">
            <div class="l-page">
                <div class="c-pageheader">
                    <div class="l-container">
                        <div class="c-pageheader_title c-pageheader_title--<?php echo $post->post_name; ?>">
                            <p class="c-pageheader_title--en"><?php echo $post->post_name; ?></p>
                            <h2 class="c-pageheader_title--jp"><?php the_title(); ?></h2>
                        </div>
                        <div class="c-breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                            <?php if (function_exists('bcn_display')) {
                                bcn_display();
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="l-main--content">
                    <div class="l-container l-article">
                        <div class="l-article-wrap u-flex">
                            <article class="l-article-box">
                                <div class="c-sec__head">
                                    <h1 class="c-sec__title l-article-title"><?php the_title(); ?>
                                    </h1>
                                </div>
                                <?php remove_filter ('the_content', 'wpautop'); ?>
                                <?php the_content(); ?>
                            </article>
                            <aside class="l-article-sidebox">

                                <div class="l-categories">
                                    <span>カテゴリから探す</span>
                                    <ul class="l-categories__list">
                                        <li class="l-categories__item"><a href="<?php echo home_url("news"); ?>">全て</a>
                                        </li>
                                        <?php
        $args = array(
            'hide_empty' => true, // 投稿がないカテゴリを非表示
            'orderby'    => 'name',
            'order'      => 'ASC'
        );
        $categories = get_categories($args);

        foreach ($categories as $category) :
        ?>
                                        <li class="l-categories__item">
                                            <a href="<?php echo get_category_link($category->term_id); ?>">
                                                <?php echo esc_html($category->name); ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>


                                <div class="l-years">
                                    <span>学校からのお知らせ</span>
                                    <ul class="l-years__list">
                                        <?php
        $years = $wpdb->get_col("
            SELECT DISTINCT YEAR(post_date)
            FROM $wpdb->posts
            WHERE post_status = 'publish'
            AND post_type = 'post'
            ORDER BY post_date DESC
        ");

        foreach ($years as $year) {
            echo '<li class="l-years__item"><a href="' . get_year_link($year) . '">' . $year . '年度</a></li>';
        }
        ?>
                                    </ul>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
                <?php get_template_part('template-parts/event-cta'); ?>
            </div>
        </main>
        <?php get_template_part('template-parts/footer'); ?>
    </div>

    <?php get_template_part('template-parts/side-menu'); ?>
</div>
<?php get_footer(); ?>