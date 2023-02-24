
$(function () {
  function setWrapperMinHeight() {
    $(".wrapper").css(
      "minHeight",
      window.innerHeight - $(".footer").height() - $(".footer").height()
    );
  }
  setWrapperMinHeight();
  window.onresize = function () {
    setWrapperMinHeight();
  };
});
// -----------------------------------------------------------------SCROLL TOP -------------------------------------------------------------------------------------
// window.addEventListener("scroll", scrollFunction);
// function scrollFunction() {
//     window.onscroll = function () { scrollFunction() };

//     const toTop = document.querySelector(".scroll-top");

//     toTop.addEventListener('click', () => {
//         document.body.scrollTop = 0;
//         document.documentElement.scrollTop = 0;
//     })
// }

// // -----------------------------------------------------------------SCROLL-ANIMATE-------------------------------------------------------------------------------------
const debounce = function (func, wait, immediate) {
  let timeout;
  return function (...args) {
    const context = this;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };

    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

const target = document.querySelectorAll("[data-anime]");
const animationClass = "animate";

function animeScroll() {
  const windowTop = window.pageYOffset + (window.innerHeight * 3) / 4;
  target.forEach(function (element) {
    if (windowTop > element.offsetTop) {
      element.classList.add(animationClass);
    } else {
      element.classList.remove(animationClass);
    }
  });
}

animeScroll();

if (target.length) {
  window.addEventListener(
    "scroll",
    debounce(function () {
      animeScroll();
    }, 20)
  );
}

// -----------------------------------------------------------------alter icon-------------------------------------------------------------------------------------

document
  .querySelector(".alter-btn")
  .addEventListener("click", function (event) {
    let searchIcon = document.querySelector(".alter-btn").children[0];
    let closeIcon = document.querySelector(".alter-btn").children[1];

    if (searchIcon.classList.contains("d-none")) {
      closeIcon.classList.add("d-none");
      searchIcon.classList.remove("d-none");
      return;
    }

    searchIcon.classList.add("d-none");
    closeIcon.classList.remove("d-none");
  });


// -----------------------------------------------------------------open menu-------------------------------------------------------------------------------------

const btnMenu = document.querySelector("#teste");
const menu = document.querySelector(".mobile-menu");
const overlayBarMobile = document.querySelector('.overlay')
function handleButtonClick(event) {
  event.preventDefault();
  menu.classList.toggle("hide");
  overlayBarMobile.classList.toggle("active");
}

btnMenu.addEventListener("click", handleButtonClick);

//--Parallax--------------------------------------------------------------------------------------//

function parallax() {
  document.querySelectorAll(".parallax").forEach((e) => {
    let yPos = -(
      (window.pageYOffset - e.offsetTop) /
      e.getAttribute("data-speed")
    );
    let bgpos = "50% " + yPos + "px";
    e.style.backgroundPosition = bgpos;
  });
}

if (document.querySelectorAll(".parallax").length) {
  window.addEventListener("load", parallax);
  window.addEventListener("scroll", parallax);
}

// -----------------------------------------------------------------slick-slider-center-------------------------------------------------------------------------------------
$(document).ready(function () {
  $(".card-main").slick({
    dots: true,
    infinite: false,
    speed: 800,
    slidesToShow: 2,
    infinite:true,
    autoplay: true,
    autoplaySpeed: 2500,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});