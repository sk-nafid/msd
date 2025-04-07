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
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .bdy {
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
    }

    .contact-section {
      background: url('img/slider2.jpg') no-repeat center center/cover;
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .contact-overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }

    .contact-container {
      position: relative;
      z-index: 2;
      display: flex;
      gap: 40px;
      color: #fff;
      max-width: 1200px;
      width: 100%;
      padding: 40px;
    }

    .contact-info {
      flex: 1;
    }

    .contact-info h2 {
      font-size: 1.8rem;
      color: #4d7cfe;
      margin-bottom: 20px;
    }

    .contact-info p {
      line-height: 1.8;
      color: #ccc;
    }

    .contact-form {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 12px;
      border: 1px solid #ccc;
      background-color: transparent;
      color: white;
      border-radius: 4px;
      outline: none;
    }

    .contact-form textarea {
      resize: vertical;
      min-height: 100px;
    }

    .contact-form button {
      padding: 12px 20px;
      background-color: #4d7cfe;
      color: white;
      border: none;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .contact-form button:hover {
      background-color: #3759c7;
    }

    @media (max-width: 768px) {
      .contact-container {
        flex-direction: column;
        gap: 30px;
      }
    }

  

   
  </style>

  
 
  <div class="bdy">

<div class="contact-section">
  <div class="contact-overlay"></div>
  <div class="contact-container">
    <div class="contact-info">
      <h2>Connect With Us for Your Next Trip</h2>
      <p>
        Help The Tourists Tour & Travel Company is always ready to assist you in planning your next trip. 
        Whether you have a clear idea of your dream destination or need some assistance, our travel experts are here to help. 
        Fill out our contact form and tell us how we can assist you. Our team will respond promptly with personalized recommendations 
        and expert advice to create your perfect itinerary.
        Don’t pass up the chance to create memories that will last a lifetime. Contact us today to begin planning your next tour!
      </p>
    </div>
    <form class="contact-form">
      <input type="text" placeholder="Full Name" required>
      <input type="tel" placeholder="Phone No." required>
      <input type="email" placeholder="Email" required>
      <input type="text" placeholder="Subject" required>
      <textarea placeholder="Your Message" required></textarea>
      <button type="submit">Send a Message →</button>
    </form>
  </div>
</div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <p>Address</p>
      <h4>Flynetic Holidays Pvt Ltd
        <br>

       Sree Ma Sarani, Haidar Para,
       <br>

       Siliguri, Darjeeling,
       <br>

       West Bengal 734001</h4>
    </div>
    <div class="col-sm">
     <p>Contact No.</p>

     <h4>+(91) 98008 34444
        <br>
         <br>
      +(91) 78649 84869  
       </h4>
    </div>
    <div class="col-sm">
     <p>Email Address</p>
     <h4>info@msd.in
        <br>
         <br>
      reservation@msd.in
       </h4>
    </div>
  </div>
</div>





<br><br><br><br><br>
<?php
include 'footer.php';
?>

