<?php get_header(); ?>

<div class="u-flex">
    <div class="l-content">
        <?php get_template_part('template-parts/header'); ?>
        <main class="l-main" id="<?php echo $post->post_name; ?>">
            <div class="l-page">
                <div class="c-pageheader">
                    <div class="l-container">
                        <div class="c-pageheader_title c-pageheader_title--<?php echo $post->post_name; ?>">
                            <p class="c-pageheader_title--en">NEWS</p>
                            <h2 class="c-pageheader_title--jp">学校からのお知らせ</h2>
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
                            <?php get_template_part('template-parts/side-link'); ?>
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