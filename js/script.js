flatpickr("#date-range", {
  mode: "range",
  dateFormat: "d/m/Y"
});

let adultCount = 0;
let childCount = 0;

function updateGuests(type, change) {
  if (type === 'adults') {
    adultCount = Math.max(0, adultCount + change);
    document.getElementById("adultCount").innerText = adultCount;
  } else {
    childCount = Math.max(0, childCount + change);
    document.getElementById("childCount").innerText = childCount;
  }
  document.getElementById("guestDisplay").innerText = `${adultCount} Adult - ${childCount} Child`;
}

function toggleGuestDropdown() {
  const dropdown = document.getElementById("guestDropdown");
  dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

// Close guest dropdown on outside click
document.addEventListener("click", function(event) {
  const guestSelector = document.querySelector(".guest-selector");
  if (!guestSelector.contains(event.target)) {
    document.getElementById("guestDropdown").style.display = "none";
  }
});