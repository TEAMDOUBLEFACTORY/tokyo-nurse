jQuery(function ($) {
  const featureData = [
    {
      titleHtml: '<span class="p-top-feature__item-num">01</span><span class="u-color-main">国家試験合格</span>に向けた<br><span class="u-color-main">手厚いサポート</span>体制',
      descHtml: "科学的根拠のある看護行為を選ぶ力が試されます。本校では「なぜこの知識や技術が看護に必要なのか」を考える学習で、使える知識と技術を身につけて合格に導きます。",
      //img: "feature-img01.jpg",
      more: "schoolguide/advantage/",
    },
    {
      titleHtml: '<span class="p-top-feature__item-num">02</span>ベテラン教員による丁寧な<br><span class="u-color-main">就職サポート</span>',
      descHtml: "医療機関への就職について詳しいキャリア支援担当が的確にアドバイス。学生の個性に合わせたフォローで希望の就職を叶えます。",
      //img: "feature-img01.jpg",
      more: "schoolguide/advantage/",
    },
    {
      titleHtml: '<span class="p-top-feature__item-num">03</span>新しい時代の看護師を育成するための<br><span class="u-color-main">3つの連携×ICT教育</span>',
      descHtml: "医療機関への就職について詳しいキャリア支援担当が的確にアドバイス。学生の個性に合わせたフォローで希望の就職を叶えます。",
      //img: "feature-img03.jpg",
      more: "schoolguide/advantage/",
    },
    {
      titleHtml: '<span class="p-top-feature__item-num">04</span><span class="u-color-main">充実の設備</span>で<br><span class="u-color-main">基礎～応用</span>まで',
      descHtml: "医療機関への就職について詳しいキャリア支援担当が的確にアドバイス。学生の個性に合わせたフォローで希望の就職を叶えます。",
      //img: "feature-img04.jpg",
      more: "schoolguide/advantage/",
    },
    {
      titleHtml: '<span class="p-top-feature__item-num">05</span><span class="u-color-main">学費支援</span>と<br><span class="u-color-main">就職サポート</span>',
      descHtml: "医療機関への就職について詳しいキャリア支援担当が的確にアドバイス。学生の個性に合わせたフォローで希望の就職を叶えます。",
      //img: "feature-img04.jpg",
      more: "schoolguide/advantage/",
    },
  ];

  // ② DOM取得
  const $wrap = $(".p-top-feature__inner");
  const $head = $wrap.find(".p-top-feature__item-head");
  const $desc = $wrap.find(".p-top-feature__item-description");
  //const $img = $wrap.find(".p-top-feature__item-img");
  const $btn = $wrap.find(".p-top-feature__btn a.c-btn");
  const $prev = $wrap.find(".p-top-feature__arrows-prev");
  const $next = $wrap.find(".p-top-feature__arrows-next");
  const $curNum = $wrap.find(".p-top-feature__pagenation-current");
  const $allNum = $wrap.find(".p-top-feature__pagenation-all");

  // ③ 画像パスのベース（テーマURI）を既存imgから自動取得
  //    /assets/images/home/ までを残す
  //const imgBase = ($img.attr("src") || "").replace(/\/assets\/images\/home\/.*$/, "/assets/images/home/");

  // ④ ユーティリティ
  const pad2 = (n) => String(n).padStart(2, "0");

  let index = 0; // 現在のインデックス（0始まり）

  function render(i) {
    const d = featureData[i];
    // 見出し・本文・画像・リンクを差し替え
    $head.html(d.titleHtml.replace(/<span class="p-top-feature__item-num">(\d+)<\/span>/, `<span class="p-top-feature__item-num">${pad2(i + 1)}</span>`));
    $desc.html(d.descHtml);
    //$img.attr("src", imgBase + d.img).attr("alt", $(d.titleHtml).text().trim());
    if (d.more) $btn.attr("href", d.more);
    // ページネーション更新
    $curNum.text(pad2(i + 1));
  }

  // ⑤ 初期化
  $allNum.text(pad2(featureData.length));
  render(index);

  // ⑥ ハンドラ（前/次）
  $next.on("click", function () {
    index = (index + 1) % featureData.length;
    render(index);
  });
  $prev.on("click", function () {
    index = (index - 1 + featureData.length) % featureData.length;
    render(index);
  });

  // ⑦ キーボード操作（任意）
  $(document).on("keydown", function (e) {
    if (e.key === "ArrowRight") {
      $next.click();
    }
    if (e.key === "ArrowLeft") {
      $prev.click();
    }
  });

  // ⑧ タッチスワイプ（簡易実装・任意）
  let touchX = null;
  $wrap.on("touchstart", (e) => {
    touchX = e.originalEvent.touches[0].clientX;
  });
  $wrap.on("touchend", (e) => {
    if (touchX == null) return;
    const endX = e.originalEvent.changedTouches[0].clientX;
    if (endX - touchX > 40) {
      $prev.click();
    }
    if (touchX - endX > 40) {
      $next.click();
    }
    touchX = null;
  });
});
