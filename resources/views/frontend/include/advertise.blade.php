    <style>
      /* .mt-ad {
            margin-top: 9.3rem!important;
        } */
    </style>

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/slick-slider.css')}}">

    <!--Slick CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/slick-theme.css')}}" />

    <script type="text/javascript" src="{{asset('Frontend/assets/js/slick.js')}}"></script>
    <div>
      <!-- Advertise Section Start -->
      <section class="   mt-ad ad-card-body ">
      
              <div class="advertise-slider  mb-4" id="advertise-slider">
                <div class="card shadow">
                  <img src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__340.jpg" alt="..." width="100" class="logo1">

                  <div class="card-body ad advertise-card">
                    <h5 class="card-title">1st Advertise</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card shadow">
                  <img src="https://www.housedecorin.com/wp-content/uploads/2021/08/1568648112267.jpeg" alt="..." width="100" class="logo1">

                  <div class="card-body ad">
                    <h5 class="card-title">2nd Advertise</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card shadow">
                  <img src="https://cdn.nazmiyalantiquerugs.com/wp-content/uploads/2020/05/queen-anne-victorian-house.jpg" alt="..." width="100" class="logo1">

                  <div class="card-body ad">
                    <h5 class="card-title">2nd Advertise</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div> 
      </section>
      <!-- Advertise Section End -->
    </div>



    <script type="text/Javascript">
      $(document).ready(function(){
    $('.advertise-slider').slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 5000,
    })

    
  // $('.advertise-slider').slick({
  //     infinite: true,
  //     lazyLoad: 'ondemand',
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     autoplay: true,
  //     autoplaySpeed: 10000 
    

  //     });

  });
</script>