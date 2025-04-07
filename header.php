<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Must See Darjeeling</title>
    <link rel="icon" type="image/x-icon" href="traveller.png">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!--this is animate css-->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/animate.css">

</head>
<style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
     
    }

    .tabs {
      display: flex;
      flex-wrap: wrap;
      border-bottom: 1px solid #ccc;
      margin-bottom: 20px;
    }

    .tab {
      margin-right: 20px;
      padding-bottom: 8px;
      cursor: pointer;
      color: #666;
    }

    .tab.active {
      color: #007bff;
      border-bottom: 2px solid #007bff;
      font-weight: bold;
    }

    .content {
      display: none;
    }

    .content.active {
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
    }

    .places {
      list-style: none;
      padding: 0;
      flex: 1 1 200px;
      margin-bottom: 20px;
    }

    .places-title {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .places li {
      margin-bottom: 8px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
      .tabs {
        flex-direction: column;
        gap: 10px;
      }

      .tab {
        margin-right: 0;
        padding: 10px 0;
      }

      .content.active {
        flex-direction: column;
        gap: 20px;
      }
    }
  </style>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="traveller.png" alt="Travel Logo" style="width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="destinations.php">Destination</a></li>




                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tour Packages</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item nav-link" href="darjeelingpackages.php">Darjeeling Packages</a></li>
                            <li><a class="dropdown-item nav-link" href="sikkimpackages.php">Sikkim Packages</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="carrent.php">Car Rentals</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

