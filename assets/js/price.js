/**
 * Roamers Trip Prices Configuration
 * Maps CSS selectors to their respective starting prices.
 */
const tripPrices = {
  ".tawang-price": "₹19,990",
  ".wayanad-price": "₹7,990",
  ".munnar-price": "₹8,499",
  ".ooty-price": "₹7,299",
  ".chik-price": "₹7,990",
  ".chikmangalur-price": "₹7,990",
  ".kerala-price": "₹14,490",
  ".kerala-onam-price": "₹8,499",
  ".andaman-price": "₹24,990",
  ".leh-ladak-price": "₹21,990",
  ".ladakh-umlingla-price": "₹24,990",
  ".pondi-price": "₹4,990",
  ".goa-price": "₹8,490",
  ".meghalaya-price": "₹19,990",
  ".meghalaya-christmas-new-year": "₹21,990",
  ".kodaikanal-price": "₹7,990",
  ".kodaikanal1-price": "₹8,990",
  ".kedar-price": "₹8,990",
  ".varkala-price": "₹8,490",
  ".spiti-price": "₹21,990",
  ".spiti-valley-winter": "₹21,990",
  ".ladakh-price": "₹29,990",
  ".valley-price": "₹9,990",
  ".srilanka-price": "₹43,990",
  ".thailand-price": "₹39,990",
  ".kedarkantha-price": "₹8,990",
  ".kolukku-price": "₹5,499"
};

/**
 * Updates the DOM with prices from the configuration.
 */
function updatePrices() {
  Object.entries(tripPrices).forEach(([selector, price]) => {
    const elements = document.querySelectorAll(selector);
    if (elements.length > 0) {
      elements.forEach((element) => {
        element.innerHTML = price;
      });
    }
  });
}

// Execute on script load
updatePrices();

// Also expose for manual updates if needed
window.updateTripPrices = updatePrices;