<?php
/**
 * Christmas & New Year icon sprite.
 *
 * Emitted once per page, then referenced with:
 *   <svg class="cny-i"><use href="#cny-gift"></use></svg>
 *
 * All icons share a 24x24 box and draw with currentColor so they inherit
 * whatever colour the surrounding component sets.
 */
if (!function_exists('cny_icon_sprite')) {
    function cny_icon_sprite()
    {
        static $done = false;
        if ($done) { return; }
        $done = true;
        ?>
<svg class="cny-sprite" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
  <defs>

    <symbol id="cny-gift" viewBox="0 0 24 24">
      <rect x="3.5" y="10.8" width="17" height="10.2" rx="1.4"/>
      <rect x="2.2" y="7" width="19.6" height="3.8" rx="1.2"/>
      <path d="M12 7v14"/>
      <path d="M12 7c-1.3-2.4-2.8-3.9-4.5-3.6-1.5.3-2 2.2-.7 3.1.9.6 2.9.7 5.2.5Z"/>
      <path d="M12 7c1.3-2.4 2.8-3.9 4.5-3.6 1.5.3 2 2.2.7 3.1-.9.6-2.9.7-5.2.5Z"/>
    </symbol>

    <symbol id="cny-tree" viewBox="0 0 24 24">
      <path d="M12 3.2 15.7 9h-2.4l3.5 5.1h-3v3.2h-3.6v-3.2h-3L10.7 9H8.3L12 3.2Z"/>
      <path d="M8.6 20.6h6.8"/>
      <path d="M12 17.3v3.3"/>
    </symbol>

    <symbol id="cny-bell" viewBox="0 0 24 24">
      <path d="M18.2 16.4v-5.1a6.2 6.2 0 1 0-12.4 0v5.1L4.2 18.6h15.6l-1.6-2.2Z"/>
      <path d="M10 20.8a2.1 2.1 0 0 0 4 0"/>
      <path d="M12 5.1V3.3"/>
    </symbol>

    <symbol id="cny-star" viewBox="0 0 24 24">
      <path d="m12 3.4 2.65 5.36 5.92.86-4.29 4.17 1.02 5.89L12 16.9l-5.3 2.78 1.02-5.89L3.43 9.62l5.92-.86L12 3.4Z"/>
    </symbol>

    <symbol id="cny-snowflake" viewBox="0 0 24 24">
      <path d="M12 2.4v19.2M3.7 7.2l16.6 9.6M3.7 16.8l16.6-9.6"/>
      <path d="m9.8 4.6 2.2 2.2 2.2-2.2M9.8 19.4l2.2-2.2 2.2 2.2"/>
      <path d="m4.6 11.1-.9 3 3 .8M19.4 12.9l.9-3-3-.8"/>
      <path d="m4.6 12.9.9 3 3-.8M19.4 11.1l-.9-3-3 .8"/>
    </symbol>

    <symbol id="cny-bauble" viewBox="0 0 24 24">
      <circle cx="12" cy="14.6" r="6.4"/>
      <path d="M10.2 8.4V6.5h3.6v1.9"/>
      <path d="M12 6.5V4.9a1.7 1.7 0 0 1 1.7-1.7"/>
      <path d="M5.9 13.4c3.5 1.6 8.7 1.6 12.2 0"/>
    </symbol>

    <symbol id="cny-candy" viewBox="0 0 24 24">
      <path d="M8.4 21.4V11.9a4.3 4.3 0 0 1 8.6 0v1.4"/>
      <path d="M8.5 15.6h4M9.6 11.2c1-1.6 3.1-2.3 4.8-1.6M13.6 21.4h-5"/>
    </symbol>

    <symbol id="cny-hat" viewBox="0 0 24 24">
      <path d="M3.6 17.2h12.2c0-5.7 2.7-9.1 2.7-11 0-1.4-1.1-2.3-2.6-2.3C11.6 3.9 6 9.1 3.6 17.2Z"/>
      <rect x="2.3" y="17.2" width="14.6" height="3.4" rx="1.7"/>
      <circle cx="19.9" cy="4.6" r="1.9"/>
    </symbol>

    <symbol id="cny-stocking" viewBox="0 0 24 24">
      <path d="M8 3.6h8v8.1c0 .6.3 1.2.8 1.6l2.5 2c1.7 1.3 1 4-1.1 4.4l-4.4.9c-2.4.5-4.6-1.4-4.6-3.8V3.6Z"/>
      <path d="M8 7.3h8"/>
    </symbol>

    <symbol id="cny-sparkle" viewBox="0 0 24 24">
      <path d="m10 2.6 1.5 4.3 4.3 1.5-4.3 1.5L10 14.2 8.5 9.9 4.2 8.4l4.3-1.5L10 2.6Z"/>
      <path d="m17.6 13.8.9 2.5 2.5.9-2.5.9-.9 2.5-.9-2.5-2.5-.9 2.5-.9.9-2.5Z"/>
    </symbol>

    <symbol id="cny-fireworks" viewBox="0 0 24 24">
      <path d="M12 11.8V4.4M12 11.8l6.4-3.7M12 11.8l-6.4-3.7M12 11.8l6.4 3.7M12 11.8l-6.4 3.7M12 11.8v7.4"/>
      <path d="M12 3.1v.6M19.5 7.4l-.5.3M19.5 16.2l-.5-.3M12 19.9v.6M4.5 16.2l.5-.3M4.5 7.4l.5.3"/>
    </symbol>

    <symbol id="cny-mug" viewBox="0 0 24 24">
      <path d="M4.4 8.2h11.2v7.4a4.4 4.4 0 0 1-4.4 4.4H8.8a4.4 4.4 0 0 1-4.4-4.4V8.2Z"/>
      <path d="M15.6 10.3h1.7a2.6 2.6 0 0 1 0 5.2h-1.7"/>
      <path d="M8.2 3.4c0 1.2 1.1 1.2 1.1 2.4M11.8 3.4c0 1.2 1.1 1.2 1.1 2.4"/>
    </symbol>

    <symbol id="cny-mountain" viewBox="0 0 24 24">
      <path d="M2.4 19.4h19.2L14.4 5.6l-3.9 6.6-2.1-2.6-6 9.8Z"/>
      <path d="m12.2 10.6 2.2-1.1 2.1 1.1"/>
    </symbol>

    <symbol id="cny-beach" viewBox="0 0 24 24">
      <circle cx="12" cy="7.6" r="3.3"/>
      <path d="M12 2.2v1.4M12 11.6V13M6.7 7.6H5.3M18.7 7.6h-1.4M8.3 3.9l-1 -1M16.7 3.9l1-1"/>
      <path d="M2.6 17.2c1.9-1.5 3.8-1.5 5.7 0s3.8 1.5 5.7 0 3.8-1.5 5.7 0"/>
      <path d="M2.6 21c1.9-1.5 3.8-1.5 5.7 0s3.8 1.5 5.7 0 3.8-1.5 5.7 0"/>
    </symbol>

    <symbol id="cny-road" viewBox="0 0 24 24">
      <path d="M8.8 3 6.6 21M15.2 3l2.2 18"/>
      <path d="M12 4.4v3.1M12 10.5v3.1M12 16.6v3.1"/>
    </symbol>

    <symbol id="cny-globe" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="8.8"/>
      <path d="M3.2 12h17.6"/>
      <path d="M12 3.2c2.7 3.2 2.7 14.4 0 17.6-2.7-3.2-2.7-14.4 0-17.6Z"/>
    </symbol>

    <symbol id="cny-calendar" viewBox="0 0 24 24">
      <rect x="3.4" y="5" width="17.2" height="15.6" rx="2.2"/>
      <path d="M3.4 10h17.2M8.2 3.2v3.4M15.8 3.2v3.4"/>
    </symbol>

    <symbol id="cny-clock" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="8.8"/>
      <path d="M12 6.9V12l3.2 2.1"/>
    </symbol>

    <symbol id="cny-pin" viewBox="0 0 24 24">
      <path d="M12 21.4s7.1-5.4 7.1-11.2a7.1 7.1 0 1 0-14.2 0c0 5.8 7.1 11.2 7.1 11.2Z"/>
      <circle cx="12" cy="10" r="2.6"/>
    </symbol>

    <symbol id="cny-bus" viewBox="0 0 24 24">
      <rect x="3.2" y="4.4" width="17.6" height="12.4" rx="2.4"/>
      <path d="M3.2 11.2h17.6M8.6 4.4v6.8M15.4 4.4v6.8"/>
      <path d="M6.8 16.8v2.2M17.2 16.8v2.2"/>
    </symbol>

    <symbol id="cny-arrow-right" viewBox="0 0 24 24">
      <path d="M4.6 12h14.2M12.9 6.1l5.9 5.9-5.9 5.9"/>
    </symbol>

    <symbol id="cny-arrow-down" viewBox="0 0 24 24">
      <path d="M12 4.6v14.2M6.1 12.9l5.9 5.9 5.9-5.9"/>
    </symbol>

    <symbol id="cny-whatsapp" viewBox="0 0 24 24">
      <path d="M3.4 20.6 4.8 16a8.2 8.2 0 1 1 3.3 3.2l-4.7 1.4Z"/>
      <path d="M9 9c.3 1.6 1.4 3 2.8 3.9.6.4 1.4.7 2.1.8l.6-1.3 2 .8-.5 1.6c-1.9.3-3.9-.6-5.4-2.1-1.2-1.2-2-2.7-2-4.2l1.6-.5.8 2L9 9Z"/>
    </symbol>

  </defs>
</svg>
        <?php
    }
}

if (!function_exists('cny_i')) {
    /** Render one sprite icon. */
    function cny_i($name, $class = '')
    {
        echo '<svg class="cny-i' . ($class ? ' ' . $class : '') . '" aria-hidden="true"><use href="#cny-' . $name . '"></use></svg>';
    }
}
