$(function () {
  $(".js-menu-btn").on("click", function () {
    $(".c-side-menu__bars-icon").toggleClass("--active");
    if ($(".c-side-menu__popup").is(":visible")) {
      $(".c-side-popup").fadeOut(300);
    } else {
      $(".c-side-popup").fadeIn(300);
    }
  });
});
