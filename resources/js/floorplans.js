// Elements to inject
var mySVGsToInject = document.querySelectorAll("img.inject-me");

// Options
var injectorOptions = {
  evalScripts: "once",
  pngFallback: "assets/png",
  each: function(svg) {
    // Callback after each SVG is injected
    console.log("SVG injected: " + svg.getAttribute("id"));
  }
};

// Trigger the injection
SVGInjector(mySVGsToInject, injectorOptions, function(totalSVGsInjected) {
  // Callback after all SVGs are injected
  //   console.log("We injected " + totalSVGsInjected + " SVG(s)!");
  //   console.log(js_obj_data.plans);
  // for(let key in)

  const plans = js_obj_data.plans;

  Object.keys(plans).forEach((el, key) => {
    let svgtarget = document.querySelector(`#_x31_0${key + 1}`);
    let h3 = document.querySelector(`[id='${el}']`);

    const items = [svgtarget, h3];

    svgtarget.setAttribute("data-type", "floorplan");
    svgtarget.setAttribute("data-name", el);

    items.forEach(el2 => {
      el2.addEventListener("mouseover", ev => {
        items[0].classList.add("active");
        items[1].classList.add("btn-active");
      });

      el2.addEventListener("click", ev => {
        console.log(el);

        // const win = window.open(pdfs[key], "_blank");
        // win.focus();
      });

      el2.addEventListener("mouseout", ev => {
        items[0].classList.remove("active");
        items[1].classList.remove("btn-active");
      });
    });
  });

});
