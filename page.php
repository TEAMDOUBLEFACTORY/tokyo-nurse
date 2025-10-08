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
                    <div class="l-container">
                        <?php if (is_page('accessmap')): ?>
                        <?php get_template_part('page/page', 'accessmap'); ?>
                        <?php elseif (is_page('admissions')): ?>
                        <?php get_template_part('page/page', 'admissions'); ?>
                        <?php elseif (is_page('campuslife')): ?>
                        <?php get_template_part('page/page', 'campuslife'); ?>
                        <?php elseif (is_page('careers')): ?>
                        <?php get_template_part('page/page', 'careers'); ?>
                        <?php elseif (is_page('contact')): ?>
                        <?php get_template_part('page/page', 'contact'); ?>
                        <?php elseif (is_page('course')): ?>
                        <?php get_template_part('page/page', 'course'); ?>
                        <?php elseif (is_page('department')): ?>
                        <?php get_template_part('page/page', 'department'); ?>
                        <?php elseif (is_page('faq')): ?>
                        <?php get_template_part('page/page', 'faq'); ?>
                        <?php elseif (is_page('corporate')): ?>
                        <?php get_template_part('page/page', 'corporate'); ?>
                        <?php elseif (is_page('educator')): ?>
                        <?php get_template_part('page/page', 'educator'); ?>
                        <?php elseif (is_page('parents')): ?>
                        <?php get_template_part('page/page', 'parents'); ?>
                        <?php elseif (is_page('for-prospective-students')): ?>
                        <?php get_template_part('page/page', 'for-prospective-students'); ?>
                        <?php elseif (is_page('online-admissions')): ?>
                        <?php get_template_part('page/page', 'online-admissions'); ?>
                        <?php elseif (is_page('tuition-support')): ?>
                        <?php get_template_part('page/page', 'tuition-support'); ?>
                        <?php else: ?>
                        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                        <?php remove_filter('the_content', 'wpautop'); ?>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
        <?php get_template_part('template-parts/footer'); ?>
    </div>

    <?php get_template_part('template-parts/side-menu'); ?>
</div>
<?php get_footer(); ?>