$(function () {
  $(document).ready(function () {
    $('a[href^="#"]').on("click", function (event) {
      var target = $(this.getAttribute("href"));
      if (target.length) {
        event.preventDefault();
        $("html, body").stop().animate(
          {
            scrollTop: target.offset().top,
          },
          1000
        );
      }
    });
  });
});

// Swiperの初期化
$(function () {
  const swiper = new Swiper("#campuslife .swiper", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

// タブ切り替え

document.addEventListener("DOMContentLoaded", () => {
  // タブボタンを全て取得
  const tabs = document.querySelectorAll(".c-tab-buttons button");

  // タブコンテンツを全て取得
  const contents = document.querySelectorAll(".c-tab-contents .content");

  // 各タブボタンにクリックイベントを設定
  tabs.forEach((tab, index) => {
    tab.addEventListener("click", () => {
      // 全てのタブからactiveクラスを削除
      tabs.forEach((tab) => tab.classList.remove("active"));

      // 全てのコンテンツからactiveクラスを削除
      contents.forEach((content) => content.classList.remove("active"));

      // クリックされたタブとそれに対応するコンテンツにactiveクラスを付与
      tab.classList.add("active");
      contents[index].classList.add("active");
    });
  });
});

$(function () {
  // 左カラム
  const swiperLeft = new Swiper(".swiper-left", {
    slidesPerView: "auto",
    spaceBetween: 20,
    loop: true,
    loopedSlides: 6,
    speed: 5000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    allowTouchMove: false,

    // デフォルトは縦方向
    direction: "vertical",

    // 768px以下（スマホ）では横方向に変更
    breakpoints: {
      0: {
        slidesPerView: 2,
        direction: "horizontal",
      },
      769: {
        direction: "vertical",
      },
    },
  });

  // 右カラム
  const swiperRight = new Swiper(".swiper-right", {
    slidesPerView: "auto",
    spaceBetween: 20,
    loop: true,
    loopedSlides: 6,
    speed: 5000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: true,
    },
    allowTouchMove: false,
    direction: "vertical",
    breakpoints: {
      0: {
        slidesPerView: 2,
        direction: "horizontal",
      },
      769: {
        direction: "vertical",
      },
    },
  });
});

!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value = window.outerWidth > 360 ? "width=device-width,initial-scale=1" : "width=360";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();
