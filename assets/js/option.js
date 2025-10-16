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
