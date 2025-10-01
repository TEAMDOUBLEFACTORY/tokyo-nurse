document.addEventListener("DOMContentLoaded", () => {
  if (window.Swiper) {
    new Swiper(".js-infinity", {
      loop: true,
      slidesPerView: 3,
      speed: 6000,
      allowTouchMove: false,
      autoplay: {
        delay: 0,
      },
    });
  } else {
    console.error("Swiper is not loaded");
  }
});
