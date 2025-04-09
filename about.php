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

     
    .about-section {
      padding: 60px 0;
    }
    .about-title {
      font-weight: 700;
    }
    .about-subtitle {
      color: #6c757d;
      margin-bottom: 30px;
    }
    .about-text {
      text-align: justify;
      line-height: 1.8;
    }
    .about-img {
      width: 100%;
      border-radius: 10px;
      object-fit: cover;
    }

    .section-title {
      font-weight: bold;
    }

    .info-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .info-icon {
      width: 50px;
      height: 50px;
      background-color: #002a76;
      color: #fff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      margin: 0 auto 15px;
    }

    .info-card h6 {
      font-weight: 600;
    }

    .info-card p {
      font-size: 14px;
      color: #555;
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

<br><br>

<section class="about-section">
  <div class="container">
    <div class="row align-items-center g-4">
      
      <!-- Text Column -->
      <div class="col-lg-6">
        <h3 class="about-title">About Help The Tourists</h3>
        <p class="about-subtitle">Bringing you closer to the beauty of Darjeeling, Sikkim, and Dooars.</p>
        <p class="about-text">
          At Help The Tourists, we specialize in crafting tailor-made travel experiences that showcase
          the unparalleled beauty and rich culture of Sikkim, Darjeeling and Dooars. With over a
          decade of experience in the travel industry, we are your trusted guides to uncovering the
          hidden gems of these breathtaking regions.
        </p>
        <p class="about-text">
          Our team of local experts and tour planners possess an intimate knowledge of the
          destinations we offer tours for, guaranteeing an authentic and immersive experience. From
          the rolling tea gardens of Darjeeling to the snow-capped peaks of Khangchendzonga and the
          serene beauty of Dooars, we’ll take you on a journey that promises to leave a lasting
          impression.
        </p>
        <p class="about-text">
          We offer a wide range of tours, catering to every type of traveler. Whether you seek
          adventure, culture, or spirituality, our tour packages have something for everyone. From
          visiting the famous tourist attractions to uncovering off-beat destinations, we’ll take you on a
          journey of discovery.
        </p>
        <p class="about-text">
          At Help The Tourists, we are committed to sustainable tourism and take great care to
          minimize our impact on the environment and local communities. We work closely with local
          partners to ensure that our tours support the local economy and promote conservation.
        </p>
        <p class="about-text">
          Join us on an unforgettable journey to the hidden gems of Sikkim, Darjeeling and Dooars.
          Contact us today to customize your perfect travel experience with Help The Tourists.
        </p>
      </div>

      <!-- Image Column -->
      <div class="col-lg-6">
        <img src="https://s3.amazonaws.com/media.cloversites.com/40/4017d2aa-f801-4362-9e4a-6681a45c7267/site-images/c8269332-c0cd-466d-bedf-d64ce1c7ac15@2x.jpg" alt="Travelers" class="about-img">
      </div>

    </div>
  </div>
</section>

<br><br>

<section class="py-5 text-center">
  <div class="container">
    <h3 class="section-title">What Makes Us Different</h3>
    <p class="text-muted mb-5">
      We provide individualized services including customized itineraries and exclusive consultations with <br>
      travel experts. Because of that we offer our guests an unique and memorable experience. We <br>
      focused on sustainable and responsible tourism that can set us apart from other travel companies.
    </p>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card info-card p-4 h-100">
          <div class="info-icon">
            <i class="bi bi-star-fill"></i>
          </div>
          <h6>Customer Satisfaction</h6>
          <p>The prime motto of our business is to build a good network with travelers. We’re framing travel diaries of fresh clients.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card info-card p-4 h-100">
          <div class="info-icon">
            <i class="bi bi-hand-thumbs-up-fill"></i>
          </div>
          <h6>Quality Service</h6>
          <p>We offer quality service 24x7. We strive to give the ultimate satisfaction based on each traveler’s unique need.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card info-card p-4 h-100">
          <div class="info-icon">
            <i class="bi bi-briefcase-fill"></i>
          </div>
          <h6>Passion & Experience</h6>
          <p>We work hard to make your vacation memorable. Years of experience and dedication make it happen.</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="card info-card p-4 h-100">
          <div class="info-icon">
            <i class="bi bi-signpost-2-fill"></i>
          </div>
          <h6>Local Alliance</h6>
          <p>We support and maintain regional culture. Travel is not just about places, but about connecting with local traditions.</p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="card info-card p-4 h-100">
          <div class="info-icon">
            <i class="bi bi-gear-fill"></i>
          </div>
          <h6>Tailor-Made Tours</h6>
          <p>No two travelers are the same. We create packages as per your travel needs and dreams.</p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-4">
        <div class="card info-card p-4 h-100">
          <div class="info-icon">
            <i class="bi bi-eye-fill"></i>
          </div>
          <h6>Unique Experiences</h6>
          <p>We offer offbeat destinations and new adventures, so you always feel close to nature and fresh ideas.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  

<br><br><br><br><br>
<?php
include 'footer.php';
?>

