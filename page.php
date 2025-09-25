<?php get_header(); ?>
<div class="p-page">
    <div class="c-pageheader">
        <div class="l-container">
            <div class="c-pageheader_title">
                <?php if (get_field('enttl')): ?>
                    <p class="c-pageheader_title--en"><?php the_field('enttl'); ?></p>
                <?php endif; ?>
                <?php if (get_field('jattl')): ?>
                    <h2 class="c-pageheader_title--jp"><?php the_field('jattl'); ?></h2>
                <?php endif; ?>
            </div>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>
        </div>
    </div>

    <div class="l-container">
        <div class="entry-content"><?php the_content(); ?></div>
    </div>
</div>
<?php get_footer(); ?>