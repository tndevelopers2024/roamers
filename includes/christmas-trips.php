<?php
/**
 * Christmas & New Year trip data — single source of truth.
 *
 * Used by:
 *   - christmas&newyear.php  (full discovery page)
 *   - index.php              (homepage teaser section)
 *
 * All values (duration, departure, dates, price, links, images) are carried over
 * from the existing Christmas & New Year page. Nothing here is invented.
 *
 * Keys:
 *   types     mountain | beach | backpacking | roadtrip | international | shortbreak
 *   moods     mountains | beach | roadtrip | slow      (used by "What's Your Christmas Mood?")
 *   ex        departure slugs used by the departure filter
 *   budget    under10 | 10to20 | above20
 *   len       short (2-3D) | mid (4-5D) | long (6D+)
 *   newyear   true when the trip has a late-December departure listed
 */

require_once __DIR__ . '/christmas-icons.php';

$pathPrefix = isset($pathPrefix) ? $pathPrefix : '';

$christmasTrips = [
    [
        'slug'      => 'spiti',
        'title'     => 'Spiti Winter Expedition',
        'blurb'     => 'Cold-desert roads, old monasteries and high-mountain villages between Shimla and Kaza.',
        'locations' => 'Delhi, Shimla, Kalpa, Nako, Kaza, Sangla / Chitkul',
        'duration'  => '3D / 2N',
        'exLabel'   => 'Ex: Chennai · Bangalore',
        'dates'     => 'Dec 20, 25, 27',
        'price'     => '₹21,990',
        'url'       => 'spitivalley-winter-christmas&newyear.php',
        'img'       => 'assets/img/spiti-valley/cover/spiti-chandratal-trek.avif',
        'alt'       => 'Snow-covered peaks on the Spiti winter expedition route',
        'types'     => ['mountain', 'roadtrip'],
        'moods'     => ['mountains', 'roadtrip'],
        'ex'        => ['chennai', 'bangalore'],
        'budget'    => 'above20',
        'len'       => 'short',
        'newyear'   => true,
        'featured'  => true,
    ],
    [
        'slug'      => 'meghalaya',
        'title'     => 'Majestic Meghalaya',
        'blurb'     => 'Waterfalls, living-root bridges and the hill roads around Shillong and Cherrapunjee.',
        'locations' => 'Guwahati, Shillong, Cherrapunjee',
        'duration'  => '6D / 5N',
        'exLabel'   => 'Ex: Guwahati',
        'dates'     => 'Dec 20, 23, 28',
        'price'     => '₹21,990',
        'url'       => 'meghalaya-christmas-new-year.php',
        'img'       => 'assets/img/meghalaya/meghalaya-gallery-03.avif',
        'alt'       => 'Waterfall in the hills of Meghalaya',
        'types'     => ['mountain', 'roadtrip'],
        'moods'     => ['roadtrip', 'mountains'],
        'ex'        => ['guwahati'],
        'budget'    => 'above20',
        'len'       => 'long',
        'newyear'   => true,
        'featured'  => true,
    ],
    [
        'slug'      => 'chikkamagaluru',
        'title'     => 'Chikkamagaluru Backpacking',
        'blurb'     => 'Coffee-country hills, the climb up to Z Point and a morning at Hebbe Falls.',
        'locations' => 'Chikkamagaluru, Z Point, Hebbe Falls',
        'duration'  => '3D / 2N',
        'exLabel'   => 'Ex: Chennai · Bangalore',
        'dates'     => 'Dec 24, 29',
        'price'     => '₹9,499',
        'url'       => 'chikmagalur-christmas&newyear.php',
        'img'       => 'assets/img/testimonials/chikmagalur.avif',
        'alt'       => 'Coffee estates and hills in Chikkamagaluru',
        'types'     => ['mountain', 'backpacking', 'shortbreak'],
        'moods'     => ['mountains', 'roadtrip'],
        'ex'        => ['chennai', 'bangalore'],
        'budget'    => 'under10',
        'len'       => 'short',
        'newyear'   => true,
        'featured'  => false,
    ],
    [
        'slug'      => 'kerala',
        'title'     => "Kerala: God's Own Country",
        'blurb'     => 'Tea slopes in Munnar, the forest at Thekkady and a backwater day in Alappuzha.',
        'locations' => 'Munnar, Thekkady, Alappuzha',
        'duration'  => '5D / 4N',
        'exLabel'   => 'Ex: Chennai',
        'dates'     => 'Dec 24',
        'price'     => '₹16,990',
        'url'       => 'kerala-chritsmas&newyear.php',
        'img'       => 'assets/img/Kerala/Kerala-photos.jpg',
        'alt'       => 'Backwaters and palms in Kerala',
        'types'     => ['mountain', 'roadtrip'],
        'moods'     => ['slow'],
        'ex'        => ['chennai'],
        'budget'    => '10to20',
        'len'       => 'mid',
        'newyear'   => false,
        'featured'  => true,
    ],
    [
        'slug'      => 'kodaikanal',
        'title'     => 'Kodaikanal Backpacking',
        'blurb'     => 'Pine forests, cliff-edge viewpoints and a slow morning up in Poombarai.',
        'locations' => 'Kodaikanal, Vattakanal, Poombarai',
        'duration'  => '3D / 2N',
        'exLabel'   => 'Ex: Chennai',
        'dates'     => 'Dec 24, 29',
        'price'     => '₹9,990',
        'url'       => 'kodaikanal1-christmas&newyear.php',
        'img'       => 'assets/img/kodaikanal/Kodai.jpg',
        'alt'       => 'Misty hills and pine forest in Kodaikanal',
        'types'     => ['mountain', 'backpacking', 'shortbreak'],
        'moods'     => ['mountains', 'slow'],
        'ex'        => ['chennai'],
        'budget'    => 'under10',
        'len'       => 'short',
        'newyear'   => true,
        'featured'  => true,
    ],
    [
        'slug'      => 'wayanad',
        'title'     => 'Wonders of Wayanad',
        'blurb'     => 'Green hills, easy trails and a quiet corner of the Western Ghats.',
        'locations' => 'Wayanad',
        'duration'  => '3D / 2N',
        'exLabel'   => 'Ex: Chennai',
        'dates'     => 'Dec 24, 29',
        'price'     => '₹8,990',
        'url'       => 'wayanad-christmas&newyear.php',
        'img'       => 'assets/optimized-images/wayand-trip/upcoming-group-trips-cover.avif',
        'alt'       => 'Green hills and mist in Wayanad',
        'types'     => ['mountain', 'shortbreak'],
        'moods'     => ['slow', 'mountains'],
        'ex'        => ['chennai'],
        'budget'    => 'under10',
        'len'       => 'short',
        'newyear'   => true,
        'featured'  => false,
    ],
    [
        'slug'      => 'ooty',
        'title'     => 'Ooty — The Queen of Hills',
        'blurb'     => 'Nilgiri tea gardens, lake mornings and old hill-station streets.',
        'locations' => 'Chennai, Coimbatore',
        'duration'  => '3D / 2N',
        'exLabel'   => 'Ex: Chennai',
        'dates'     => 'Dec 24, 29',
        'price'     => '₹9,499',
        'url'       => 'ooty-christmas&newyear.php',
        'img'       => 'assets/img/Ooty/1-min.jpg',
        'alt'       => 'Tea gardens on the Nilgiri hills near Ooty',
        'types'     => ['mountain', 'shortbreak'],
        'moods'     => ['mountains', 'slow'],
        'ex'        => ['chennai'],
        'budget'    => 'under10',
        'len'       => 'short',
        'newyear'   => true,
        'featured'  => false,
    ],
    [
        'slug'      => 'pondicherry',
        'title'     => 'Pondi Dive-in',
        'blurb'     => 'French-quarter streets, sea breeze and an easy weekend by the coast.',
        'locations' => 'Pondicherry',
        'duration'  => '2D / 1N',
        'exLabel'   => 'Ex: Direct · Chennai',
        'dates'     => 'Dec 24, 29',
        'price'     => '₹4,990',
        'url'       => 'pondi-christmas&newyear.php',
        'img'       => 'assets/img/pondicherry/Media/Pondi-cover-min.jpg',
        'alt'       => 'Seafront promenade in Pondicherry',
        'types'     => ['beach', 'shortbreak'],
        'moods'     => ['beach', 'slow'],
        'ex'        => ['chennai'],
        'budget'    => 'under10',
        'len'       => 'short',
        'newyear'   => true,
        'featured'  => false,
    ],
    [
        'slug'      => 'srilanka',
        'title'     => 'Sri Lanka',
        'blurb'     => 'Sigiriya, Kandy, Ella, Galle and Bentota across one island week.',
        'locations' => 'Sigiriya, Kandy, Ella, Galle, Bentota',
        'duration'  => '7D / 6N',
        'exLabel'   => 'Ex: Colombo',
        'dates'     => 'Dec 13, 20, 27',
        'price'     => '₹43,990',
        'url'       => 'srilanka-christmas&newyear.php',
        'img'       => 'assets/img/Sirlanka/srilanka-images-by-roamers (16).webp',
        'alt'       => 'Hill country landscape in Sri Lanka',
        'types'     => ['international', 'beach'],
        'moods'     => ['beach', 'roadtrip'],
        'ex'        => ['colombo'],
        'budget'    => 'above20',
        'len'       => 'long',
        'newyear'   => true,
        'featured'  => false,
    ],
    [
        'slug'      => 'andaman',
        'title'     => 'Andaman Island Hopping',
        'blurb'     => 'Island hopping between Port Blair, Havelock and Neil.',
        'locations' => 'Port Blair, Ross Island, Havelock, Neil',
        'duration'  => '7D / 6N',
        'exLabel'   => 'Ex: Port Blair',
        'dates'     => 'Dec 25',
        'price'     => '₹29,990',
        'url'       => 'andaman-christmas&newyear.php',
        'img'       => 'assets/img/andaman/Media/bharatpur-beach-neil-island.jpg',
        'alt'       => 'Bharatpur beach on Neil Island in the Andamans',
        'types'     => ['beach'],
        'moods'     => ['beach'],
        'ex'        => ['portblair'],
        'budget'    => 'above20',
        'len'       => 'long',
        'newyear'   => false,
        'featured'  => true,
    ],
];

/** Human labels for the trip-type taxonomy. */
$christmasTypeLabels = [
    'mountain'      => 'Mountains',
    'beach'         => 'Beaches',
    'backpacking'   => 'Backpacking',
    'roadtrip'      => 'Road Trips',
    'international' => 'International',
    'shortbreak'    => 'Weekend Escapes',
];

if (!function_exists('cny_url')) {
    /** Encode a trip URL for use in an href. */
    function cny_url($url, $prefix = '')
    {
        return $prefix . str_replace('&', '&amp;', $url);
    }
}

if (!function_exists('cny_img')) {
    /** Encode an image path (spaces + ampersands) for use in a src. */
    function cny_img($path, $prefix = '')
    {
        return $prefix . str_replace([' ', '&'], ['%20', '&amp;'], $path);
    }
}


if (!function_exists('cny_card')) {
    /**
     * Render one Christmas & New Year trip card.
     *
     * One structure everywhere — homepage teaser, featured rail and the full
     * explorer all use this, so the page reads as a single consistent system.
     *
     * @param array $t    Trip row from $christmasTrips
     * @param array $opts prefix: path prefix · eager: skip lazy-loading
     */
    function cny_card(array $t, array $opts = [])
    {
        $prefix = isset($opts['prefix']) ? $opts['prefix'] : '';
        $eager  = !empty($opts['eager']);

        $href = cny_url($t['url'], $prefix);
        $src  = cny_img($t['img'], $prefix);

        $isNY   = !empty($t['newyear']);
        $ribbon = $isNY ? 'New Year Departure' : 'Christmas Special';
        $rIcon  = $isNY ? 'fireworks' : 'tree';

        $data = ' data-types="' . implode(' ', $t['types']) . '"'
              . ' data-moods="' . implode(' ', $t['moods']) . '"'
              . ' data-ex="' . implode(' ', $t['ex']) . '"'
              . ' data-budget="' . $t['budget'] . '"'
              . ' data-len="' . $t['len'] . '"'
              . ' data-newyear="' . ($isNY ? '1' : '0') . '"';
        if (!empty($opts['photo'])) {
            $trip = $t;
            $photoFilterData = $data . ' data-destination="' . htmlspecialchars($t['slug'], ENT_QUOTES) . '"';
            $photoPrefix = $prefix;
            $photoTitles = ['spiti' => 'Spiti', 'kerala' => 'Kerala', 'ooty' => 'Ooty', 'meghalaya' => 'Meghalaya', 'chikkamagaluru' => 'Chikmagalur', 'andaman' => 'Andaman'];
            $trip['title'] = $photoTitles[$t['slug']] ?? $t['title'];
            $photoImages = ['spiti' => 'assets/img/spiti-home-festive-card.avif', 'andaman' => 'assets/img/andaman/home-festive-card-2.avif'];
            $trip['img'] = $photoImages[$t['slug']] ?? $t['img'];
            require __DIR__ . '/festive-photo-card.php';
            return;
        }
        ?>
        <article class="cny-card"<?php echo $data; ?>>
            <a class="cny-card__link" href="<?php echo $href; ?>">

                <div class="cny-card__media">
                    <img src="<?php echo $src; ?>" alt="<?php echo htmlspecialchars($t['alt'], ENT_QUOTES); ?>"
                        loading="<?php echo $eager ? 'eager' : 'lazy'; ?>" decoding="async">

                    <span class="cny-ribbon cny-ribbon--<?php echo $isNY ? 'ny' : 'xmas'; ?>">
                        <?php cny_i($rIcon); ?><?php echo $ribbon; ?>
                    </span>

                    <span class="cny-card__len"><?php cny_i('clock'); ?><?php echo htmlspecialchars($t['duration']); ?></span>
                </div>

                <div class="cny-card__body">
                    <h3 class="cny-card__title"><?php echo htmlspecialchars($t['title']); ?></h3>

                    <ul class="cny-card__meta">
                        <li><?php cny_i('pin'); ?><span><?php echo htmlspecialchars($t['locations']); ?></span></li>
                        <li><?php cny_i('bus'); ?><span><?php echo htmlspecialchars($t['exLabel']); ?></span></li>
                        <li><?php cny_i('calendar'); ?><span><?php echo htmlspecialchars($t['dates']); ?></span></li>
                    </ul>

                    <div class="cny-card__foot">
                        <p class="cny-card__price">
                            <span>Starts from</span>
                            <strong><?php echo htmlspecialchars($t['price']); ?></strong>
                            <em>per person</em>
                        </p>
                        <span class="cny-card__cta">View Trip<?php cny_i('arrow-right'); ?></span>
                    </div>
                </div>
            </a>
        </article>
        <?php
    }
}
