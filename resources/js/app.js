require("./bootstrap");
require("./map");


// console.log('run')
// console.log(js_obj_data);

window.onload = function() {
  var mainSwiper = new Swiper("#swiper-container1", {
    direction: "vertical",
    resistanceRatio: 0,
    mousewheel: true,
    speed: 800,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });

  Object.keys(js_obj_data.slides).forEach(key => {
    // console.log(js_obj_data[key].name);
    new Swiper(`#swiper-${key}`, {
      resistanceRatio: 0,

      direction: "vertical",
      slidesPerView: "auto",
      freeMode: true,
      scrollbar: {
        el: ".swiper-scrollbar"
      },
      mousewheel: true
    });
  });


  mainSwiper.slideTo('4');

  const introBG = document.querySelector(".intro-bg");
  const nav = document.querySelector("nav").clientHeight;
  let introFooter = '';

  const bgFn = () => {
    introFooter = document.querySelector(".intro-footer").clientHeight;
    introBG.style.height = `calc(100% - ${introFooter}px - ${nav}px)`;
  };

  bgFn();

  window.addEventListener("resize", ev => {
    if (window.innerHeight > 600) {
      bgFn();
    }
  });

  $(".arrow-down").on("click", () => {
    mainSwiper.slideNext();
  });

  const navLi = document.querySelectorAll("nav li");

  Object.values(navLi).forEach((el, key) => {
    // console.log(key);
    el.addEventListener("click", () => {
      mainSwiper.slideTo(key, 800, false); //切换到第一个slide，速度为1秒
    });
  });
};
