<?php /* Shared photo card for homepage and festive trip explorer. */ ?>
                        <article class="home-festive-card<?php echo !empty($photoFilterData) ? ' cny-card' : ''; ?>"<?php echo $photoFilterData ?? ''; ?>>
                            <a class="home-festive-card__link"<?php if (($trip['slug'] ?? '') === 'manali' || ($trip['url'] ?? '') === 'manali.php'): ?> aria-disabled="true"<?php else: ?> href="<?php echo cny_url($trip['url'], $photoPrefix ?? ''); ?>"<?php endif; ?>>
                                <img class="home-festive-card__photo" src="<?php echo cny_img($trip['img'], $photoPrefix ?? ''); ?>" alt="<?php echo htmlspecialchars($trip['alt'], ENT_QUOTES); ?>" loading="lazy" decoding="async">
                                <span class="home-festive-card__badge home-festive-card__badge--<?php echo $trip['newyear'] ? 'newyear' : 'christmas'; ?>"><?php cny_i($trip['newyear'] ? 'fireworks' : 'tree'); ?><?php echo $trip['newyear'] ? 'New Year' : 'Christmas'; ?></span>
                                <span class="home-festive-card__ornament home-festive-card__ornament--<?php echo $trip['newyear'] ? 'newyear' : 'christmas'; ?>" aria-hidden="true">
                                    <?php if ($trip['newyear']): ?>
                                        <svg viewBox="0 0 32 32" fill="none"><path d="M16 3l3.2 9.8L29 16l-9.8 3.2L16 29l-3.2-9.8L3 16l9.8-3.2L16 3Z" stroke="currentColor" stroke-width="1.4"/><path d="M25 3v6M22 6h6" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
                                    <?php else: ?>
                                        <svg viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3v26M5 9l22 14M5 23L27 9M12 5l4 4 4-4M12 27l4-4 4 4M5 14l5-2-1-5M23 25l-1-5 5-2M5 18l5 2-1 5M23 7l-1 5 5 2"/></svg>
                                    <?php endif; ?>
                                </span>
                                <div class="home-festive-card__content">
                                    <h3><?php echo htmlspecialchars($trip['title']); ?></h3>
                                    <div class="home-festive-card__meta">
                                        <?php if ($trip['duration']): ?><span><?php cny_i('clock'); ?><?php echo htmlspecialchars($trip['duration']); ?></span><?php endif; ?>
                                        <?php if ($trip['dates']): ?><span><?php cny_i('calendar'); ?><?php echo htmlspecialchars($trip['dates']); ?></span><?php endif; ?>
                                    </div>
                                    <p class="home-festive-card__departure"><?php echo htmlspecialchars($trip['exLabel']); ?></p>
                                    <div class="home-festive-card__bottom">
                                        <span class="home-festive-card__price"><small><?php echo $trip['price'] === 'Enquire' ? 'Trip details' : 'From / person'; ?></small><strong><?php echo htmlspecialchars($trip['price']); ?></strong></span>
                                        <span class="home-festive-card__button">View Trip</span>
                                    </div>
                                </div>
                            </a>
                        </article>
