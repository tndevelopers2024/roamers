<?php
require_once __DIR__ . '/includes/christmas-trips.php';
// Match the eight destinations featured in the homepage Christmas section.
$festiveBySlug = array_column($christmasTrips, null, 'slug');
$festiveBySlug['tawang'] = [
    'slug' => 'tawang', 'title' => 'Tawang', 'url' => 'tawang.php',
    'img' => 'assets/img/tawang/home-festive-card.avif', 'alt' => 'Tawang',
    'duration' => '7D / 6N', 'dates' => '', 'exLabel' => 'Ex: Guwahati',
    'price' => '₹19,990', 'newyear' => true,
    'types' => ['mountain', 'roadtrip'], 'moods' => ['mountains'],
    'ex' => ['guwahati'], 'budget' => '10to20', 'len' => 'long',
];
$festiveBySlug['manali'] = [
    'slug' => 'manali', 'title' => 'Manali', 'url' => 'manali.php',
    'img' => 'assets/img/manali-winter-festive-card.webp', 'alt' => 'Snowy Himalayan peaks and pine forest with a wooden cabin near Manali',
    'duration' => '', 'dates' => '', 'exLabel' => '',
    'price' => 'Enquire', 'newyear' => true,
    'types' => ['mountain'], 'moods' => ['mountains'],
    'ex' => [], 'budget' => '', 'len' => '',
];
$christmasTrips = array_map(static fn($slug) => $festiveBySlug[$slug],
    ['spiti', 'tawang', 'manali', 'kerala', 'ooty', 'meghalaya', 'chikkamagaluru', 'andaman']);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Roamers - Christmas and New Year Trips</title>
  <meta name="description"
    content="Christmas and New Year trips with Roamers — Spiti, Meghalaya, Kodaikanal, Ooty, Wayanad, Kerala, Pondicherry, Andaman and Sri Lanka. Group trips from Chennai and Bangalore, solo travellers welcome.">
  <meta name="keywords"
    content="christmas and new year trips, christmas new year trips from chennai, new year group trips, christmas group trips, christmas travel packages, new year travel packages, roamers">
  <meta name="author" content="Roamers">

  <!-- Open Graph -->
  <meta property="og:title" content="Roamers | Christmas & New Year Group Trips">
  <meta property="og:description"
    content="Celebrate Christmas & New Year with like-minded travelers. Book your festive getaway now!">
  <meta property="og:image" content="https://roamers.in/assets/img/Logo/Roamers%20Logo-01.png">
  <meta property="og:url" content="https://www.roamers.in/christmas-newyear">
  <link rel="canonical" href="https://www.roamers.in/christmas-newyear">

  <link rel="shortcut icon" href="assets/img/icon/fav-icon.png" type="image/x-icon">

  <!-- Font Awesome for Chevron Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Global CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
    <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="assets/css/color.css">

  <!-- Christmas & New Year seasonal layer -->
  <link rel="stylesheet" href="assets/css/christmas.css?v=<?php echo filemtime(__DIR__ . '/assets/css/christmas.css'); ?>">
  <link rel="stylesheet" href="assets/css/home-festive-cards.css?v=<?php echo filemtime(__DIR__ . '/assets/css/home-festive-cards.css'); ?>">

  <link rel="stylesheet" href="assets/css/festive-packages-page.css?v=<?php echo filemtime(__DIR__ . '/assets/css/festive-packages-page.css'); ?>">

  <style>
    /* Clears the fixed Roamers navbar above the hero (measured at 70px). */
    .cny-page { padding-top: 70px; }

    /* Floating WhatsApp button (carried over from the previous page) */
    .whatapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
      width: 56px;
      height: 56px;
      background: #25d366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }

    .whatapp:hover { transform: scale(1.1); }

    .whatapp img { width: 32px; height: 32px; }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Can I join solo?",
        "acceptedAnswer": { "@type": "Answer", "text": "Absolutely! Whether you're joining solo, with friends, or as a couple, these group trips are designed to accommodate all types of travelers." }
      },
      {
        "@type": "Question",
        "name": "How about safety for female travelers?",
        "acceptedAnswer": { "@type": "Answer", "text": "Yes, female solo travelers can confidently join our group trips. We prioritize their safety by ensuring a secure environment with trusted trip captains, verified hosts, and reliable transport vendors." }
      },
      {
        "@type": "Question",
        "name": "What is the age requirement to join?",
        "acceptedAnswer": { "@type": "Answer", "text": "The trips are for 18-39 year olds." }
      },
      {
        "@type": "Question",
        "name": "How do I confirm my booking?",
        "acceptedAnswer": { "@type": "Answer", "text": "Send the payment screenshot to info@roamers.in and you'll get the confirmation email within 24 hours." }
      },
      {
        "@type": "Question",
        "name": "How do I trust Roamers?",
        "acceptedAnswer": { "@type": "Answer", "text": "We've nailed over 500 awesome trips. Check out the reviews, speak to our travel consultants, and check the website for further details. Our offices are in Chennai and Delhi." }
      }
    ]
  }
  </script>

  <script type="application/ld+json">
  <?php
  $ldItems = [];
  foreach ($christmasTrips as $i => $t) {
      $ldItems[] = [
          '@type'    => 'ListItem',
          'position' => $i + 1,
          'name'     => $t['title'],
          'url'      => 'https://roamers.in/' . rawurlencode($t['url']),
      ];
  }
  echo json_encode([
      '@context'        => 'https://schema.org',
      '@type'           => 'ItemList',
      'name'            => 'Christmas and New Year Trips',
      'itemListElement' => $ldItems,
  ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
  ?>
  </script>
</head>

<body>

  <header>
    <?php include('includes/header.php'); ?>
  </header>

  <?php
  cny_icon_sprite();

  // Cheapest listed price, used in the hero strip. Derived from the data, never invented.
  $cheapest = null;
  foreach ($christmasTrips as $t) {
      if ($t['price'] === 'Enquire') { continue; }
      $v = (int) preg_replace('/\D/', '', $t['price']);
      if ($cheapest === null || $v < $cheapest[0]) { $cheapest = [$v, $t['price']]; }
  }
  ?>

  <main class="cny cny-page festive-packages" id="top">
    <section class="festive-hero" aria-labelledby="festive-title">
      <img class="festive-hero__image" src="assets/img/roamers-festive-premium.png" alt="Snowy mountains framed by festive pine branches and ornaments" fetchpriority="high">
      <div class="festive-hero__content">
        <p class="festive-kicker">ROAMERS · YEAR-END ESCAPES</p>
        <h1 id="festive-title">Christmas &amp; New Year Packages</h1>
        <p>Snowy adventures. Island celebrations. A beautiful way to end the year.</p>
        <div class="festive-hero__price">Starting from <strong><?php echo $cheapest[1]; ?></strong> / person</div>
        <a class="festive-primary" href="https://wa.me/918122121066?text=Hi%20Roamers%2C%20please%20call%20me%20about%20Christmas%20and%20New%20Year%20trips." target="_blank" rel="noopener">Request a callback <?php cny_i('arrow-right'); ?></a>
      </div>
    </section>

    <section class="festive-categories festive-wrap" aria-label="Package categories">
      <a class="festive-category festive-category--domestic" href="#domestic-packages">
        <div><span>FIND YOUR FESTIVE ESCAPE</span><h2>Domestic Packages</h2><p>Spiti · Tawang · Manali · Kerala · Ooty · Meghalaya · Chikmagalur · Andaman</p><strong>Explore India trips <?php cny_i('arrow-right'); ?></strong></div>
        <img src="assets/img/spiti-home-festive-card.avif" alt="Snowy Spiti monastery" loading="lazy">
      </a>
    </section>

    <section class="festive-catalog festive-wrap" id="explore" data-festive-explorer aria-labelledby="festive-all-title">
      <h2 id="festive-all-title" class="festive-section-title">All Packages</h2>
      <div class="festive-destination-tabs" role="group" aria-label="Filter by destination">
        <button type="button" data-destination="all" aria-pressed="true">All</button>
        <?php foreach ($christmasTrips as $trip): ?>
        <button type="button" data-destination="<?php echo htmlspecialchars($trip['slug']); ?>" aria-pressed="false"><?php echo htmlspecialchars(['chikkamagaluru' => 'Chikmagalur', 'spiti' => 'Spiti', 'meghalaya' => 'Meghalaya', 'kerala' => 'Kerala', 'ooty' => 'Ooty', 'andaman' => 'Andaman', 'kodaikanal' => 'Kodaikanal', 'wayanad' => 'Wayanad', 'pondicherry' => 'Pondicherry', 'srilanka' => 'Sri Lanka'][$trip['slug']] ?? $trip['title']); ?></button>
        <?php endforeach; ?>
      </div>
      <p class="festive-result-count" aria-live="polite" data-festive-count><?php echo count($christmasTrips); ?> packages to explore</p>
      <div class="home-festive-marquee festive-catalog-marquee" data-autoscroll="false" aria-label="Festive packages" tabindex="0">
      <div class="home-festive-marquee__track">
      <div class="home-festive-marquee__group">
        <?php foreach ($christmasTrips as $i => $trip) { cny_card($trip, ['photo' => true, 'eager' => $i < 4]); } ?>
      </div>
      </div>
      </div>
      <div class="festive-catalog-playback"><span>Drag or swipe to explore</span></div>
    </section>

    <section class="festive-gallery-section" aria-labelledby="festive-glimpse-title">
      <div class="festive-wrap">
        <h2 class="festive-section-title" id="festive-glimpse-title">A Glimpse of the Journey</h2>
        <div class="festive-gallery">
          <img src="assets/img/spiti-chandratal/Spiti-chandaratal.jpg" alt="Travellers exploring Spiti" loading="lazy">
          <img src="assets/img/kodaikanal/camp%20site.jpg" alt="Camping in the hills" loading="lazy">
          <img src="assets/img/megalaya/Ritymmen-Root-bridge.jpg" alt="Living root bridge in Meghalaya" loading="lazy">
          <img src="assets/img/pondicherry/Media/paradise-beach.jpg" alt="Pondicherry beach" loading="lazy">
          <img src="assets/img/Kerala/Kerala-backwater-village.jpg" alt="Kerala backwaters" loading="lazy">
        </div>
      </div>
    </section>

    <section class="festive-reviews festive-wrap" aria-labelledby="festive-reviews-title">
      <p class="festive-kicker">THE ROAMERS COMMUNITY</p>
      <h2 class="festive-section-title" id="festive-reviews-title">Stories from Our Travellers</h2>
      <div class="festive-review-grid" tabindex="0" role="region" aria-label="Traveller reviews — swipe to explore"><article class="festive-review"><span class="festive-review__quote" aria-hidden="true">“</span><p>Joined the group trip with my sister, it was the best experience we could ask for. Everything was great about the trip, explored even the spots which was not mentioned in itinerary, don’t really know how the days went so soon.No words, Thanks you all!</p><strong>Shreya</strong><span>Roamers traveller</span></article><article class="festive-review"><span class="festive-review__quote" aria-hidden="true">“</span><p>The VIBE was unreal, didn’t expect I’ll connect like this.. Best trip I have gone, explored places, local foods, cultures, and those kids Ohh my goodness!!!! 😍 Thank you roamers and trip captain. We’ll meet soon on our reunion :</p><strong>Vinayak</strong><span>Roamers traveller</span></article><article class="festive-review"><span class="festive-review__quote" aria-hidden="true">“</span><p>I joined solo and was imaginable experience, my first time going with the group trip, truly knocked my expectations. Very cool people, and awesome spots. Enjoyed a lot, Spl thanks to our trip captain veer. Gonna miss you’ll Fam…</p><strong>Naisha</strong><span>Roamers traveller</span></article></div>
    </section>

    <?php foreach (['domestic' => 'Domestic Packages'] as $category => $heading): ?>
    <section class="festive-package-shelf festive-wrap" id="<?php echo $category; ?>-packages" aria-label="<?php echo $heading; ?>">
      <div class="festive-shelf-heading"><h2 class="festive-section-title"><?php echo $heading; ?></h2><div class="festive-shelf-controls"><button type="button" data-shelf-prev aria-label="Previous <?php echo strtolower($heading); ?>">←</button><button type="button" data-shelf-next aria-label="Next <?php echo strtolower($heading); ?>">→</button></div></div>
      <div class="festive-shelf">
        <?php foreach ($christmasTrips as $trip) {
          $international = in_array('international', $trip['types'], true);
          if (($category === 'international') === $international) { cny_card($trip, ['photo' => true]); }
        } ?>
      </div>
    </section>
    <?php endforeach; ?>

    <section class="cny-section cny-section--cream" id="notes" aria-labelledby="cny-faq-title">
      <div class="cny-shell">
        <div class="cny-head cny-head--center cny-reveal">
          <div class="cny-head__text">
            <p class="cny-eyebrow"><?php cny_i('bell'); ?>Good to know</p>
            <h2 class="cny-h2" id="cny-faq-title">Questions, answered</h2>
          </div>
        </div>

        <div class="cny-faq__list">
          <div class="cny-faq__item is-open">
            <h3 style="margin:0;">
              <button class="cny-faq__q" type="button" aria-expanded="true" aria-controls="cny-faq-1">
                <?php cny_i('gift'); ?><span>Can I join solo?</span><span class="cny-faq__icon"
                  aria-hidden="true"></span>
              </button>
            </h3>
            <div class="cny-faq__a" id="cny-faq-1" data-open="true">
              <div>
                <p>Absolutely! Whether you're joining solo, with friends, or as a couple, these group trips are designed
                  to accommodate all types of travelers. Join us for budget-friendly adventures and check off more items
                  from your bucket list!</p>
              </div>
            </div>
          </div>

          <div class="cny-faq__item">
            <h3 style="margin:0;">
              <button class="cny-faq__q" type="button" aria-expanded="false" aria-controls="cny-faq-2">
                <?php cny_i('bell'); ?><span>How about safety for female travelers?</span><span class="cny-faq__icon"
                  aria-hidden="true"></span>
              </button>
            </h3>
            <div class="cny-faq__a" id="cny-faq-2" data-open="false">
              <div>
                <p>Yes, female solo travelers can confidently join our group trips. We prioritize their safety by
                  ensuring a secure environment with trusted trip captains, verified hosts, and reliable transport
                  vendors. Your safety is our top priority; any concerns during the trip will be promptly addressed by
                  our team. So relax and make the most of your journey!</p>
              </div>
            </div>
          </div>

          <div class="cny-faq__item">
            <h3 style="margin:0;">
              <button class="cny-faq__q" type="button" aria-expanded="false" aria-controls="cny-faq-3">
                <?php cny_i('star'); ?><span>What is the age requirement to join?</span><span class="cny-faq__icon"
                  aria-hidden="true"></span>
              </button>
            </h3>
            <div class="cny-faq__a" id="cny-faq-3" data-open="false">
              <div>
                <p>The trips is for 18-39 year olds</p>
              </div>
            </div>
          </div>

          <div class="cny-faq__item">
            <h3 style="margin:0;">
              <button class="cny-faq__q" type="button" aria-expanded="false" aria-controls="cny-faq-4">
                <?php cny_i('calendar'); ?><span>How do I confirm my booking?</span><span class="cny-faq__icon"
                  aria-hidden="true"></span>
              </button>
            </h3>
            <div class="cny-faq__a" id="cny-faq-4" data-open="false">
              <div>
                <p>Send the payment screenshot to info@roamers.in and you'll get the confirmation email within 24
                  hours.</p>
              </div>
            </div>
          </div>

          <div class="cny-faq__item">
            <h3 style="margin:0;">
              <button class="cny-faq__q" type="button" aria-expanded="false" aria-controls="cny-faq-5">
                <?php cny_i('sparkle'); ?><span>How do I trust Roamers?</span><span class="cny-faq__icon"
                  aria-hidden="true"></span>
              </button>
            </h3>
            <div class="cny-faq__a" id="cny-faq-5" data-open="false">
              <div>
                <p>You can absolutely trust us! We've nailed over 500 awesome trips. Check out the great reviews, speak
                  to our travel consultants, and check the website for further details. Our offices are in Chennai and
                  Delhi – we're all about being upfront and reliable all the way… Feel free to connect.</p>
              </div>
            </div>
          </div>
        </div>

        <p class="cny-faq__help">
          <?php cny_i('bell'); ?>
          <span>Still deciding which trip is right for you?</span>
          <a href="https://wa.me/918122121066" target="_blank" rel="noopener">Ask us on WhatsApp<?php cny_i('arrow-right'); ?></a>
        </p>
      </div>
    </section>



    <section class="festive-contact festive-wrap">
      <div><p class="festive-kicker">LET’S PLAN YOUR YEAR-END ESCAPE</p><h2>Where will you celebrate?</h2><p>Tell us your destination and travel dates. We’ll help you find your trip.</p></div>
      <a class="festive-primary" href="https://wa.me/918122121066" target="_blank" rel="noopener">Talk to a travel expert <?php cny_i('arrow-right'); ?></a>
    </section>
  </main>

  <!-- WhatsApp Button -->
  <a class="whatapp" href="https://wa.me/message/QYDBK5TO42TGH1" aria-label="Chat on WhatsApp">
    <img src="assets/img/icon/whatsapp.svg" alt="WhatsApp">
  </a>

  <script src="assets/js/christmas.js" defer></script>
  <script src="assets/js/home-festive-slider.js?v=<?php echo filemtime(__DIR__ . '/assets/js/home-festive-slider.js'); ?>" defer></script>
  <script src="assets/js/festive-packages-page.js?v=<?php echo filemtime(__DIR__ . '/assets/js/festive-packages-page.js'); ?>" defer></script>

  <?php include('includes/footer.php'); ?>

</body>
