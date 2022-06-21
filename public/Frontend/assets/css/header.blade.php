<div class="body">
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" tab-index="-1" id="sidebar" aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <a href="{{route('index')}}">
                <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..." width="100" class="logo1">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="row justify-content-center">

                <div class="input-group mt-3 mb-3">
                    <form action="{{route('search')}}" method="get">
                        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary btn-lg btn2" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora laudantium ratione commodi quas voluptates enim asperiores. Unde soluta minima eligendi.
            </p>
            <a href="#">Go there</a>

           

            <div class="form-check form-switch">
                <label class="form-check-label lite-mode" id="mode_indicator" for="darkSwitch">Dark Mode</label>
                <input class="form-check-input ml-3 mode-switch" onclick="myFunction()" type="checkbox" id="darkSwitch">
            </div>

        </div>
    </div>
    <style>
        .icon-hamburger_with_search{
            font-weight: bold !important;
        }
        .icon-hamburger_with_search, .notification-icon, .setting-icon{
            color: #fff;
        }
    </style>
    <!-- offcanvas -->
    <div class="container-fluid">
        <div class="row d-flex align-items-center bg-dark">
            <div class="col-md-1">
                <a href="#sidebar" class="d-block mt-2 align-center" data-bs-toggle="offcanvas" role="button" aria-controlls="sidebar">
                    <i class="  fas  h3 icon-hamburger_with_search"></i>

                </a>
            </div>

            <div class=" col-md-2    ">
                <div class="div ml-4">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..." class="logo">
                    </a>
                </div>
            </div>

            <div class="col-4 col-md-4 top-searchbar-row-responsive">
                <div class="container container2 justify-content-center">
                    <div class="row justify-content-center ">
            
                        <div class="   searchZ">
                            <form action="{{route('search')}}" method="GET">
                                @csrf
                                <div class="input-group ">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"> <i class="fa fa-search"></i></span>
                        </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
            @if(Auth::user())
            <div class="col-md-1  ">
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="btn btn-danger">{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>

            <!-- Notification -->
            <div class="col-md-1 notification-row">
                <div class="dropdown ">
                    <button class="btn bell " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="Dropstart">
                        <i class="far fa-bell notification-icon "></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                        <li><a class="dropdown-item" href="#">Lorem ipsum dolor sit amet.</a></li>
                        <hr>
                    </ul>
                </div>
            </div>
            <!-- Settings -->
            <div class="col-md-1 setting-row ">
                <div class="dropdown  ">
                    <button class="btn setting" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog setting-icon"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <!-- Button trigger modal -->
            <div class="col-md-2   ">
                <button type="button" id="post_your_ad" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Post your Add
                </button>


            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content post-advertise-modal">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Service Item</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
  
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/service_item.css')}}">       -->
  <div class="row mt-2   service-group-row">
                        <div class="  col-small mx-2 pb-3 pt-3 pb-3 main-service text-center " onclick="location.href='{{route('room')}}'">
                                <span class="icon-room service_item "></span>
                                    <br>
                                <span class="service_item_name"> Room</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('flat')}}'">
                                <span class="icon-flat service_item"></span>
                                    <br>
                                <span class="service_item_name"> Flat</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('building')}}'">
                                <span class="icon-building service_item"></span>
                                    <br>
                                <span class="service_item_name"> Building</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('parking')}}'">
                                <span class="icon-parking service_item"></span>
                                    <br>
                                <span class="service_item_name"> Parking Spot</span>
                        </div>
                    </div>
                    <div class="row mt-2 service-group-row">
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('hotel')}}'">
                                <span class="icon-hotel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hotel</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('hostel')}}'">
                                <span class="icon-hostel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hostel</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('resort')}}'">
                                <span class="icon-resort service_item"></span>
                                    <br>
                                <span class="service_item_name"> Resort</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('office')}}'">
                                <span class="icon-office service_item"></span>
                                    <br>
                                <span class="service_item_name"> Office</span>
                        </div>
                    </div>
                    <div class="row mt-2 service-group-row">
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('shop')}}'">
                                <span class="icon-shop service_item"></span>
                                    <br>
                                <span class="service_item_name"> Shop</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('community_hall')}}'">
                                <span class="icon-community_hall service_item"></span>
                                    <br>
                                <span class="service_item_name">  Community  Hall</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('factory')}}'">
                                <span class="icon-factory service_item"></span>
                                    <br>
                                <span class="service_item_name">  Factory</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('warehouse')}}'">
                                <span class="icon-warehouse service_item"></span>
                                    <br>
                                <span class="service_item_name">  Warehouse</span>
                        </div>

                    </div>

                    <div class="row mt-2 service-group-row">
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('playground')}}'">
                                <span class="icon-playground service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Play Ground</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center"  onclick="location.href='{{route('shooting_spot')}}'">
                                <span class="icon-shooting_spot service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Shooting Spot</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center"  onclick="location.href='{{route('exhibition_center')}}'">
                                <span class="icon-exhibition_center service_item"></span>
                                     <br>
                                <span class="service_item_name">  Exhibition Center</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('rooftop')}}'">
                                <span class="icon-rooftop service_item"></span>
                                    <br>
                                <span class="service_item_name">  Rooftop</span>
                        </div>


                    </div>

                    <div class="row mt-2 service-group-row">
                    <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('bilboard')}}'">
                                <span class="icon-bilboard service_item"></span>
                                    <br>
                                <span class="service_item_name"> Bilboard</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('land')}}'">
                                <span class="icon-land service_item"></span>
                                    <br>
                                <span class="service_item_name">  Land</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('pond')}}'">
                                <span class="icon-pond service_item"></span>
                                    <br>
                                <span class="service_item_name">  Pond</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('swimming_pool')}}'">
                                <span class="icon-swimming_pool service_item"></span>
                                    <br>
                                <span class="service_item_name">   Swimming Pool</span>
                        </div>
                    </div>


                    <div class="row mt-2 service-group-row">
                    <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('picnic_spot')}}'">
                                <span class="icon-picnic-spot service_item"></span>
                                    <br>
                                <span class="service_item_name"> Picnic Spot</span>
                        </div>
                        <div class="  col-small mx-2 pb-3 pt-3 main-service text-center" onclick="location.href='{{route('ghat')}}'">
                                <span class="icon-ghat service_item"></span>
                                    <br>
                                <span class="service_item_name"> Ghat</span>
                        </div>

</div>   
                           

                        </div>

                    </div>
                </div>
            </div>
            @else

            @endif

        </div>

    </div>
    <hr>



    <script>
        //  toggle dark mode button text
        function myFunction() {
            var x = document.getElementById("mode_indicator");
            if (x.innerHTML === "Dark Mode") {
                x.innerHTML = "Lite Mode";


            } else if (x.innerHTML === "Lite Mode") {
                x.innerHTML = "Dark Mode";
            }
        }
        var darkSwitch = document.getElementById("darkSwitch");
        window.onload = function() {
            if (darkSwitch) {
                initTheme();
                darkSwitch.addEventListener("change", function() {
                    resetTheme();
                });
            }
        };



        /**
         * Summary: function that adds or removes the attribute 'data-theme' depending if
         * the switch is 'on' or 'off'.
         *
         * Description: initTheme is a function that uses localStorage from JavaScript DOM,
         * to store the value of the HTML switch. If the switch was already switched to
         * 'on' it will set an HTML attribute to the body named: 'data-theme' to a 'dark'
         * value. If it is the first time opening the page, or if the switch was off the
         * 'data-theme' attribute will not be set.
         * @return {void}
         */
        function initTheme() {
            var darkThemeSelected =
                localStorage.getItem("darkSwitch") !== null &&
                localStorage.getItem("darkSwitch") === "dark";
            darkSwitch.checked = darkThemeSelected;
            darkThemeSelected
                ?
                document.body.setAttribute("data-theme", "dark") :
                document.body.removeAttribute("data-theme");
        }

        /**
         * Summary: resetTheme checks if the switch is 'on' or 'off' and if it is toggled
         * on it will set the HTML attribute 'data-theme' to dark so the dark-theme CSS is
         * applied.
         * @return {void}
         */
        function resetTheme() {
            if (darkSwitch.checked) {
                document.body.setAttribute("data-theme", "dark");
                localStorage.setItem("darkSwitch", "dark");
            } else {
                document.body.removeAttribute("data-theme");
                localStorage.removeItem("darkSwitch");
            }
        }


        function showContent() {
            document.body.style.visibility = 'visible';
            document.body.style.opacity = 1;
        }

        window.addEventListener('DOMContentLoaded', function() {
            initTheme();
            showContent();
        });
    </script>




</div>
