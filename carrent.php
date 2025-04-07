<?php
include 'header.php';
?>
<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .car-banner {
      background-image: url('img/car-hire.webp'); /* Replace with your actual image path */
      background-size: cover;
      background-position: center;
      height: 350px;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding-left: 50px;
      color: white;
      position: relative;
    }

    .car-banner::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.4); /* dark overlay for readability */
      z-index: 1;
    }

    .banner-text {
      position: relative;
      z-index: 2;
      max-width: 700px;
    }

    .banner-text h1 {
      font-size: 38px;
      font-weight: 800;
      line-height: 1.2;
    }

    .banner-text p {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      .car-banner {
        height: auto;
        padding: 30px;
        text-align: center;
        justify-content: center;
      }

      .banner-text h1 {
        font-size: 28px;
      }

      .banner-text p {
        font-size: 16px;
      }
    }


    .quote-container {
      max-width: 400px;
      margin: auto;
      background: #e3f7f9;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .quote-container h2 {
      margin-bottom: 15px;
      font-size: 1.5rem;
      color: #06224a;
    }

    .form-group {
      display: flex;
      gap: 10px;
    }

    .input, .select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 0.95rem;
    }

    .submit-btn {
      background-color: #1d4ed8;
      color: white;
      padding: 12px;
      width: 100%;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #0d3ec1;
    }

    .contact-card {
      margin-top: 20px;
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?fit=crop&w=800&q=80') no-repeat center center/cover;
      border-radius: 10px;
      padding: 20px;
      color: white;
      position: relative;
      overflow: hidden;
    }

    .contact-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 10px;
    }

    .contact-card-content {
      position: relative;
      z-index: 1;
    }

    .contact-card h3 {
      margin-bottom: 10px;
      font-size: 1.3rem;
    }

    .contact-card p, .contact-card a {
      font-size: 0.95rem;
      display: block;
      margin: 5px 0;
      text-decoration: none;
      color: white;
    }

    .point{
      font-weight: bold;
    }


    /*fnq card css*/

        .faq-card {
      border-radius: 6px;
      border: 1px solid #ddd;
      padding: 1rem;
      margin-bottom: 1rem;
    }

    .accordion-button::after {
      display: none;
    }

    .custom-icon {
      background-color: #f8f9fa;
      border-radius: 50%;
      padding: 0.5rem;
      margin-right: 1rem;
      transition: transform 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .accordion-button.collapsed .custom-icon svg {
      transform: rotate(0deg);
    }

    .accordion-button:not(.collapsed) .custom-icon svg {
      transform: rotate(180deg);
    }

    .accordion-button {
      background-color: transparent;
      color: #00113c;
      font-weight: 500;
      box-shadow: none;
    }
        
  </style>


  <div class="car-banner">
    <div class="banner-text">
      <p>Need a Ride? Searching for reliable way to travel?</p>
      <h1>Choose the Best Car Rent <br>Service Provider in Siliguri</h1>
    </div>
  </div>

  <br><br>





<div class="container text-center">
  <div class="row">
    <div class="col-md-8">
         <h1>Best and Affordable Car Rental Services</h1>
      <p style="color: gray;">Provide Rental Car for North Bengal, Darjeeling, Dooars and All Sikkim</p>
      <p>We have always strived to provide a hassle-free and dependable chauffeur-driven car rental service in Siliguri, West Bengal. Help The Tourists makes it simple to rent a car in Siliguri. We offer you the best in class rental car in Siliguri at the very best rate and discounts to suit our every customer's travel needs.

Help The Tourists is the well-known and dependable car rental service in Siliguri, Dooars, Darjeeling and Sikkim. We offer excellent car rental services, complete with courteous, skilled and licensed chauffeurs and top-notch vehicles operated by knowledgeable, multilingual and kind taxi drivers.

We work hard to provide total client satisfaction at a reasonable cost. If you're a travel enthusiast who loves trying out new places, restaurants and street foods, stop wasting your money on other transit options. To make the most of your trip, use our car hire service. Renting a car from us will allows you to enjoy the journey with your friends and family.

Our car rental service from Siliguri gives you the freedom and flexibility you need to enjoy the drive to the fullest while still being safe and affordable. One of the easiest tasks you can finish in a matter of minutes is making a reservation for our car rental service. If you have any issues or inquiries, kindly get in touch with our car rental service.

The car rental team at Help The Tourists is devoted, knowledgeable about the specifics of renting a car from Siliguri and skilled at navigating challenging routes and highways. Whether you're traveling for business or pleasure, we know that going out of town isn't something you do every day therefore we'll make sure your trip is hassle-free. In terms of "car rental service nearby," we are the best. You may travel with total peace of mind thanks to our reasonably priced car rental service.

Choose from conventional or luxurious rented car for your travel needs. Once you've rented a car with us, we'll take care of all your travel requirements. We want to give you outstanding service at a fair price when you use our enterprise car rental service.

You may rely on us for the "Best Car Rental Service" and a specialized, affordable car rental service to make your trip more comfortable. You'll get your money's worth whether you rent a small car or a big car. Our cars are in excellent operational condition, offering a relaxing and stress-free journey.</p>


    </div>
   
    <div class="col-md-4">
      <div class="quote-container">
  <h2>Get a Free Quote</h2>

  <div class="form-group">
    <input class="input" type="text" placeholder="🚘 Pick-up Location">
    <input class="input" type="text" placeholder="📍 Drop-off Location">
  </div>

  <div class="form-group">
    <input class="input" type="date" placeholder="Travel Date">
    <select class="select">
      <option>Pick-up Time</option>
      <option>8:00AM</option>
      <option>9:00AM</option>
      <option>10:00AM</option>
    </select>
  </div>

  <input class="input" type="text" placeholder="👤 Full Name">
  <input class="input" type="tel" placeholder="📞 Phone No.">
  <input class="input" type="email" placeholder="📧 Email Address">
  <button class="submit-btn">Submit Enquiry</button>

  <div class="contact-card">
    <div class="contact-card-content">
      <h3>Got a Question?</h3>
      <p>Do not hesitate to give us a call. We would be delighted to assist you with your next trip.</p>
      <a href="tel:+919800834444">📞 +91 98008 34444</a>
      <a href="mailto:info@helpthetourists.in">✉️ info@helpthetourists.in</a>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
<br>
<div class="container">
<img src="img/cars1.webp" style="width:-webkit-fill-available;">
  


<br>

<h1>Why Ride with Help The Tourists, Car Hire Company of Siliguri</h1>
<p>The list of other benefits starts with the great cleanliness and sanitized vehicles, the quick pick-up and drop-off process, the choice of vehicles, the excellent value for the money, the well-trained and experienced chauffeurs, the round-the-clock customer support and much more. You will have lots of freedom and flexibility to explore stunning locations and undiscovered secrets when you use Help The Tourists's car rental services.</p>

<ul>
  <li><span class="point">Pick up and drop service:</span> Get picked up at your door, no matter where you are, without paying an additional price. Our driver will come at your address, help you with your luggage and be your travelling companion and knowledgeable tour guide. Without hassles or worry.</li>

  <li><span class="point">Take a break:</span> Every street has a twist in North Bengal and Sikkim. You watch the show while we take care of the extra work for you. With the services of Help The Tourists, you travel to relax.</li>

  <li><span class="point">No liabilities:</span> We will never hold you responsible for any damage the car sustains while you are travelling, in contrast to self-drive car rentals.</li>

  <li><span class="point">Roadtrip expertise:</span> Our drivers are not only skilled drivers. They act as the local tour guides. Since they are proficient in the regional tongues, they may guide you to unusual sights you might not have heard about.</li>

  <li><span class="point">Safe and Sanitized cabs:</span>Our duty is to keep you safe while on the tour. Before and after each ride, we take additional care to thoroughly clean and sanities our cabs. Our cab drivers receive training on the finest practices for driving and personal hygiene.</li>

  <li><span class="point">No security deposits:</span>Travel without worrying about financial loss or not getting your deposit back at the end of the vacation. Help The Tourists wants you to feel peaceful while on vacation. Therefore, we don't request deposits from our clients.</li>
</ul>
<p>What are you waiting for? Take a vacation and discover Nature's magnificent beauty. Call our customer service without a second thought and we'll do everything we can to make sure you have a safe, enjoyable and easy tour and vehicle rental experience.</p>
<br>
<h3>FAQs on Car Rental in Siliguri</h3>
  

<div class="container my-5">
  <div class="accordion" id="faqAccordion1">
    <div class="accordion-item faq-card">
      <h2 class="accordion-header" id="faq1Heading1">
        <button class="accordion-button collapsed d-flex align-items-center" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq1Collapse1"
                aria-expanded="false" aria-controls="faq1Collapse1">
          <div class="custom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00113c" class="bi bi-chevron-down"
                 viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
          </div>
          Is cab service affordable in Siliguri?
        </button>
      </h2>
      <div id="faq1Collapse1" class="accordion-collapse collapse" aria-labelledby="faq1Heading1"
           data-bs-parent="#faqAccordion1">
        <div class="accordion-body">
          Yes, cab services in Siliguri are quite affordable and convenient.
        </div>
      </div>
    </div>

    <!-- Another FAQ item -->
    <div class="accordion-item faq-card">
      <h2 class="accordion-header" id="faq1Heading2">
        <button class="accordion-button collapsed d-flex align-items-center" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq1Collapse2"
                aria-expanded="false" aria-controls="faq1Collapse2">
          <div class="custom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00113c" class="bi bi-chevron-down"
                 viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
          </div>
          What is the best time to visit Sikkim?
        </button>
      </h2>
      <div id="faq1Collapse2" class="accordion-collapse collapse" aria-labelledby="faq1Heading2"
           data-bs-parent="#faqAccordion1">
        <div class="accordion-body">
          The best time to visit Sikkim is from March to May or October to mid-December.
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add more accordions with different IDs if needed -->
<!-- Example: -->
<div class="container my-5">
  <div class="accordion" id="faqAccordion2">
    <div class="accordion-item faq-card">
      <h2 class="accordion-header" id="faq2Heading1">
        <button class="accordion-button collapsed d-flex align-items-center" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq2Collapse1"
                aria-expanded="false" aria-controls="faq2Collapse1">
          <div class="custom-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00113c" class="bi bi-chevron-down"
                 viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
          </div>
          Are there budget hotels in Darjeeling?
        </button>
      </h2>
      <div id="faq2Collapse1" class="accordion-collapse collapse" aria-labelledby="faq2Heading1"
           data-bs-parent="#faqAccordion2">
        <div class="accordion-body">
          Yes, Darjeeling has a wide range of budget hotels that are comfortable and scenic.
        </div>
      </div>
    </div>
  </div>
</div>




  </div>



  <br><br><br><br>
<?php
include 'footer.php';
?>
