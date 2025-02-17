// cursor
// custom cursor animations
// Select cursor elements

const cursor = document.querySelector(".custom-cursor");
const clickEffect = document.querySelector(".click-effect");
// console.log(clickEffect);
// console.log(cursor);

if (cursor && clickEffect) {
  document.addEventListener("mousemove", (e) => {
    cursor.style.left = `${e.pageX}px`;
    cursor.style.top = `${e.pageY}px`;
    cursor.style.transform = "translate(-60%, -60%)"; // Ensure centering

    clickEffect.style.left = `${e.pageX}px`;
    clickEffect.style.top = `${e.pageY}px`;
  });

  document.addEventListener("click", () => {
    clickEffect.style.animation = "clickAnimation 0.4s ease-out";

    // Reapply centering during click
    cursor.style.transform = "translate(-60%, -60%)";

    setTimeout(() => {
      clickEffect.style.animation = "none";
    }, 400);
  });

  clickEffect.addEventListener("animationend", () => {
    clickEffect.style.animation = "none"; // Reset click effect
  });
} else {
  console.error("Cursor or click effect element not found in the DOM.");
}

// counter
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter-number");
  const speed = 200;

  const animateCounters = () => {
    counters.forEach((counter) => {
      const updateCount = () => {
        const target = +counter.getAttribute("data-count");
        const count = +counter.innerText;

        const increment = target / speed;

        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target;
        }
      };

      updateCount();
    });
  };

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.disconnect();
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => observer.observe(counter));
});

// navbar scrolling
$(document).ready(() => {
  const topbar = $(".topbar");
  const navbar = $(".navbar");
  const spacer = $(".spacer");
  let lastScrollTop = 0;

  $(window).on("scroll", () => {
    let scrollTop = $(this).scrollTop();
    let topbarHeight = topbar.outerHeight();

    if (scrollTop > 50) {
      topbar.css("transform", "translateY(-100%)"); // Hide topbar smoothly
      navbar.addClass("fixed-nav");
      spacer.show();
    } else {
      topbar.css("transform", "translateY(0)"); // Show topbar smoothly
      navbar.removeClass("fixed-nav");
      spacer.hide();
    }

    lastScrollTop = scrollTop;
  });
});
// owl carousel
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});

// // fireworks blasting
// var myIndex = 0;
// const container = document.querySelector(".fireworks-example");
// console.log(container);
// console.log(Fireworks);
// const fireworks = new Fireworks(container, {
//   rocketsPoint: 50,
//   hue: { min: 0, max: 360 },
//   delay: { min: 15, max: 30 },
//   speed: 2,
//   acceleration: 1.05,
//   friction: 0.95,
//   gravity: 1.5,
//   particles: 50,
//   trace: 3,
//   explosion: 5,
//   autoresize: true,
//   brightness: {
//     min: 50,
//     max: 80,
//     decay: { min: 0.015, max: 0.03 },
//   },
//   boundaries: {
//     x: 50,
//     y: 50,
//     width: container.clientWidth,
//     height: container.clientHeight,
//   },
//   sound: {
//     enable: true,
//     files: ["explosion0.mp3", "explosion1.html", "explosion2.html"],
//     volume: { min: 1, max: 2 },
//   },
// });
// fireworks.start();
document.addEventListener("DOMContentLoaded", function () {
  let goTopBtn = document.getElementById("goTopBtn");

  window.onscroll = function () {
    if (window.scrollY > 300) {
      goTopBtn.classList.add("show");
    } else {
      goTopBtn.classList.remove("show");
    }
  };

  goTopBtn.onclick = function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  };
});
