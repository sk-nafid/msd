<?php
include 'header.php';
?>

   <style>
    .bdy {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .hero {
      background-image: url('img/slider2.jpg'); /* Replace with your actual image path */
      background-size: cover;
      background-position: center;
      height: 350px;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.4); /* dark transparent overlay for readability */
    }

    .hero-content {
      position: relative;
      max-width: 900px;
      padding: 20px;
      text-align: left;
      z-index: 1;
    }

    .hero-content h1 {
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .hero-content p {
      font-size: 1rem;
      line-height: 1.6;
      margin-bottom: 20px;
    }

    .read-more-btn {
      background-color: #1e60f3;
      color: white;
      margin-top: -13px;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 50px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      transition: background-color 0.3s ease;
    }

    .read-more-btn:hover {
      background-color: #0047c0;
    }

    .read-more-btn span {
      display: inline-block;
      background: white;
      color: #1e60f3;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-left: 10px;
      font-size: 1rem;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

  

    .package-card {
      display: flex;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      max-width: 1100px;
      margin: auto;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .package-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .package-image img {
      width: 250px;
      height: 100%;
      object-fit: cover;
    }

    .package-details {
      flex: 1;
      padding: 20px;
      border-right: 1px solid #ddd;
    }

    .package-details h2 {
      font-size: 18px;
      margin-bottom: 10px;
      color: #003478;
    }

    .tags {
      margin-bottom: 15px;
    }

    .tag {
      display: inline-block;
      background-color: #f2f2f2;
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 13px;
      margin: 0 5px 5px 0;
    }

    .includes {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      gap: 25px;
      border-top:solid 0.5px ;
      border-bottom:solid 0.5px ;
    }

    .includes div {
      text-align: center;
      font-size: 14px;
      color: #333;
    }

    .includes img {
      width: 28px;
      height: 28px;
      margin-bottom: 5px;
    }

    .custom-text {
      font-size: 14px;
      color: #555;
    }

    .package-pricing {
      width: 240px;
      padding: 20px;
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .duration {
      color: green;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .price {
      font-size: 24px;
      font-weight: bold;
      color: #003478;
    }

    .subtext {
      font-size: 12px;
      color: #555;
      margin-bottom: 15px;
    }

    .btns {
      display: flex;
      gap: 10px;
      justify-content: center;
    }

    .btn {
      padding: 10px 15px;
      font-size: 14px;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn.enquire {
      background-color: #ffc107;
      color: #000;
    }

    .btn.details {
      background-color: #2d49f4;
      color: #fff;
    }

    .btn:hover {
      transform: scale(1.05);
      opacity: 0.9;
    }

    @media (max-width: 768px) {
      .package-card {
        flex-direction: column;
      }

      .package-image img {
        width: 100%;
      }

      .package-pricing {
        width: 100%;
        border-top: 1px solid #eee;
      }
    }

    .inctext{


    transform: rotate(-90deg);
    float: left;
    
   
    background-color: #bfbaba;
    border-radius: 3px;
    padding: 3px;
    height: 29px;
        
    margin-left: -19px;

    }
  </style>


  <div class="bdy">
  <section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Darjeeling Tour Packages</h1>
      <p>
        Darjeeling is known for being one of the most stunning mountain towns. This wonderful destination draws people because of its natural beauty and humid climate. Darjeeling is one of India's most popular tourist destinations due to its vibrant scenery, tea plantations, year-round weather, and hills.
      </p>
      <button class="read-more-btn">
        Read More <span>&rarr;</span>
      </button>
    </div>
  </section>
  </div>


  <br><br>

  <div class="package-card">
  <!-- Image Section -->
  <div class="package-image">
    <img src="img/slider15.webp" alt="Darjeeling Tour Image">
  </div>

  <!-- Details Section -->
  <div class="package-details">
    <h2>Experience Together: Group Tour for 8 Nights</h2>

    <div class="tags">
      <span class="tag">2N Darjeeling</span>
      <span class="tag">1N Pelling</span>
      <span class="tag">4N Gangtok</span>
      <span class="tag">1N Lachung</span>
    </div>

    <div class="includes">
      <div class="inctext">
        <p >INCLUDES</p>
      </div>
      <div>
        <img src="img/icon/hotel.webp" alt="Hotels">

        <div>Hotels</div>
      </div>
      <div>
        <img src="img/icon/car.webp" alt="Transfer">
        <div>Transfer</div>
      </div>
      <div>
        <img src="img/icon/meals.webp" alt="Meals">
        <div>Meals</div>
      </div>
      <div>
        <img src="img/icon//sightseeing.webp" alt="Sightseeing">
        <div>Sightseeing</div>
      </div>
    </div>

    <div class="custom-text">
      Call 98008 34444 Now to Customize this Package
    </div>
  </div>

  <!-- Pricing Section -->
  <div class="package-pricing">
    <div class="duration">9 Days 8 Nights</div>
    <div class="price">₹20999</div>
    <div class="subtext">per adult on twin sharing, Min. 12 PAX</div>
    <div class="btns">
      <button class="btn enquire">Enquire Now</button>
      <button class="btn details">View Details</button>
    </div>
  </div>
</div>

<br>
<div class="package-card">
  <!-- Image Section -->
  <div class="package-image">
    <img src="img/slider16.webp" alt="Darjeeling Tour Image">
  </div>

  <!-- Details Section -->
  <div class="package-details">
    <h2>Darjeeling and Sikkim Trip With Family</h2>

    <div class="tags">
      <span class="tag">2N Darjeeling</span>
      
      <span class="tag">3N Gangtok</span>
      
    </div>

    <div class="includes">
      <div class="inctext">
        <p >INCLUDES</p>
      </div>
      <div>
        <img src="img/icon/hotel.webp" alt="Hotels">
        <div>Hotels</div>
      </div>
      <div>
        <img src="img/icon/car.webp" alt="Transfer">
        <div>Transfer</div>
      </div>
      <div>
        <img src="img/icon/meals.webp" alt="Meals">
        <div>Meals</div>
      </div>
      <div>
        <img src="img/icon//sightseeing.webp" alt="Sightseeing">
        <div>Sightseeing</div>
      </div>
    </div>

    <div class="custom-text">
      Call 98008 34444 Now to Customize this Package
    </div>
  </div>

  <!-- Pricing Section -->
  <div class="package-pricing">
    <div class="duration">6 Days 5 Nights</div>
    <div class="price">₹17400</div>
    <div class="subtext">per adult on twin sharing, Min. 12 PAX</div>
    <div class="btns">
      <button class="btn enquire">Enquire Now</button>
      <button class="btn details">View Details</button>
    </div>
  </div>
</div>

<br>
<div class="package-card">
  <!-- Image Section -->
  <div class="package-image">
    <img src="img/slider17.webp" alt="Darjeeling Tour Image">
  </div>

  <!-- Details Section -->
  <div class="package-details">
    <h2>Luxury Trip to Gangtok and Darjeeling</h2>

    <div class="tags">
      <span class="tag">2N Darjeeling</span>
      <span class="tag">1N Pelling</span>
      <span class="tag">4N Gangtok</span>
      <span class="tag">1N Lachung</span>
    </div>

    <div class="includes" >
      <div class="inctext">
        <p >INCLUDES
</p>
      </div>
      
      <div>
        <img src="img/icon/hotel.webp" alt="Hotels">
        <div>Hotels</div>
      </div>
      <div>
        <img src="img/icon/car.webp" alt="Transfer">
        <div>Transfer</div>
      </div>
      <div>
        <img src="img/icon/meals.webp" alt="Meals">
        <div>Meals</div>
      </div>
      <div>
        <img src="img/icon//sightseeing.webp" alt="Sightseeing">
        <div>Sightseeing</div>
      </div>
    </div>

    <div class="custom-text">
      Call 98008 34444 Now to Customize this Package
    </div>
  </div>

  <!-- Pricing Section -->
  <div class="package-pricing">
    <div class="duration">9 Days 8 Nights</div>
    <div class="price">₹30000</div>
    <div class="subtext">per adult on twin sharing, Min. 12 PAX</div>
    <div class="btns">
      <button class="btn enquire">Enquire Now</button>
      <button class="btn details">View Details</button>
    </div>
  </div>
</div>




  <br><br><br><br>
<?php
include 'footer.php';
?>
