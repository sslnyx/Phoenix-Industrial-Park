require("./bootstrap");
require("./map");
require("./floorplans");
// require("./swiper/src/swiper");

// console.log('run')
// console.log(js_obj_data);

window.onload = function() {
  if (window.location.pathname == "/") {
    const vhfn = () => {
      // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
      let vh = window.innerHeight * 0.01;
      // Then we set the value in the --vh custom property to the root of the document
      document.documentElement.style.setProperty("--vh", `${vh}px`);
    };

    vhfn();

    // We listen to the resize event
    window.addEventListener("resize", () => {
      vhfn();
    });

    let arr = [1, 2, 3];
    var mainSwiper = new Swiper("#swiper-container1", {
      direction: "vertical",
      resistanceRatio: 0,
      slidesPerView: 1,
      mousewheel: true,
      speed: 800,
      // pagination: {
      //   el: ".swiper-pagination",
      //   clickable: true
      // },

      navigation: {
        nextEl: ".btn-hover-down",
        prevEl: ".btn-hover-up"
      },
      on: {
        slideChange: function() {
          if (this.activeIndex == 0) {
            document.querySelector(".arrow-top").style.cssText =
              "opacity: 0; pointer-events: none;";
          } else {
            document.querySelector(".arrow-top").style.cssText =
              "opacity: 1; pointer-events: auto;";
          }
        }
      }
    });

    document.querySelector(".arrow-top").addEventListener("click", ev => {
      mainSwiper.slideTo(0, 1000, false);
    });

    document.querySelector(".arrow-down-m").addEventListener("click", ev => {
      mainSwiper.slideNext();
    });

    Object.keys(js_obj_data.slides).forEach(key => {
      // console.log(js_obj_data[key].name);
      new Swiper(`#swiper-register`, {
        resistanceRatio: 0,
        // forceToAxis: true,
        // mousewheel: true,
        direction: "vertical",
        slidesPerView: "auto",
        freeMode: true,
        scrollbar: {
          el: ".swiper-scrollbar"
        },
        mousewheel: {
          sensitivity: 0.1
        }
      });
    });

    // mainSwiper.slideTo('5');

    const introBG = document.querySelector(".intro-bg");
    const nav = document.querySelector("nav").clientHeight;
    let introFooter = "";

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

    // $(".arrow-down").on("click", () => {
    //   mainSwiper.slideNext();
    // });

    document.querySelector(".hamburger").addEventListener("click", ev => {
      $(".mainMenu").fadeIn();

      anime({
        targets: ".mainMenu li",
        translateY: [100, 0],
        delay: anime.stagger(50), // increase delay by 100ms for each elements.
        easing: "easeOutQuint"
      });
    });

    const navLi = document.querySelectorAll("nav li");
    const mainLi = document.querySelectorAll(".mainMenu li");

    navLi.forEach((el, key) => {
      // console.log(key);
      el.addEventListener("click", () => {
        mainSwiper.slideTo(key, 800, false); //切换到第一个slide，速度为1秒
      });
    });

    document.querySelector(".close").addEventListener("click", ev => {
      $(".mainMenu").fadeOut();
    });

    mainLi.forEach((el, key) => {
      el.addEventListener("click", () => {
        console.log("run");
        $(".mainMenu").fadeOut();
        mainSwiper.slideTo(key, 800, false); //切换到第一个slide，速度为1秒
      });
    });

    let isIn = false;

    // document.querySelectorAll(".btn-hover").forEach(el => {
    //   el.addEventListener("mouseover", ev => {
    //     isIn = true;
    //     // console.log(el.classList[1]);
    //   });

    //   el.addEventListener("mousemove", ev => {
    //     if (isIn)
    //       // document.querySelector(
    //       //   `.${el.attributes[1].value}`
    //       // ).style.cssText = `transform:translate(${ev.clientX -
    //       //   25}px, ${ev.clientY - 25}px);top:0; bottom: 0; right:inherit`;

    //       document.querySelector(
    //         `.${el.attributes[1].value}`
    //       ).style.cssText += `transform:scale(1.5); top:${ev.clientY -
    //         25}px; left: ${ev.clientX - 25}px; right: inherit;`;
    //   });

    //   el.addEventListener("mouseout", ev => {
    //     if (el.classList[1] == "btn-hover-up") {
    //       document.querySelector(
    //         `.${el.attributes[1].value}`
    //       ).style.cssText += `transform:scale(1); bottom: calc(50% + 3rem); top:inherit; left: inherit; right: 3rem;`;
    //     } else {
    //       document.querySelector(
    //         `.${el.attributes[1].value}`
    //       ).style.cssText += `transform:scale(1); top: calc(50% + 3rem); bottom:inherit; left: inherit; right: 3rem;`;
    //     }
    //   });
    // });

    document.querySelectorAll(".reqf").forEach(el => {
      if (el.value) {
        el.nextSibling.nextSibling.style.opacity = 0;
      } else {
        el.nextSibling.nextSibling.style.opacity = 1;
      }
      el.addEventListener("input", ev => {
        if (el.value) {
          el.nextSibling.nextSibling.style.opacity = 0;
        } else {
          el.nextSibling.nextSibling.style.opacity = 1;
        }
      });
    });

    let formdata = {};

    const submit = ev => {
      // console.log("submited");
      document.querySelector('button[type="submit"]').style.display = "none";
      document.querySelector(".load1").style.display = "block";
      ev.preventDefault();

      document.querySelectorAll(".form-group input").forEach(el => {
        console.log(el.value);
        console.log(el.name);
        formdata[el.name] = el.value;
      });

      document.querySelectorAll(".form-group select").forEach(el => {
        console.log(el.value);
        if (el.value == "") {
          el.value = null;
        }
        formdata[el.name] = el.value;
      });

      document.querySelectorAll(".form-group textarea").forEach(el => {
        console.log(el.value);
        formdata[el.name] = el.value;
      });

      formdata["checkbox"] = document.querySelector(
        ".form-check input"
      ).checked;
      console.log(formdata);

      let span = document.createElement("span");

      axios
        .post("/post", formdata)
        .then(response => {
          if (document.querySelector('[id="error"]'))
            document.querySelector('[id="error"]').remove();
          document.querySelector('button[type="submit"]').style.display =
            "block";
          document.querySelector(".load1").style.display = "none";

          // console.log(response.data);
          //   alert("Message sent!");
          // this.$router.push({ path: "thank-you" });
          window.location = "/thank-you";
        })
        .catch(error => {
          if (error.response.status === 422) {
            let errors = error.response.data.errors || {};
            console.log(errors.checkbox[0]);
            span.innerText = "This field is required.";
            span.setAttribute("id", "error");
            if (document.querySelector('[id="error"]'))
              document.querySelector('[id="error"]').remove();
            document.querySelector(".form-check-wrapper").prepend(span);

            document.querySelector('button[type="submit"]').style.display =
              "block";

            document.querySelector(".load1").style.display = "none";
          }
        });
    };

    document.querySelector("form").addEventListener("submit", submit);

    // document.querySelectorAll(".swiper-nav-btn").forEach(el => {
    //   el.addEventListener("mouseover", ev => {
    //     console.log(ev);
    //     // console.log(el.childNodes[1])
    //     // document.querySelector(`.${el.attributes[1].value}`).style.cssText = `transform:translate(${ev.clientX-25}px, ${ev.clientY-25}px);top:0; bottom: 0; right:inherit`;
    //   });
    //   el.addEventListener("mouseout", ev => {
    //     // document.querySelector(`.${el.attributes[1].value}`).style.cssText = null;
    //   });
    // });
  }
};
