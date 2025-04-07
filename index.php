
<?php
include 'header.php';
?>

    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/slider1.jpg" class="d-block w-100 slide-height" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="slideHead">Help The Tourists</h1>
                    <p>Discover amazing places with us.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/slider2.jpg" class="d-block w-100 slide-height" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Beautiful Destinations</h1>
                    <p>Experience the beauty of nature.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/slider3.png" class="d-block w-100 slide-height" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Affordable Packages</h1>
                    <p>Travel without breaking the bank.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev rounded-circle bg-off-white" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
        <button class="carousel-control-next rounded-circle bg-off-white" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>





    <!-- Search Section -->
    <div class="container my-4">
        <div class="p-4 bg-light rounded shadow">
            <form class="row g-3">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Destination">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-2">

                    <div class="dropdown nav-item" >
                        <div class="nav-link dropdown-toggle qnt" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        <span id="adultSummary">0</span> Adult - <span id="childSummary">0</span> Child 
                    </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            <div class="quantity-input">
                       Adult  <a class="btn btn-outline-primary" type="button" id="adultDecreaseBtn" href="#" style="border-radius: 40px;height: 34px;margin-left: 13px;">-</a>
                       <input type="number" class="" id="adultQuantity" value="0" min="0" readonly />
                       <a class="btn btn-outline-primary" type="button" id="adultIncreaseBtn" href="#" style="border-radius: 40px;height: 36px; width:36px; margin-right: 20px;">+</a>
                     </div>
                     <br>
                  

                   <!-- Child Quantity Input -->
                  

                     
                     <div class="quantity-input">
                       Child <a class="btn btn-outline-primary" type="button" id="childDecreaseBtn" href="#" style="border-radius: 40px;height: 34px;margin-left: 13px;">-</a>
                       <input type="number" class="" id="childQuantity" value="0" min="0" readonly />
                       <a class="btn btn-outline-primary" type="button" id="childIncreaseBtn" href="#" style="border-radius: 40px;height: 36px; width:36px; margin-left: 4px;">+</a>
                     </div>
                        </ul>
                    </div>

                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary w-100">Search</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Featured Boxes -->
    <div class="container" data-aos="zoom-in-up">
        <div class="row g-4">
            <div class="col-md-4 ">
                <div class="card box-grid">
                    <img src="./img/box/box1.webp" class="card-img-top" alt="Feature 1">
                    <div class="card-body">
                        <h5 class="card-title">Beautiful Destinations</h5>
                        <p class="card-text">Explore breathtaking destinations with ease.</p>
                        <a href="#" class="btn btn-primary">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card box-grid">
                    <img src="./img/box/box2.webp" class="card-img-top" alt="Feature 2">
                    <div class="card-body">
                        <h5 class="card-title">Affordable Packages</h5>
                        <p class="card-text">Choose from a variety of budget-friendly packages.</p>
                        <a href="#" class="btn btn-primary">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card box-grid">
                    <img src="./img/box/box3.webp" class="card-img-top" alt="Feature 3">
                    <div class="card-body">
                        <h5 class="card-title">Car Rentals</h5>
                        <p class="card-text">Get the best car rental deals for your trip.</p>
                        <a href="#" class="btn btn-primary">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="why-choose-us" class="container my-5" data-aos="zoom-in">
        <h2 class="text-center mb-4 wow fadeInUp" data-wow-delay="0.3s">Why Choose Us</h2>
        <p class="text-center mb-5 wow fadeInUp" data-wow-delay="0.6s">
            It makes a huge difference when you plan your trip with one of our knowledgeable travel advisers, who will help you have memorable and pleasant vacations. We guarantee that every vacation will be extraordinary because of our first-hand knowledge, ability
            to precisely customize every aspect of your trip, and access to the best brands at the best pricing.
        </p>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="0.9s">
                <div class="card shadow-sm border-0">
                    <img src="./img/whychoose/1.webp" class="card-img-top mx-auto mt-4" alt="Logo 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Trusted Guides</h5>
                        <p class="card-text">Our experienced and professional guides ensure a safe and enjoyable journey.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="1.2s">
                <div class="card shadow-sm border-0">
                    <img src="./img/whychoose/2.webp" class="card-img-top mx-auto mt-4" alt="Logo 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Best Pricing</h5>
                        <p class="card-text">We offer the most competitive prices without compromising on quality.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="1.5s">
                <div class="card shadow-sm border-0">
                    <img src="./img/whychoose/3.webp" class="card-img-top mx-auto mt-4" alt="Logo 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">24/7 Support</h5>
                        <p class="card-text">Our dedicated support team is available round the clock to assist you.</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="1.8s">
                <div class="card shadow-sm border-0">
                    <img src="./img/whychoose/24.webp" class="card-img-top mx-auto mt-4" alt="Logo 4">
                    <div class="card-body text-center">
                        <h5 class="card-title">Customizable Packages</h5>
                        <p class="card-text">We offer flexible and customizable packages to suit your preferences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <center>
            <h1>Top Destination</h1>

            <h5 style="color: #361e1e96;">Theas popular destinations have a lot to offer</h5>

        </center>

    </section>
    <br><br>


    <!--owl carousel-->
    <div class="container"> 
        <div class="owl-carousel owl-theme" data-aos="zoom-in">

            <div class="item parentContainer">

                <img src="./img/slider5.webp" alt="" class="destination">
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>
            <div class="item"><img src="./img/slider6.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider7.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider8.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider9.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider10.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider11.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider12.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider13.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

            <div class="item"><img src="./img/slider14.webp" alt="" class="destination">
                <h4></h4>
                <div class="overlay">
                    <h4 class="title">Explore</h4>
                    <p class="description">More details go here.</p>
                </div>
            </div>

        </div>




        <br><br>
        <h3 class="tour">popular Tour Packages</h3>
        <br>
        <br>


        <div  class="container mx-auto" data-aos="zoom-in">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./img/slider15.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Darjeeling and Sikkim trip with Family </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem; margin-top: 10px;">
                        <img src="./img/slider16.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Darjeeling and Sikkim trip with Family</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem; margin-top: 10px;">
                        <img src="./img/slider17.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Gangtok and offbeat Darjeeling vai mirik</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem; margin-top: 10px;">
                        <img src="./img/slider18.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Darjeeling Family packages for 3 Days</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;margin-top: 10px;">
                        <img src="./img/slider19.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Some quick example text to build on the card title and make up the bulk of the card's content</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;margin-top: 10px;">
                        <img src="./img/slider20.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary ">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;margin-top: 10px;">
                        <img src="./img/slider22.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;margin-top: 10px;">
                        <img src="./img/slider23.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text-item">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <h2 class="pic">Popular Car Hire</h2>
            <h4 class="phone">Embrace Convenience with Car Rental Services of Help The Tourists for Your Tour of Sikkim, Darjeeling or Doors. Help The Tourists is here to enhance your travel experience and make your journey hassle-free. Whether you're exploring the vibrant
                streets of Sikkim, immersing in the charm of Darjeeling, or venturing into the scenic routes of the Doors region, our car rental services provide the perfect solution. Enjoy the flexibility to adapt your travel plans, stop at captivating
                attractions, and take spontaneous detours. Embrace the convenience and freedom that car hire brings to your unforgettable tour</h4>
            <br>
            <br>
        </div>

        <div class="container text-center" data-aos="zoom-in">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;margin-top: 10px;">
  <img src="./img/car1.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">WAGNR - SWIFT - SIMILR</p>
    <p class="ac">Hatachback (Ac / NoN-Ac)</p>
    <p class="person" style="float: left;">🤵 4 person </p>
    <p class="luggage" style="float: right;">🧳 2 luggage</p>
  </div>
</div>
    </div>


    <div class="col">
      <div class="card" style="width: 18rem;margin-top: 10px;">
  <img src="./img/car2.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">DZIRE - ETEOS - SIMILR</p>
     <p class="ac">Sedan (Ac / NoN-Ac)</p>
    <p class="person" style="float: left;">🤵 4 person </p>
    <p class="luggage" style="float: right;">🧳 2 luggage</p>
  </div>
</div>
    </div>


    <div class="col">
      <div class="card" style="width: 18rem;margin-top: 10px;">
  <img src="./img/car3.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">SUMO - bolero - maxx - SIMILR</p>
     <p class="ac">Standard (Ac / NoN-Ac)</p>
    <p class="person" style="float: left;">🤵 8 person </p>
    <p class="luggage" style="float: right;">🧳 2 luggage</p>
  </div>
</div>
    </div>


    <div class="col">
      <div class="card" style="width: 18rem;margin-top: 10px;">
  <img src="./img/car4.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">INOVA - XYLO- SIMILR</p>
     <p class="ac">Luxury (Ac / NoN-Ac)</p>
    <p class="person" style="float: left;">🤵 7 person </p>
    <p class="luggage" style="float: right;">🧳 3 luggage</p>
  </div>
</div>
    </div>
  </div>
</div>
<br>
<br>
<div style="border-top: solid gray;width: auto;" class="container">
<input type="button" class="btn btn-primary" value="Hire a Car Now!" style="
    margin-top: 15px;float: right;">   
</div>



     <br><br><br><br>


<?php
include 'footer.php';
?>