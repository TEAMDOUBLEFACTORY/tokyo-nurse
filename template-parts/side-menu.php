<div class="c-side-menu">
    <nav class="c-side-menu__nav">
        <ul class="c-side-menu__list">
            <li class="c-side-menu__item js-menu-btn">
                <span class="c-side-menu__item--link">
                    <div class="c-side-menu__item--img c-side-menu__bars-icon">
                        <span class="c-side-menu__bar"></span>
                        <span class="c-side-menu__bar"></span>
                        <span class="c-side-menu__bar"></span>
                    </div>
                    <div class="c-side-menu__item--txt">メニュー</div>
                </span>
            </li>
            <li class="c-side-menu__item">
                <a href="<?php echo esc_url(home_url('/event/')); ?>" class="c-side-menu__item--link">
                    <div class="c-side-menu__item--img"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidemenu-icon02.svg"
                            alt="" alt="オープンキャンパス"></div>
                    <div class="c-side-menu__item--txt">オープン<br>キャンパス</div>
                </a>
            </li>
            <li class="c-side-menu__item">
                <a href="https://forms.sanko.ac.jp/21iy2j/tokyonurse/form.php?fno=1&fsno=1&openExternalBrowser=1"
                    target="_blank" class="c-side-menu__item--link">
                    <div class="c-side-menu__item--img"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidemenu-icon03.svg"
                            alt="" alt="資料請求"></div>
                    <div class="c-side-menu__item--txt">資料請求</div>
                </a>
            </li>
            <li class="c-side-menu__item">
                <a href="<?php echo esc_url(home_url('/accessmap/')); ?>" class="c-side-menu__item--link">
                    <div class="c-side-menu__item--img"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/sidemenu-icon04.svg"
                            alt="" alt="アクセス"></div>
                    <div class="c-side-menu__item--txt">アクセス</div>
                </a>
            </li>
        </ul>
    </nav>
    <nav class="c-side-menu2__nav">
        <ul class="c-side-menu2__list">
            <li class="c-side-menu2__item"><a
                    href="<?php echo esc_url(home_url('/schoolguide/advantage/')); ?>">学校施設紹介</a></li>
            <li class="c-side-menu2__item"><a href="<?php echo esc_url(home_url('/course/')); ?>">学科紹介</a></li>
            <li class="c-side-menu2__item"><a href="<?php echo esc_url(home_url('/guidelines/')); ?>">入試・学費情報</a></li>
            <li class="c-side-menu2__item"><a href="<?php echo esc_url(home_url('/jobdata/')); ?>">実習・資格・就職</a></li>
        </ul>
    </nav>
</div>
<div class="c-hamburger">
    <div class="c-hamburger__inner">
        <?php get_template_part('template-parts/nav'); ?>
    </div>
</div>