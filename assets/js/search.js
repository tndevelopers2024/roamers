document.addEventListener("DOMContentLoaded", function () {
    const searchData = [
        {
            name: 'Andaman Island Hopping',
            link: 'https://www.roamers.in/andaman',
            image: 'assets/img/kolukkumalai-img/2.jpg',
            duration: '5 DAYS / 4 NIGHTS',
            location: 'EX: Chennai',
            price_class: 'andaman-price'
        },
        {
            name: 'Munnar With Kolukkumalai',
            link: 'https://www.roamers.in/kolukkumalai-trek',
            image: 'assets/img/kolukkumalai-img/2.jpg',
            duration: '3 DAYS / 2 NIGHT',
            location: 'EX: Direct, Chennai',
            price_class: 'munnar-price'
        },
        {
            name: 'Chikmagalur',
            link: 'https://www.roamers.in/chikmagalur.php',
            image: 'https://www.roamers.in/assets/img/chikmangalur/Media/hills.jpg',
            duration: '3 DAYS / 2 NIGHT',
            location: 'EX: Direct, Chennai-Bangalore',
            price_class: 'chik-price'
        },
        {
            name: 'Wonders of Wayanad',
            link: 'https://roamers.in/wayanad',
            image: 'assets/img/bg/waya-cover.jpg',
            duration: '3 DAYS / 2 NIGHTS',
            location: 'EX: Direct, Chennai',
            price_class: 'wayanad-price'
        },
        {
            name: 'Ooty the queen of hills',
            link: 'https://roamers.in/ooty',
            image: 'assets/img/bg/ooty-cove.jpeg',
            duration: '3 DAYS / 2 NIGHTS',
            location: 'EX: Chennai, Coimbatore',
            price_class: 'ooty-price'
        },
        {
            name: 'Kerala : To gods own country',
            link: 'https://roamers.in/kerala',
            image: 'assets/img/Kerala/Kerala photos.jpg',
            duration: '5 DAYS / 4 NIGHTS',
            location: 'EX: Kochi, Chennai',
            price_class: 'kerala-price'
        },
        {
            name: 'Andaman island hopping',
            link: 'https://roamers.in/andaman',
            image: 'assets/img/backpacking/Andaman hoppers.jpg',
            duration: '7 DAYS / 6 NIGHTS',
            location: 'EX: Kochi, Chennai',
            price_class: 'andaman-price'
        },
        {
            name: 'Pondi Dive-in',
            link: 'https://roamers.in/pondicherry',
            image: 'assets/img/short-trip/Lead-Auroville.webp',
            duration: '3 DAYS / 2 NIGHTS',
            location: 'EX: Chennai',
            price_class: 'pondi-price'
        },
        {
            name: 'Majestic Meghalaya',
            link: 'https://roamers.in/meghalaya',
            image: 'assets/img/meghalaya/meghalaya-gallery-16.avif ',
            duration: '6 DAYS / 5 NIGHTS',
            location: 'EX: Guwahati',
            price_class: 'meghalaya-price'
        },
        {
            name: 'Kodaikanal trek with poombarai',
            link: 'https://roamers.in/kodaikanal',
            image: 'assets/img/meghalaya/meghalaya-gallery-16.avif ',
            duration: '3 DAYS / 2 NIGHTS',
            location: 'EX: Chennai',
            price_class: 'kodaikanal-price'
        },
        {
            name: 'Kedarkantha Trek',
            link: 'https://roamers.in/kedarkantha-old',
            image: 'assets/img/kedarkantha/main-sub.jpg ',
            duration: '5 DAYS / 4 NIGHTS',
            location: 'EX: Dehradun',
            price_class: 'kedar-price'
        },
        {
            name: 'Kodaikanal Backpacking',
            link: 'https://roamers.in/kodaikanal1',
            image: 'assets/img/kodaikanal-backpacking/Gunacav.jpeg',
            duration: '3 DAYS / 2 NIGHTS',
            location: 'EX: Chennai',
            price_class: 'kodaikanal-price'
        },
        {
            name: 'Varkala & Munroe Flashpacking',
            link: 'https://roamers.in/varkala-grouptrip',
            image: 'assets/img/varkala/kerala-1.jpg',
            duration: '3 DAYS / 2 NIGHTS',
            location: 'EX: Chennai',
            price_class: 'varkala-price'
        },
        {
            name: 'Spiti winter expedition',
            link: 'https://roamers.in/spiti-valley',
            image: 'assets/img/spiti-valley/spiti-cover.jpg',
            duration: '7 DAYS / 6 NIGHTS',
            location: 'EX: Delhi',
            price_class: 'spiti-price'
        }
    ];

    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-results');
    if (!searchInput || !searchResults) return;

    searchInput.addEventListener('input', function () {
        const query = this.value.trim().toLowerCase();
        searchResults.innerHTML = '';
        if (!query) {
            searchResults.style.display = 'none';
            return;
        }

        const filteredData = searchData
            .filter(function (item) {
                return item.name.toLowerCase().includes(query);
            })
            .sort(function (a, b) {
                const aName = a.name.toLowerCase();
                const bName = b.name.toLowerCase();
                const aStarts = aName.startsWith(query);
                const bStarts = bName.startsWith(query);
                if (aStarts && !bStarts) return -1;
                if (!aStarts && bStarts) return 1;
                return aName.indexOf(query) - bName.indexOf(query);
            });

        if (!filteredData.length) {
            searchResults.innerHTML = '<div class="col-12">No Trips found for "' + query +
                '"</div>';
        } else {
            searchResults.innerHTML = filteredData.map(function (item) {
                return (
                    '<div class="trip-card">' +
                    '<div class="search-box-con">' +
                    '<a href="' + item.link + '">' +
                    '<img src="' + item.image + '" alt="' + item.name + '">' +
                    '<div class="silder-inner silder-inner1">' +
                    '<div class="inner inner2">' +
                    '<h3>' + item.duration + '</h3>' +
                    '<h4>' +
                    '<img src="assets/img/images/loc1.svg" class="exicon" alt="location icon">' +
                    item.location +
                    '</h4>' +
                    '</div>' +
                    '<h2>' + item.name + '</h2>' +
                    '<div class="inner">' +
                    '<h4 class="sta">Starts at</h4>' +
                    '<h4><span class="' + (item.price_class || "trip-price") + '"></span></h4>' +
                    '</div>' +
                    '</div>' +
                    '</a>' +
                    '</div>' +
                    '</div>'
                );
            }).join('');
        }
        searchResults.style.display = 'flex';
        searchResults.style.flexWrap = 'wrap';

        // Re-run price updates for dynamic content
        if (window.updateTripPrices) {
            window.updateTripPrices();
        }
    });

    // Toggle Search Bar
    const searchBarContainerEl = document.querySelector(".search-bar-container");
    const magnifierEl = document.querySelector(".magnifier");
    if (searchBarContainerEl && magnifierEl) {
        magnifierEl.addEventListener("click", function () {
            searchBarContainerEl.classList.toggle("active");
        });
    }
});
