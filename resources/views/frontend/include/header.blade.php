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

                <div class="input-group mt-3 mb-3">
                    <form action="{{route('search')}}" method="get" class="d-flex my-2">
                        <input class="form-control" type="search" name="query" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary btn-lg btn2 btn-search-offcanvas" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            <div class="list-group">
                <a href="{{route('package')}}" class="list-group-item list-group-item-action " aria-current="true">
                Package Information
                </a>
                <a href="#" class="list-group-item list-group-item-action">My Shortlist</a> 
            </div> 

           
                <!-- old version -->
            <!-- <div class="form-check form-switch">
                <label class="form-check-label lite-mode" id="mode_indicator" for="darkSwitch">Dark Mode</label>
                <input class="form-check-input ml-3 mode-switch" onclick="myFunction()" type="checkbox" id="darkSwitch">
            </div> -->

            <div class="form-check form-switch d-flex align-items-center mt-3">
                <label class="form-check-label lite-mode" id="mode_indicator" for="liteSwitch">Lite Mode</label>
                <input class="form-check-input ml-3 mode-switch" onclick="myFunction()" type="checkbox" id="liteSwitch">
            </div>


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
    var liteSwitch = document.getElementById("liteSwitch");
    window.onload = function() {
        if (liteSwitch) {
            initTheme();
            liteSwitch.addEventListener("change", function() {
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
        var liteThemeSelected =
            localStorage.getItem("liteSwitch") !== null &&
            localStorage.getItem("liteSwitch") === "lite";
        liteSwitch.checked = liteThemeSelected;
        liteThemeSelected
            ?
            document.body.setAttribute("data-theme", "lite") :
            document.body.removeAttribute("data-theme");
    }

    /**
     * Summary: resetTheme checks if the switch is 'on' or 'off' and if it is toggled
     * on it will set the HTML attribute 'data-theme' to dark so the dark-theme CSS is
     * applied.
     * @return {void}
     */
    function resetTheme() {
        if (liteSwitch.checked) {
            document.body.setAttribute("data-theme", "lite");
            localStorage.setItem("liteSwitch", "lite");
        } 
        else {
            document.body.removeAttribute("data-theme");
            localStorage.removeItem("liteSwitch");
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
    <div class=" container-fluid">
        <div class="  row px-4 px-xs align-items-center bg-dark  justify-content-lg-between justify-content-md-between justify-content-sm-between  justify-content-xs-between">
            
                <a href="#sidebar" class="col-lg-1 col-md-1 col-sm-1 col-1   mt-2  " data-bs-toggle="offcanvas" role="button" aria-controlls="sidebar">
                    <i class="  fas  h3 icon-hamburger_with_search"></i>

                </a> 
                <div class="col-lg-2 col-md-2 col-sm-3 col-3">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('Frontend/assets/img/header/toletx_logo.png')}}" alt="..." class="logo">
                    </a>
                </div>   
                        <div class="col-lg-4 col-md-3 col-sm-3  searchZ">
                            <form action="{{route('search')}}" method="GET">
                                @csrf
                                <div class="input-group ">
                        <input name="query" type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"> <i class="fa fa-search"></i></span>
                        </div>
                            </form>
  
                </div> 
            @if(Auth::user()) 
                <div class="col-lg-1  col-md-2 col-sm-2 col-2 nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="btn btn-danger btnr">{{ Auth::user()->name }}</span>
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

            <!-- Notification --> 
                <div class="col-lg-1  col-md-1 col-sm-1 col-1 dropdown pl-2 ">
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
            <!-- Settings --> 
                <div class="col-lg-1  col-md-1 col-sm-1 col-1 dropdown pl-0 ">
                    <button class="btn setting" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-cog setting-icon"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{route('profile')}}">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Privacy</a></li>
                    </ul>
                </div> 
            <!-- Button trigger modal --> 
            <div class="col-lg-2  col-md-2 col-sm-1 col-2 post">
                <button type="button" id="post_your_ad" class=" btn btn-primary btnr" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i>
                    </button> 
            </div>
                 
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content  post-modal">
                        <div class="modal-header text-center">
                            <h5 class="modal-title w-100" id="exampleModalLabel">Choose a Service</h5>
                            <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                            </button>
                       
                        </div>
                        <div class="modal-body">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('Frontend/assets/css/service_item.css')}}">       -->
  <div class="row mt-2   service-group-row">
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center " onclick="location.href='{{route('room')}}'">
                                <span class="icon-room service_item "></span>
                                    <br>
                                <span class="service_item_name"> Room</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('flat')}}'">
                                <span class="icon-flat service_item"></span>
                                    <br>
                                <span class="service_item_name"> Flat</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('building')}}'">
                                <span class="icon-building service_item"></span>
                                    <br>
                                <span class="service_item_name"> Building</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('parking')}}'">
                                <span class="icon-garage service_item"></span>
                                    <br>
                                <span class="service_item_name"> Garage</span>
                        </div>
                    
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('hotel')}}'">
                                <span class="icon-hotel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hotel</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('hostel')}}'">
                                <span class="icon-hostel service_item"></span>
                                    <br>
                                <span class="service_item_name"> Hostel</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('resort')}}'">
                                <span class="icon-resort service_item"></span>
                                    <br>
                                <span class="service_item_name"> Resort</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('office')}}'">
                                <span class="icon-office service_item"></span>
                                    <br>
                                <span class="service_item_name"> Office</span>
                        </div>
                    
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('shop')}}'">
                                <span class="icon-shop service_item"></span>
                                    <br>
                                <span class="service_item_name"> Shop</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('community_hall')}}'">
                                <span class="icon-community_hall service_item"></span>
                                    <br>
                                <span class="service_item_name">  Community  Hall</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('factory')}}'">
                                <span class="icon-factory service_item"></span>
                                    <br>
                                <span class="service_item_name">  Factory</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('warehouse')}}'">
                                <span class="icon-warehouse service_item"></span>
                                    <br>
                                <span class="service_item_name">  Warehouse</span>
                        </div>
 
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('playground')}}'">
                                <span class="icon-playground service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Play Ground</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center"  onclick="location.href='{{route('shooting_spot')}}'">
                                <span class="icon-shooting_spot service_item" ></span>
                                    <br>
                                <span class="service_item_name"> Shooting Spot</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center"  onclick="location.href='{{route('exhibition_center')}}'">
                                <span class="icon-exhibition_center service_item"></span>
                                     <br>
                                <span class="service_item_name">  Exhibition Center</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('rooftop')}}'">
                                <span class="icon-rooftop service_item"></span>
                                    <br>
                                <span class="service_item_name">  Rooftop</span>
                        </div>


                   
                    <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('bilboard')}}'">
                                <span class="icon-bilboard service_item"></span>
                                    <br>
                                <span class="service_item_name"> Bilboard</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('land')}}'">
                                <span class="icon-land service_item"></span>
                                    <br>
                                <span class="service_item_name">  Land</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('pond')}}'">
                                <span class="icon-pond service_item"></span>
                                    <br>
                                <span class="service_item_name">  Pond</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('swimming_pool')}}'">
                                <span class="icon-swimming_pool service_item"></span>
                                    <br>
                                <span class="service_item_name">   Swimming Pool</span>
                        </div>
                   
                    <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('picnic_spot')}}'">
                                <span class="icon-picnic-spot service_item"></span>
                                    <br>
                                <span class="service_item_name"> Picnic Spot</span>
                        </div>
                        <div class="  col-lg-3 col-md-3 col-small  ml-2 pb-3 pt-3 mb-2 main-service text-center" onclick="location.href='{{route('ghat')}}'">
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
    <!-- Button trigger modal -->
    <div class="col-md-2 col-2">
                <button type="button" id="post_your_ad" class="btn btn-primary btn-toggole-modal"  >
                   
                <i class="fa-solid fa-plus"></i>
                </button>  
                
                <!-- Unauthorised Toast Message -->
                <div class="position-fixed top-3 end-0 p-sm-3 p-2" style="z-index: 11">
                        <div id="liveToast" class="toast align-items-center text-white border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex p-3 toast-background">
                                    <div class="toast-body">
                                    
             <h1 class="font-weight-bold "> <i class="fa-solid fa-circle-exclamation me-3"></i> Please login</h1>
                                    </div>
                                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            <!-- <div class="toast-header"> 
                            <h1 class="me-auto text-center">Please Login </h1> 
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div> -->
                        </div>
                    </div>
    </div>
                    
<script>
    var toastTrigger = document.getElementById('post_your_ad')
var toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', function () {
    var toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
    
  })
}
</script>
 
            </div>
            
            
            @endif

        </div>

    </div>
    <hr>  
</div> 
 

