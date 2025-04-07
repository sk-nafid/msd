 // Get the elements for Adult and Child Quantity inputs
    const adultQuantityInput = document.getElementById('adultQuantity');
    const childQuantityInput = document.getElementById('childQuantity');
    
    // Summary display elements
    const adultSummary = document.getElementById('adultSummary');
    const childSummary = document.getElementById('childSummary');

    // Event listeners for Adult Quantity buttons
    document.getElementById('adultIncreaseBtn').addEventListener('click', function () {
      let currentAdultValue = parseInt(adultQuantityInput.value);
      adultQuantityInput.value = currentAdultValue + 1;
      adultSummary.textContent = adultQuantityInput.value; // Update summary
    });

    document.getElementById('adultDecreaseBtn').addEventListener('click', function () {
      let currentAdultValue = parseInt(adultQuantityInput.value);
      if (currentAdultValue > 0) {
        adultQuantityInput.value = currentAdultValue - 1;
        adultSummary.textContent = adultQuantityInput.value; // Update summary
      }
    });

    // Event listeners for Child Quantity buttons
    document.getElementById('childIncreaseBtn').addEventListener('click', function () {
      let currentChildValue = parseInt(childQuantityInput.value);
      childQuantityInput.value = currentChildValue + 1;
      childSummary.textContent = childQuantityInput.value; // Update summary
    });

    document.getElementById('childDecreaseBtn').addEventListener('click', function () {
      let currentChildValue = parseInt(childQuantityInput.value);
      if (currentChildValue > 0) {
        childQuantityInput.value = currentChildValue - 1;
        childSummary.textContent = childQuantityInput.value; // Update summary
      }
    });