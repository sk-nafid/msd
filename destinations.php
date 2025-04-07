<?php
include'header.php';
?>


  <style>
 
    .nav1-tabs .nav1-link {
      color: #6c757d;
    }
    .nav1-tabs .nav1-link.active {
      color: #0d6efd;
      font-weight: 500;
      border: none;
      border-bottom: 2px solid #0d6efd;
    }
    .tab-pane h6 {
      font-weight: 600;
      margin-bottom: 0.75rem;
    }
    .tab-pane ul {
      list-style: none;
      padding-left: 0;
    }
    .tab-pane ul li {
      margin-bottom: 0.4rem;
    }
    .album {
      margin-top: 2rem;
    }
    .album img {
      border-radius: 0.5rem;
      width: 100%;
      height: 200px;
      object-fit: cover;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }


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

  </style>
    <div class="banner">
   
    
Destinations

    
  </div>
<br><br>
<div class="container">
  <!-- Nav Tabs -->
  <ul class="nav nav-tabs" id="destinationTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="darjeeling-tab" data-bs-toggle="tab" data-bs-target="#darjeeling" type="button" role="tab">Darjeeling</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="sikkim-tab" data-bs-toggle="tab" data-bs-target="#sikkim" type="button" role="tab">Sikkim</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="dooars-tab" data-bs-toggle="tab" data-bs-target="#dooars" type="button" role="tab">Dooars</button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content mt-4" id="destinationTabsContent">

    <!-- Darjeeling -->
    <div class="tab-pane fade show active" id="darjeeling" role="tabpanel">
      <div class="row">
        <div class="col-md-3">
          <h6>Popular Spots</h6>
          <ul>
            <li>Darjeeling Ropeway</li>
            <li>Tiger Hill</li>
            <li>Batasia Loop</li>
            <li>Tinchuley</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>City Attractions</h6>
          <ul>
            <li>Chowrasta</li>
            <li>Ghoom Monastery</li>
            <li>Happy Valley Tea Estate</li>
            <li>Japanese Peace Pagoda</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>Nature & Culture</h6>
          <ul>
            <li>Himalayan Railway</li>
            <li>Himalayan Mountaineering Institute</li>
            <li>Lloyd’s Botanical Garden</li>
            <li>Mahakal And Kali Temple</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>Other Highlights</h6>
          <ul>
            <li>Observatory Hill View Point</li>
            <li>Padmaja Zoological Park</li>
            <li>Nightingale Park</li>
            <li>Bengal History Museum</li>
          </ul>
        </div>
      </div>
      <div class="album row mt-4">
        <div class="col-md-4 mb-4">
          <img  onload="lazy" src="https://s7ap1.scene7.com/is/image/incredibleindia/happy-valley-tea-estate-darjeeling-west%20bengal-1-hero?qlt=82&ts=1726643578177" alt="Darjeeling">
        </div>
        <div class="col-md-4 mb-4">
          <img onload="lazy"  src="https://hblimg.mmtcdn.com/content/hubble/img/darjeeling/mmt/activities/t_ufs/m_Darjeeling%20Ropeway-1_l_440_587.jpg" alt="Tea Estate">
        </div>
        <div class="col-md-4 mb-4">
          <img  onload="lazy" src="https://static.toiimg.com/thumb/109270392/Tea-garden-in-Darjeeling.jpg?width=1200&height=900" alt="Mountain Train">
        </div>
      </div>
    </div>

    <!-- Sikkim -->
    <div class="tab-pane fade" id="sikkim" role="tabpanel">
      <div class="row">
        <div class="col-md-3">
          <h6>East Sikkim</h6>
          <ul>
            <li>Gangtok</li><li>Aritar</li><li>Zuluk</li><li>Rangpo</li><li>Ranipool</li><li>Kupup Lake</li><li>Ranka Monastery</li><li>Nathang Valley</li><li>Nathula Pass</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>North Sikkim</h6>
          <ul>
            <li>Yumthang Valley</li><li>Lachen</li><li>Chungthang</li><li>Singhik</li><li>Dzongu Valley</li><li>Mangan</li><li>Chopta Valley</li><li>Gurudongmar Lake</li><li>Lachung</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>West Sikkim</h6>
          <ul>
            <li>Pelling</li><li>Yuksom</li><li>Geyzing</li><li>Yangtey</li><li>Dzongri</li><li>Goecha La</li><li>Rinchenpong</li><li>Darap Village</li><li>Dentam Valley</li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>South Sikkim</h6>
          <ul>
            <li>Namchi</li><li>Borong</li><li>Ravangla</li><li>Maenam Hill</li><li>Tendong Hill</li><li>Temi Tea Garden</li>
          </ul>
        </div>
      </div>
      <div class="album row mt-4">
        <div class="col-md-4 mb-4">
          <img onload="lazy" src="https://t4.ftcdn.net/jpg/02/24/29/81/360_F_224298196_zOmmoV8IKFZSszfQINgSAd3JIzBGBWi0.jpg" alt="Sikkim View">
        </div>
        <div class="col-md-4 mb-4">
          <img onload="lazy" src="https://images.unsplash.com/photo-1613339027986-b94d85708995?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8c2lra2ltfGVufDB8fDB8fHww" alt="Sikkim Nature">
        </div>
        <div class="col-md-4 mb-4">
          <img onload="lazy" src="https://t4.ftcdn.net/jpg/04/33/87/03/360_F_433870399_KjgsMvCuPaANcPZXM0Ny4wAD4UWNKqPV.jpg" alt="Sikkim Culture">
        </div>
      </div>
    </div>

    <!-- Dooars -->
    <div class="tab-pane fade" id="dooars" role="tabpanel">
      <div class="row">
        <div class="col-md-6">
          <h6>Places to Visit</h6>
          <ul>
            <li>Chapramari Wildlife Sanctuary</li>
            <li>Gorumara National Park</li>
            <li>Jaldapara National Park</li>
            <li>Buxa Tiger Reserve</li>
            <li>Chilapata Forest</li>
            <li>Rocky Island</li>
            <li>Suntalekhola</li>
            <li>Jayanti River</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h6>More Attractions</h6>
          <ul>
            <li>Murti River</li>
            <li>Coochbehar</li>
            <li>Gajoldoba</li>
            <li>Batabari</li>
            <li>Lataguri</li>
            <li>Samsing</li>
            <li>Chalsa</li>
          </ul>
        </div>
      </div>
      <div class="album row mt-4">
        <div class="col-md-4 mb-4">
          <img onload="lazy" src="https://nomadicweekends.com/blog/wp-content/uploads/2019/03/Samsing-Dooars-in-Monsoon.jpg" alt="Dooars Forest">
        </div>
        <div class="col-md-4 mb-4">
          <img onload="lazy" src="https://t3.ftcdn.net/jpg/09/29/93/60/360_F_929936043_mtegnYQJbKv5xns8YQouKVDnQwkkDNjw.jpg" alt="Dooars Greenery">
        </div>
        <div class="col-md-4 mb-4">
          <img onload="lazy" src="https://t3.ftcdn.net/jpg/04/68/49/70/360_F_468497019_3i9IfCfDut05TxwVxyv1hhyg6h6Uqahz.jpg" alt="Dooars River">
        </div>
      </div>
    </div>
  </div>
  </div>

  <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




<br><br><br><br>
<?php
include'footer.php';
?>