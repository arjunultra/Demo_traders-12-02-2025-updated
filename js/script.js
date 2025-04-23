// counter
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter-number");

  const animateCounters = (counter) => {
    const target = +counter.getAttribute("data-count").trim(); // Trim spaces to avoid errors
    let count = 0;

    // Adjust speed dynamically based on target value
    let speed = 100;

    const updateCount = () => {
      const increment = target / speed;

      if (count < target) {
        count = Math.ceil(count + increment);
        counter.innerText = count;
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  };

  // Observer to trigger animation when counters come into view
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounters(entry.target); // Animate each counter individually
          observer.unobserve(entry.target); // Stop observing after animation starts
        }
      });
    },
    { threshold: 0.3 } // Ensures counter is 30% visible before animating
  );

  counters.forEach((counter) => observer.observe(counter));
});
// slow counter

document.addEventListener("DOMContentLoaded", () => {
  const slowCounters = document.querySelectorAll(".slow-counter");

  // Function for slow counting (For counter with value 10)
  const animateSlowCounter = (counter) => {
    const target = +counter.getAttribute("data-count").trim();
    let count = 0;
    const speed = 300; // Slow speed

    const updateCount = () => {
      if (count < target) {
        count++;
        counter.innerText = count;
        setTimeout(updateCount, 300); // Slower update frequency
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  };

  // Intersection Observer for slow counters
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateSlowCounter(entry.target);
          observer.unobserve(entry.target); // Stop observing after animation starts
        }
      });
    },
    { threshold: 0.3 }
  );

  // Attach observer only to slow counters
  slowCounters.forEach((counter) => observer.observe(counter));
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
// swiper js

document.addEventListener("DOMContentLoaded", function () {
  let swiperContainer = document.querySelector(".swiper-container");

  if (swiperContainer && typeof Swiper !== "undefined") {
    let swiper = new Swiper(".swiper-container", {
      loop: true,
      slidesPerView: 1,
      autoplay: {
        delay: 2500, // Faster transitions for dynamic feel
        disableOnInteraction: false,
      },
      on: {
        slideChangeTransitionEnd: function () {
          applyFireworkAnimations();
        },
      },
    });

    console.log("✅ Swiper initialized with advanced animations.");
  } else {
    console.warn("⚠️ Swiper is not defined or container is missing.");
  }
});

// Function to apply firework-style animations
function applyFireworkAnimations() {
  let animations = ["slide-blast"];
  let activeSlide = document.querySelector(".swiper-slide-active img");

  if (activeSlide) {
    let randomAnim = animations[Math.floor(Math.random() * animations.length)];
    activeSlide.classList.remove(...animations); // Remove old animations
    void activeSlide.offsetWidth; // Force reflow for restart animation
    activeSlide.classList.add(randomAnim);
  }
}


document.addEventListener("DOMContentLoaded", function () {
  if (typeof fireworks === "undefined") {
    console.error(
      "❌ Fireworks library is not loaded. Check your script path."
    );
    return;
  }

  // Start fireworks animation with default settings
  fireworks({
    rate: { min: 0.5, max: 1 }, // **Lower rate → fewer shots fired**
  });

  console.log("🔥 Fireworks started successfully with default settings!");
});
// brands card swiper
var brandSwiper = new Swiper(".brandSwiper", {
  effect: "cards",
  grabCursor: true,
  loop: true,
  autoplay: {
    delay: 2000, // Adjust speed
    disableOnInteraction: false,
  },
  cardsEffect: {
    perSlideRotate: 2,
    perSlideOffset: 8,
  },
  on: {
    slideChangeTransitionStart: function () {
      // Reset all slides' background color
      document.querySelectorAll(".swiper-slide").forEach((slide) => {
        slide.style.backgroundColor = ""; // Reset to default
      });

      // Get the previous slide and change its background color
      let prevIndex = this.previousIndex;
      let prevSlide = this.slides[prevIndex];
      if (prevSlide) {
        prevSlide.style.backgroundColor = getRandomColor(); // Apply a new color
      }
    },
  },
});

// Function to generate random colors
function getRandomColor() {
  let colors = [
    "rgb(206, 17, 17)",
    "rgb(0, 140, 255)",
    "rgb(10, 184, 111)",
    "rgb(211, 122, 7)",
    "rgb(118, 163, 12)",
    "rgb(180, 10, 47)",
    "rgb(35, 99, 19)",
    "rgb(0, 68, 255)",
    "rgb(218, 12, 218)",
    "rgb(54, 94, 77)",
  ];
  return colors[Math.floor(Math.random() * colors.length)];
}

function assignRandomTitlesToImages(keywords, excludeSelector = "") {
  document.addEventListener('DOMContentLoaded', function () {
    const allImages = Array.from(document.querySelectorAll('img'));
    const excludedImages = excludeSelector
      ? Array.from(document.querySelectorAll(excludeSelector))
      : [];

    const eligibleImages = allImages.filter(img => !excludedImages.includes(img));

    if (keywords.length === 0) {
      console.warn('No keywords provided!');
      return;
    }

    // Assign titles
    eligibleImages.forEach(img => {
      const keyword = keywords[Math.floor(Math.random() * keywords.length)];
      img.setAttribute('data-title', keyword);
    });

    // Tooltip element
    const tooltip = document.createElement('div');
    tooltip.style.position = 'absolute';
    tooltip.style.background = '#333';
    tooltip.style.color = '#fff';
    tooltip.style.padding = '5px 10px';
    tooltip.style.borderRadius = '5px';
    tooltip.style.fontSize = '12px';
    tooltip.style.pointerEvents = 'none';
    tooltip.style.zIndex = '99999';
    tooltip.style.opacity = '0';
    tooltip.style.transition = 'opacity 0.2s ease';
    document.body.appendChild(tooltip);

    function showTooltip(img, e) {
      const title = img.getAttribute('data-title');
      if (!title) return;

      tooltip.textContent = title;
      tooltip.style.opacity = '1';

      const padding = 15;
      const tooltipWidth = tooltip.offsetWidth;
      const tooltipHeight = tooltip.offsetHeight;

      let left = e.pageX + padding;
      let top = e.pageY + padding;

      if (left + tooltipWidth > window.innerWidth) {
        left = e.pageX - tooltipWidth - padding;
      }
      if (top + tooltipHeight > window.innerHeight) {
        top = e.pageY - tooltipHeight - padding;
      }

      tooltip.style.left = `${left}px`;
      tooltip.style.top = `${top}px`;
    }

    // Global event listeners
    document.addEventListener('mousemove', (e) => {
      const img = e.target.closest('img') || e.target.closest('.product-img')?.querySelector('img');
      if (!img || !img.hasAttribute('data-title')) {
        tooltip.style.opacity = '0';
        return;
      }
      showTooltip(img, e);
    });

    document.addEventListener('mouseout', (e) => {
      if (e.target.closest('img') || e.target.closest('.product-img')) {
        tooltip.style.opacity = '0';
      }
    });
  });
}





