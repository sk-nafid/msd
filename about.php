<?php
include 'header.php';
?>
  <style>
    .banner {
      background-image: url('img/slider2.jpg'); /* Use your actual image path */
      background-size: cover;
      background-position: center;
      height: 250px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2rem;
      font-weight: bold;
      text-shadow: 0 2px 4px rgba(0,0,0,0.7);
    }

    .choose-icon {
      height: 80px;
      object-fit: contain;
      margin-bottom: 15px;
    }
    .choose-item {
      text-align: center;
      padding: 20px;
    }
    .choose-title {
      font-weight: 600;
      margin-bottom: 10px;
    }
    .choose-text {
      color: #555;
      font-size: 15px;
    }

     
  </style>

  <div class="banner">
   
    About Us
    
  </div>
<br><br>
  <div class="container text-center">
  <h2 class="fw-bold mb-3">Why Choose Us</h2>
  <p class="text-muted mb-5">
    It makes a huge difference when you plan your trip with one of our knowledgeable travel advisers,
    who will help you have memorable and pleasant vacations...
  </p>

  <div class="row g-4 justify-content-center">
    <div class="col-12 col-md-6 col-lg-3 choose-item">
      <img src="https://img.icons8.com/color/96/guarantee.png" alt="Price Guarantee" class="choose-icon">
      <div class="choose-title">Honest Prices Guarantee</div>
      <div class="choose-text">All of the inclusions and exclusions are clearly listed in our tour pricing. Everything in business is negotiable Except Quality.</div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 choose-item">
      <img src="https://img.icons8.com/color/96/conference-call.png" alt="Reliable Partners" class="choose-icon">
      <div class="choose-title">Reliable Partners</div>
      <div class="choose-text">We only collaborate with the top hotels, drivers and other service providers who have established their professionalism through time.</div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 choose-item">
      <img src="https://img.icons8.com/color/96/map-marker--v1.png" alt="Itinerary" class="choose-icon">
      <div class="choose-title">Tailor-Made Itinerary</div>
      <div class="choose-text">Your choices & your budget. We are pleased to create a unique itinerary tailored to your needs and preferences.</div>
    </div>

    <div class="col-12 col-md-6 col-lg-3 choose-item">
      <img src="https://img.icons8.com/color/96/online-support.png" alt="Support" class="choose-icon">
      <div class="choose-title">Full Support 24/7</div>
      <div class="choose-text">Starting with tour selection to travel essentials. We ensure a relaxing, enjoyable, hassle-free vacation for you.</div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  

<br><br><br><br><br>
<?php
include 'footer.php';
?>

