$(function () {
  const $banner = $(".c-linebanner");
  const $closeBtn = $(".c-linebanner-closeimg");
  const $footer = $("footer");

  let isClosedManually = false;

  // ① 閉じるボタンを押したら非表示（以後は戻っても表示しない）
  $closeBtn.on("click", function () {
    $banner.fadeOut(400);
    isClosedManually = true;
  });

  // ② スクロールでフッターに入ったらフェードアウト、離れたら再表示
  $(window).on("scroll", function () {
    if (isClosedManually) return; // 手動で閉じた後は何もしない

    const footerTop = $footer.offset().top;
    const scrollBottom = $(window).scrollTop() + $(window).height();

    if (scrollBottom >= footerTop) {
      // フッターが見えてきたらフェードアウト
      if ($banner.is(":visible")) {
        $banner.fadeOut(400);
      }
    } else {
      // フッターから離れたらフェードイン
      if (!$banner.is(":visible")) {
        $banner.fadeIn(400);
      }
    }
  });

  $(".js-menu-btn").on("click", function () {
    $(".c-side-menu__bars-icon").toggleClass("--active");
    $(".c-hamburger").fadeToggle(300);
    $(".c-hamburger").toggleClass("--active");
    $(".l-header").toggleClass("--active");
  });

  $(".c-accordion__header").click(function () {
    $(".c-accordion__header").not(this).next().slideUp();
    $(".c-accordion__header").not(this).removeClass("active");
    $(this).next().slideToggle();
    $(this).toggleClass("active");
  });

  function footerMenuToggle() {
    // イベントを一度解除（リサイズ対応用）
    $(".c-footer__ttl").off("click");

    if (window.matchMedia("(max-width: 768px)").matches) {
      $(".c-footer__ttl").on("click", function () {
        const $this = $(this);
        const $targetUl = $this.next(".c-footer-nav");

        // 他を閉じる（アコーディオン風）
        $(".c-footer__ttl").not($this).removeClass("active");
        $(".c-footer-nav").not($targetUl).removeClass("active").slideUp(300);

        // 選択項目を開閉
        $this.toggleClass("active");
        $targetUl.toggleClass("active").slideToggle(300);
      });
    } else {
      // PCサイズでは全て表示＆クラス削除
      $(".c-footer__ttl").removeClass("active");
      $(".c-footer-nav").removeClass("active").show();
    }
  }

  // 初回読み込み時
  footerMenuToggle();

  // リサイズ時にも再判定
  $(window).on("resize", function () {
    footerMenuToggle();
  });
});
