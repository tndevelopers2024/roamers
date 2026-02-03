<?php
/**
 * Site Configuration
 * Use this file to manage global settings like the current year.
 * Usage: <?php echo $current_year; ?>
 */

$current_year = date("Y");
$next_year = date("Y", strtotime("+1 year"));

// Special Event Texts
$new_year_text = "Christmas & New Year $current_year Special";
$new_year_trip_text = "Christmas & New Year $current_year Trip";
?>