const swiperDays = new Swiper(".swiper--days", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  grabCursor: true,
  breakpoints: {
    320: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});

swiperDays.init();

const swiperPacks = new Swiper(".swiper--packs", {
  slidesPerView: 1,
  spaceBetween: 30,
  grabCursor: true,
  rewind: true,
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

swiperPacks.init();

/*Page Escuela*/
const title_escuela = document.querySelector(".section-escuela__title");

window.addEventListener("resize", () => {
  if (window.innerWidth < 1024) {
    title_escuela.innerHTML = "La Escuela";
  } else {
    title_escuela.innerHTML = "La Escuela de Maquillaje Profesional";
  }
});

const swiperEscuela = new Swiper(".swiper--escuela", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

swiperEscuela.init();
