<?php get_header(); ?>
<div class="u-flex">
    <div class="l-content">
        <?php get_template_part('template-parts/header'); ?>
        <main class="l-main">
            <section class="p-top-mv">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/mv-sp.png"
                        media="(max-width: 768px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mv.jpg" alt="">
                </picture>


            </section>
            <section class="p-top-event">
                <div class="l-container">
                    <div class="p-top-event__inner">
                        <div class="p-top-event__head">
                            <h2 class="c-sec__title"><span class="c-sec__title--en">EVENT</span><span
                                    class="c-sec__title--ja">イベント</span></h2>
                            <div class="p-top-event__btn"><a href="" class="c-btn__link">イベント一覧をみる</a></div>
                        </div>
                        <div class="p-top-event__body">

                        </div>
                    </div>
                </div>
            </section>
            <section class="p-top-feature">
                <div class="p-top-feature__infinity js-infinity">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">TOKYO SUMIDA COLLEGE OF NURSING</div>
                        <div class="swiper-slide">TOKYO SUMIDA COLLEGE OF NURSING</div>
                        <div class="swiper-slide">TOKYO SUMIDA COLLEGE OF NURSING</div>
                        <div class="swiper-slide">TOKYO SUMIDA COLLEGE OF NURSING</div>
                    </div>
                </div>
                <div class="p-top-feature__inner">
                    <div class="p-top-feature__left">
                        <div class="p-top-feature__head">
                            <h2 class="c-sec__title p-top-feature__title"><span
                                    class="c-sec__title--ja p-top-feature__title--ja">東京墨田看護専門学校の<span
                                        class="p-top-feature__title--num">5</span>つの特徴</span></h2>
                        </div>
                        <div class="p-top-feature__item">
                            <h3 class="p-top-feature__item-head"><span class="p-top-feature__item-num">01</span><span
                                    class="u-color-main">国家試験合格</span>に向けた<br><span
                                    class="u-color-main">手厚いサポート</span>体制</h3>
                            <p class="p-top-feature__item-description">
                                看護師国家試験では、患者様の身体面や心情面にも配慮して、
                                科学的根拠のある看護行為を選ぶ力が試されます。
                                本校では「なぜこの知識や技術が看護に必要なのか」を考える学習で、使える知識と技術を身につけて合格に導きます。</p>
                        </div>

                        <div class="p-top-feature__tools">
                            <div class="p-top-feature__arrows-prev"></div>
                            <div class="p-top-feature__pagenation"><span
                                    class="p-top-feature__pagenation-current">01</span><span
                                    class="p-top-feature__pagenation-sep"><span
                                        class="p-top-feature__pagenation-sepborder"></span></span><span
                                    class="p-top-feature__pagenation-all">05</span></div>
                            <div class="p-top-feature__arrows-next"></div>
                            <div class="p-top-feature__btn"><a href="" class="c-btn">More</a></div>
                        </div>
                    </div>
                    <div class="p-top-feature__right"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature-img01.jpg"
                            alt="" class="p-top-feature__item-img"></div>
                </div>
            </section>
            <section class="p-top-department">
                <div class="p-top-department__inner">
                    <div class="p-top-department__left">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/feature-img.jpg" alt=""
                            class="p-top-department__img">
                    </div>
                    <div class="p-top-department__right">
                        <div class="p-top-department__head">
                            <h2 class="c-sec__title"><span class="c-sec__title--en">DEPARTMENT</span><span
                                    class="c-sec__title--ja">看護学科紹介</span></h2>
                            <div class="p-top-department__btn"><a href="<?php echo esc_url(home_url('/course/')); ?>"
                                    class="c-btn__link">詳しく見る</a></div>
                        </div>
                        <ul class="p-top-department__list">
                            <li class="p-top-department__item">
                                <a href="<?php echo esc_url(home_url('/course/#carriculum')); ?>"
                                    class="p-top-department__item-link">
                                    <div class="p-top-department__item-content">
                                        <h3 class="p-top-department__item-head"><span
                                                class="p-top-department__item-num">01</span>教育課程</h3>
                                        <p class="c-card1__txt">
                                            3年間で基礎分野から統合分野まで段階を経て、じっくりと学ぶプログラムが用意されています。</p>
                                    </div>
                                </a>
                            </li>
                            <li class="p-top-department__item">
                                <a href="<?php echo esc_url(home_url('/course/#lesspon')); ?>"
                                    class="p-top-department__item-link">
                                    <div class="p-top-department__item-content">
                                        <h3 class="p-top-department__item-head"><span
                                                class="p-top-department__item-num">02</span>授業例</h3>
                                        <p class="c-card1__txt">
                                            看護師としての基礎力をしっかりと育み、国家試験への対策とともに、現場で活かせる力を確実に養っていきます。</p>
                                    </div>
                                </a>
                            </li>
                            <li class="p-top-department__item">
                                <a href="<?php echo esc_url(home_url('/course/#timetable')); ?>"
                                    class="p-top-department__item-link">
                                    <div class="p-top-department__item-content">
                                        <h3 class="p-top-department__item-head"><span
                                                class="p-top-department__item-num">03</span>時間割</h3>
                                        <p class="c-card1__txt">
                                            実習を重ねて、看護の基礎的な力を身につけていくと共に、主体性や心豊かな人間性、そして科学的根拠に基づいた思考過程を育てていきます。</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="p-top-exan">
                <div class="l-container">
                    <div class="p-top-exam__inner">
                        <div class="p-top-exam__head">
                            <h2 class="c-sec__title"><span class="c-sec__title--en --white">EXAM</span><span
                                    class="c-sec__title--ja --white">入試・学費情報</span></h2>
                            <p class="p-top-exam__description">
                                説明テキストがはいります説明テキストがはいります説明<br>テキストがはいります説明テキストがはいります説明テキストがはいります</p>
                        </div>
                        <div class="p-top-exam__body">
                            <ul class="p-top-exam__list">
                                <li class="c-card1">
                                    <a href="<?php echo esc_url(home_url('/guidelines/web-entry/')); ?>"
                                        class="c-card1__link">
                                        <div class="c-card1__content">
                                            <h3 class="c-card1__head">入試ガイド</h3>
                                            <p class="c-card1__txt">
                                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="c-card1">
                                    <a href="<?php echo esc_url(home_url('/guidelines/support/')); ?>"
                                        class="c-card1__link">
                                        <div class="c-card1__content">
                                            <h3 class="c-card1__head">学費サポート</h3>
                                            <p class="c-card1__txt">
                                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-top-carrier">
                <div class="l-container">
                    <div class="p-top-carrier__inner">
                        <div class="p-top-carrier__left">
                            <h2 class="c-sec__title"><span class="c-sec__title--en">CARRER</span><span
                                    class="c-sec__title--ja">実習・資格・就職情報</span></h2>
                            <ul class="p-top-carrier__list">
                                <li class="c-card1">
                                    <a href="<?php echo esc_url(home_url('/guidelines/jobdata/#jobdata')); ?>"
                                        class="c-card1__link">
                                        <div class="c-card1__content">
                                            <h3 class="c-card1__head">実習・資格の取得について</h3>
                                            <p class="c-card1__txt">
                                                『常に振り返り、学生にとって一番よいものを提供していく』という考えに重きを置き、細やかな改善提案を定期的に実施しております。</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="c-card1">
                                    <a href="<?php echo esc_url(home_url('/guidelines/jobdata/#findwork')); ?>"
                                        class="c-card1__link">
                                        <div class="c-card1__content">
                                            <h3 class="c-card1__head">就職について</h3>
                                            <p class="c-card1__txt">
                                                医療機関への就職について詳しいキャリア支援担当が的確にアドバイス。病院での実務経験があるベテラン教員が就職活動中の悩み相談にも乗り、徹底的にサポートします。
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-top-carrier__right"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/home/carrier-img.jpg"
                                alt="" class="p-top-carrier__img">
                        </div>
                    </div>
                </div>
            </section>
            <section class="p-top-news">
                <div class="l-container">
                    <div class="p-top-news__inner">
                        <div class="p-top-news__head">
                            <h2 class="c-sec__title"><span class="c-sec__title--en">NEWS</span><span
                                    class="c-sec__title--ja">お知らせ</span></h2>
                            <div class="p-top-news__btn"><a href="<?php echo esc_url(home_url('/news/')); ?>"
                                    class="c-btn__link">一覧を見る</a></div>
                        </div>
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
                                            <?php the_post_thumbnail('full'); ?>
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
                                                <div class="c-news__cat"><?php echo esc_html($category[0]->name); ?>
                                                </div>
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
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_template_part('template-parts/footer'); ?>
    </div>
    <?php get_template_part('template-parts/side-menu'); ?>
</div>

<script>
const swiper = new Swiper(".js-infinity", {
    loop: true,
    slidesPerView: 'auto',
    speed: 20000,
    allowTouchMove: false,
    spaceBetween: '50px',
    autoplay: {
        delay: 0,
    },
});
</script>
<?php get_footer(); ?>