(function() {
	function getTripKeyFromHref(href) {
		try {
			if (!href) return null;
			var url = new URL(href, window.location.origin);
			var pathname = url.pathname.toLowerCase();
			var file = pathname.split('/').pop();
			var key = file.replace(/\.php$|\.html$|\.htm$|\.phtml$/i, '');
			return key || null;
		} catch (e) {
			return null;
		}
	}

	function findMonthKeyFromSection(section) {
		if (!section || !section.id) return null;
		var raw = section.id.replace(/^tab-/, '').toLowerCase();
		return raw;
	}

	function populateDates(data) {
		var sections = document.querySelectorAll('.upcoming-tab-content');
		sections.forEach(function(section) {
			var monthKey = findMonthKeyFromSection(section);
			if (!monthKey || !data[monthKey]) return;
			var cards = section.querySelectorAll('.upcoming-card');
			cards.forEach(function(card) {
				var link = card.querySelector('a.upcoming-view');
				var datesEl = card.querySelector('.upcoming-dates-text');
				if (!link || !datesEl) return;
				var tripKey = getTripKeyFromHref(link.getAttribute('href'));
				if (!tripKey) return;
				var dateString = data[monthKey][tripKey];
				if (typeof dateString === 'string') {
					datesEl.textContent = dateString;
				}
			});
		});
	}

	function init() {
		var configPath = 'dynamic/upcoming-dates.json';
		fetch(configPath, { cache: 'no-store' })
			.then(function(res) { return res.json(); })
			.then(function(json) { populateDates(json); })
			.catch(function() { /* ignore */ });
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}
})();
