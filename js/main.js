"use strict"
//  let documentActions = (e) => {
//       const targetElement = e.target
//       if (targetElement.closest('.icon-menu')) {
//         document.documentElement.classList.toggle('open-menu')
//       }
//     }
//     document.addEventListener('click', documentActions)


    // const options = {
    //   root: null,
    //   rootMargin: "0px 0px 0px 0px",
    //   // Відсоток від розміру об'єкту.
    //   // При появі якого спрацьовує подія
    //   // Де 0 це будь яка поява
    //   // 1 це повна поява об'кта в в'юпорті
    //   threshold: 0.2,
    // }
    // const callback = (entries, observer) => {
    //   entries.forEach(entry => {
    //     const currentElement = entry.target
    //     if (entry.isIntersecting) {
    //       currentElement.classList.add('--animate')
    //       //console.log('я тебе бачу')
    //     } else {
    //       currentElement.classList.remove('--animate')
    //       //console.log('я тебе не бачу')
    //     }
    //   })
    // }
    // const observer = new IntersectionObserver(callback, options)

    // const animElements = document.querySelectorAll('[class*="--anim"]')
    // animElements.forEach(animElement => {
    //   observer.observe(animElement)
    // }) 

    "use strict";

document.addEventListener("DOMContentLoaded", () => {
  // Бургер меню
  const burger = document.querySelector(".icon-menu");
  const html = document.documentElement;
  const menuLinks = document.querySelectorAll(".menu__link");

  if (burger) {
    burger.addEventListener("click", () => {
      html.classList.toggle("open-menu");
    });
  }

  menuLinks.forEach(link => {
    link.addEventListener("click", () => {
      html.classList.remove("open-menu");
    });
  });

  // IntersectionObserver для анімацій
  const options = { root: null, rootMargin: "0px", threshold: 0.2 };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) entry.target.classList.add("--animate");
      else entry.target.classList.remove("--animate");
    });
  }, options);

  const animElements = document.querySelectorAll('[class*="--anim"]');
  animElements.forEach(el => observer.observe(el));
});
