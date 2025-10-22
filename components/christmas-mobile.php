<!-- Christmas Swiper - Mobile Only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
  .christmas-swiper-bg {
    background-color: #245d95;
    padding: 100px 0px 50px 0px;
    position: relative;
    overflow: hidden;
  }

  /* Animated snowflakes */
  .snowflake {
    position: absolute;
    top: -40px;
    color: #fff;
    opacity: 0.85;
    font-size: 1.3em;
    pointer-events: none;
    z-index: 10;
    user-select: none;
    animation-name: snowflakes-fall;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
  }

  @keyframes snowflakes-fall {
    0% {
      transform: translateY(0);
    }

    100% {
      transform: translateY(500px);
    }
  }

  /* Add some parallax Christmas decorations */
  .christmas-deco {
    position: absolute;
    z-index: 12;
    pointer-events: none;
    user-select: none;
    animation: swing 4s infinite alternate cubic-bezier(0.4, 0.0, 0.2, 1);
  }

  .deco-tree {
    left: 10px;
    top: 30px;
    width: 48px;
    height: 48px;
  }

  .deco-gift {
    right: 20px;
    bottom: 30px;
    width: 52px;
    height: 52px;
    animation-delay: 2s;
  }

  .deco-bell {
    right: 60px;
    top: 18px;
    width: 42px;
    height: 42px;
    animation-delay: 1.2s;
  }

  @keyframes swing {
    from {
      transform: rotate(-10deg);
    }

    to {
      transform: rotate(10deg);
    }
  }

  .christmas-swiper {
    width: 370px;
    height: 410px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    z-index: 20;
  }

  .christmas-swiper .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 18px;
    font-size: 22px;
    font-weight: bold;
    color: #fff;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    box-shadow: 0 4px 22px 0 rgba(120, 40, 3, .09), 0 1.5px 3.5px 0 rgba(245, 0, 35, 0.09);
    /* add a soft twinkle */
    animation: twinkle 2.5s infinite alternate;
    cursor: pointer;
  }

  @keyframes twinkle {
    from {
      filter: brightness(1);
    }

    to {
      filter: brightness(1.1) drop-shadow(0 0 8px #fff7);
    }
  }

  .christmas-swiper .swiper-slide:nth-child(1) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-1-by-roamers.avif');
  }

  .christmas-swiper .swiper-slide:nth-child(2) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-2-by-roamers.avif');
  }

  .christmas-swiper .swiper-slide:nth-child(3) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-3-by-roamers.avif');
  }

  .christmas-swiper .swiper-slide:nth-child(4) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-4-by-roamers.avif');
  }

  .christmas-swiper .swiper-slide:nth-child(5) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-5-by-roamers.avif');
  }

  .christmas-swiper .swiper-slide:nth-child(6) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-6-by-roamers.avif');
  }

  .christmas-swiper .swiper-slide:nth-child(7) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-7-by-roamers.avif');
  }

  .christmas-swiper .swiper-slide:nth-child(8) {
    background-image: url('assets/optimized-images/christmas&newyear/chirstmas&newyear-card-8-by-roamers.avif');
  }

  
  /* .christmas-swiper .swiper-slide:nth-child(9) {
    background-image: url('assets/img/event/cards/event-card-2.png');
  } */

  /* Responsive for smaller screens */
  @media (max-width: 400px) {
    .christmas-swiper {
      width: 98vw;
    }
  }
</style>

<div class="christmas-swiper-bg">
  <!-- Floating Christmas Decorations -->
  <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f384.png"
    alt="Christmas tree" class="christmas-deco deco-tree" loading="lazy" />
  <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f381.png"
    alt="Gift" class="christmas-deco deco-gift" loading="lazy" />
  <!-- <img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/72x72/1f514.png"
    alt="Bell" class="christmas-deco deco-bell" loading="lazy" /> -->
  <!-- Animated Snowflakes -->
  <span class="snowflake" style="left: 20px; font-size: 22px; animation-delay:0s; animation-duration:8s;">❄️</span>
  <span class="snowflake" style="left: 90px; font-size: 18px; animation-delay:1s; animation-duration:9.3s;">❅</span>
  <span class="snowflake" style="left: 150px; font-size: 28px; animation-delay:2.7s; animation-duration:10s;">❆</span>
  <span class="snowflake" style="left: 215px; font-size: 20px; animation-delay:1.3s; animation-duration:12.2s;">❄️</span>
  <span class="snowflake" style="left: 300px; font-size: 25px; animation-delay:.7s; animation-duration:8.8s;">❅</span>
  <span class="snowflake" style="left: 45px; font-size: 30px; animation-delay:2s; animation-duration:11.2s;">❄️</span>
  <span class="snowflake" style="left: 260px; font-size: 16px; animation-delay:3.5s; animation-duration:9.7s;">❆</span>

  <div class="swiper christmas-swiper" id="christmasSwiperContainer">
    <div class="swiper-wrapper">
      <div class="swiper-slide" data-url="pondicherry.php"></div>
      <div class="swiper-slide" data-url="kodaikanal.php"></div>
      <div class="swiper-slide" data-url="wayanad.php"></div>
      <div class="swiper-slide" data-url="srilanka.php"></div>
      <div class="swiper-slide" data-url="kerala.php"></div>
      <div class="swiper-slide" data-url="ooty.php"></div>
      <div class="swiper-slide" data-url="andaman.php"></div>
      <div class="swiper-slide" data-url="meghalaya.php"></div>
      <!-- <div class="swiper-slide" data-url="meghalaya.php"></div> -->
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  // Only init inside the unique ID container for this block
  document.addEventListener('DOMContentLoaded', function() {
    var christmasSwiperInstance = new Swiper("#christmasSwiperContainer", {
      effect: "cards",
      grabCursor: true,
    });

    // Attach click using slideChange event to always target active slide
    // Instead of adding/removing onclick handlers on slide change, simply set click handler on container.
    // On click, find the currently active slide and use its data-url.
    document.querySelector("#christmasSwiperContainer").addEventListener("click", function(e) {
      var active = document.querySelector("#christmasSwiperContainer .swiper-slide.swiper-slide-active");
      if (active) {
        var url = active.getAttribute("data-url");
        if (url && url !== "#") {
          window.location.href = url;
        }
      }
    });

    // Trigger handler set up for the initially active slide
    christmasSwiperInstance.emit('slideChangeTransitionEnd');

    // Optionally: make snowflakes twinkle
    document.querySelectorAll('.snowflake').forEach(function(sf, i) {
      sf.animate([{
          opacity: 0.85,
          textShadow: '0 0 7px #fff7'
        },
        {
          opacity: 0.95,
          textShadow: '0 0 22px #fff'
        },
        {
          opacity: 0.85,
          textShadow: '0 0 7px #fff7'
        }
      ], {
        duration: 2100 + i * 200,
        iterations: Infinity,
        direction: 'alternate'
      });
    });
  });
</script>