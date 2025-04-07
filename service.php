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

    /*temporary*/

    .maintenance-container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      max-width: 480px;
      width: 100%;
          margin-left: 40%;
    margin-top: 4%;
    }

    h1 {
      font-size: 28px;
      margin-bottom: 10px;
      color: #222;
    }

    p {
      color: #555;
      margin-bottom: 30px;
    }

    .btn {
      background-color: #0d6efd;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #084fc7;
    }

    .maintenance-icon {
      font-size: 48px;
      margin-bottom: 20px;
      color: #f39c12;
    }

     
  </style>

  <div class="banner">
   
    Service
    
  </div>

  <div class="maintenance-container">
  <div class="maintenance-icon">🔧</div>
  <h1>We’re Under Maintenance</h1>
  <p>Our website is currently undergoing scheduled maintenance.<br>Please check back soon.</p>
  <a href="index.php" class="btn">Go Back to Homepage</a>
</div>

  
  

<br><br><br><br><br>
<?php
include 'footer.php';
?>

