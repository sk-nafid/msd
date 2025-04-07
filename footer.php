<style>
    .contact-box {
      max-width: -webkit-fill-available;
      background: #fff;
      border-radius: 8px;
      overflow: hidden;
      display: flex;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .contact-box input {
      border: none;
      outline: none;
      padding: 1rem;
      flex: 1;
      font-size: 1rem;
    }

    .contact-box button {
      background: linear-gradient(to right, #26a0da, #314755);
      color: #fff;
      font-weight: 600;
      padding: 0 2rem;
      border: none;
      transition: 0.3s ease;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
    }

    .contact-box button:hover {
      opacity: 0.9;
    }

    ::placeholder {
      color: #999;
      font-weight: 500;
    }
  </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://kit.fontawesome.com/57fbf7e992.js" crossorigin="anonymous"></script>

<!--our aos data-->
<script src="js/aos.js"></script>
<script src="js/script.js"></script>
<script>
    AOS.init({
        offset: 300,
        duration: 2000,
    });
</script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,

        dots: true,

        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<div class="bg-light-footer"> 
<footer class="footer" >


<div class="container text-center">
<div class="row">
<div class="col" style=" border-right: solid #e7dede;
">
<img src="traveller.png" alt="Travel Logo"style="height: 155px;margin-top: 20px;" >

<p style="    text-align: left;font-weight: bold;color: white;">

must see darjeeling is dedicated to providing travelers with the most affordable, high-quality travel options. 
We are passionate about travel, offering high-touch services to help travelers with their specific need while
also sharing the delights of leisure travel. Every day, our team of passionate,customer-focused travel experts
shows their commitment to providing you with a hassle-free travel experience.
</p>
<br>
<br>

<p style="float: left;color=white;color: white;font-weight: bold;">Follow us on social media</p>
<br>
<div style="place-self: flex-start;">
    <button type="button" class="btn btn-outline-primary"><i class="fa-brands fa-facebook"></i> </button>
  
<button type="button" class="btn btn-outline-primary"><i class="fa-brands fa-linkedin "></i>  </button> 
<button type="button" class="btn btn-outline-primary"><i class="fa-brands fa-twitter"></i> </button>
<button type="button" class="btn btn-outline-danger"><i class="fa-brands fa-pinterest"></i> </button>
</div>
</div>




<div class="col">
    <div style="float:left;">
<p style="padding-top: 36px;" class="foo"> Request a Call-back
</p>
<br>


<form class="contact-box">
    <input type="text" placeholder="Your Contact no." required>
    <button type="submit">Submit Now</button>
  </form>
</div>
<br>
<br>
<div class="container ">
  <div class="row" style="margin-top: 120px;">
    <div class="col">
      <p class="foo">Tour Consultation</p>
      
      <p class="foo"> +(91) 98008 34444</p>
    </div>
    <div class="col">
      <p class="foo">Customer Care</p>
      
      <p class="foo">  +(91) 78649 84869</p>
    </div>
  </div>
  <br>


  <div class="row" >
    <div class="col">
      <p class="foo">Contact us via E-mail</p>
      
      <p class="foo">  info@helpthetourists.in</p>
    </div>
    <div class="col">
      <p class="foo">Contact us via E-mail</p>
      
      <p class="foo">   support@helpthetourists.in</p>
    </div>
  </div>
  <br>


  <div class="row" >
    <div class="col">
      <p class="foo">Address</p>
      
      <p class="foo">  Help The Tourists(HO)
Sree Ma Sarani, Haidar Para,
Siliguri, Darjeeling,
West Bengal 734001</p>
    </div>
    <div class="col">
      <p class="foo">Address</p>
      
      <p class="foo">   Help The Tourists (Delhi)
M-12, sector-11,
Noida, Pin 201301
Near Metro Heart Hospital Noida</p>
    </div>
  </div>

</div>



</div>


    
</div>
</div>



<div style="border-top: solid white; border-bottom: solid white;">
    <br>
    <div class="container ">
  <div class="row">
    <div class="col-md-2"> <a href="privacypolicy.php" type="button" class="btn btn-outline-dark custbtn foo">Privacy Policy</a></div>
    <div class="col-md-2"> <a href="termsof.php" type="button" class="btn btn-outline-dark custbtn foo">Terms of</a> </div>
    <div class="col-md-2"> <a href="service.php" type="button" class="btn btn-outline-dark custbtn foo">Service</a> </div>
    <div class="col-md-2"> <a href="cancellationpolicy.php" type="button" class="btn btn-outline-dark custbtn foo">Cancellation Policy</a></div>
    <div class="col-md-2"> <a href="refundpolicy.php" type="button" class="btn btn-outline-dark custbtn foo">Refund Policy</a></div>
    <div class="col-md-2"> <a href="contactus.php" type="button" class="btn btn-outline-dark custbtn foo">Contact us</a></div>
  </div>
</div>
<br>
</div>

<br>
<div class="container ">
  <div class="row">
    <div class="col-sm-8 foo">© 2024 must see darjeeling - All Rights Reserved</div>
    <br>
    <div class="col-sm-4 foo" style="text-align: -webkit-right;">A unit of Flynetic Holidays Pvt Ltd.</div>
  </div>

<br>
</footer>
</div>
    
    
        
        
       
    
    






</body>

</html>