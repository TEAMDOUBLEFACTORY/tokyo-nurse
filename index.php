<?php get_header(); ?>
<div class="u-flex">
    <div class="l-content">
        <?php get_template_part('template-parts/header'); ?>
        <main class="l-main">
            <section class="p-top-news">
                <div class="l-container">
                    <div class="p-top-news__inner">
                        <div class="p-top-news__head">
                            <h2 class="c-sec__title"><span class="c-sec__title--en">NEWS</span><span
                                    class="c-sec__title--ja">お知らせ</span></h2>
                            <div class="c-btn p-top-news__btn"><a href="" class="c-btn__link">一覧を見る</a></div>
                        </div>
                        <div class="p-top-news__body">
                            <ul class="c-news__list">
                                <li class="c-news__item"><a href="" class="c-news__link">
                                        <div class="c-news__img"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sanko-logo.svg"
                                                alt=""></div>
                                        <div class="c-news__txt">
                                            <div class="c-news__head"><time class="c-news__time">2025.01.01</time>
                                                <div class="c-news__cat">カテゴリ名</div>
                                            </div>
                                            <p class="c-news__body">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="c-news__item"><a href="" class="c-news__link">
                                        <div class="c-news__img"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sanko-logo.svg"
                                                alt=""></div>
                                        <div class="c-news__txt">
                                            <div class="c-news__head"><time class="c-news__time">2025.01.01</time>
                                                <div class="c-news__cat">カテゴリ名</div>
                                            </div>
                                            <p class="c-news__body">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="c-news__item"><a href="" class="c-news__link">
                                        <div class="c-news__img"><img
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sanko-logo.svg"
                                                alt=""></div>
                                        <div class="c-news__txt">
                                            <div class="c-news__head"><time class="c-news__time">2025.01.01</time>
                                                <div class="c-news__cat">カテゴリ名</div>
                                            </div>
                                            <p class="c-news__body">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_template_part('template-parts/footer'); ?>
    </div>
    <?php get_template_part('template-parts/side-menu'); ?>
</div>
<?php get_footer(); ?>