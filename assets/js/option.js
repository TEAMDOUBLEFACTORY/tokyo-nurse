// Swiperの初期化
$(function () {
  const swiper = new Swiper(".swiper", {
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
  // 左カラム - 上方向にスライド
  const swiperLeft = new Swiper(".swiper-left", {
    direction: "vertical",
    slidesPerView: "auto",
    spaceBetween: 20,
    loop: true,
    loopedSlides: 6,
    speed: 3000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    allowTouchMove: false,
  });

  // 右カラム - 下方向にスライド（reverseDirection: true）
  const swiperRight = new Swiper(".swiper-right", {
    direction: "vertical",
    slidesPerView: "auto",
    spaceBetween: 20,
    loop: true,
    loopedSlides: 6,
    speed: 3000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      reverseDirection: true,
    },
    allowTouchMove: false,
  });
});
