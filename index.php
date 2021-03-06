<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Band</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <!-- Begin Nav -->
            <ul id="nav">
                <li><a href="#">Home</a></li>
                <li><a href="#band">Band</a></li>
                <li><a href="#tour">Tour</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <a href="#">
                        More
                        <i class="nav-arrow-down ti-angle-down"></i>   
                    </a>
                    <ul class="subnav">
                        <li><a href="">Merchandise</a></li>
                        <li><a href="">Extras</a></li>
                        <li><a href="">Media</a></li>
                    </ul>
                </li>
            </ul>
            <!-- End Nav -->

            <!-- Begin Search -->
            <div class="search-btn">
                <i class="search-icon ti-search"></i>
            </div>
            <!-- End Search -->


            <div id='mobile-menu' class="mobile-menu-btn">
                <i class="menu-icon ti-menu"></i>
            </div>
        </div>


        <div id="slider">
            <div class="text-content">
                <h2 class="text-heading">New York</h2>
                <div class="text-decription">The atmosphere in New York is lorem ipsum.</div>
            </div>
        </div>

         <!-- Content -->
        <div id="content">
            <div id="band" class="content-section">
                <h2 class="section-heading">THE BAND</h2>
                <p class="section-sub-heading">We love music</p>
                <p class="about-text">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="member-list">
                <div class="member-item">
                    <p class="member-name">Name</p>
                    <img src="./assets/img/Band/Member.jpg" alt="Name" class="member-img">
                </div>

                <div class="member-item">
                    <p class="member-name">Name</p>
                    <img src="./assets/img/Band/Member.jpg" alt="Name" class="member-img">
                </div>
                
                <div class="member-item">
                    <p class="member-name">Name</p>
                    <img src="./assets/img/Band/Member.jpg" alt="Name" class="member-img">
                </div>
                <div class="clear"></div>
            </div> 
            <div id="tour" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading text-white">TOUR DATES</h2>
                    <p class="section-sub-heading text-white">Remember to book your tickets!</p>
                    <!-- TICKET -->
                    <ul class="ticket">
                        <li>September <span class="sold-out">Sold out</span></li>
                        <li>October <span class="sold-out">Sold out</span></li>
                        <li>November <span class="quantiti">3</span></li>
                    </ul>
                    <!-- PLACE -->
                    <div class="row place-list">
                        <div class="member-item col col-third">
                            <img class="place-img" src="./assets/img/place/place1.jpg" alt="New York">
                            <div class="place-body">
                                <h3 class="place">New York</h3>
                                <p class="place-time">Fri 27 Nov 2016</p>
                                <p class="desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                 <button class="js-buy-ticket place-btn">Buy Tickets</button>
                            </div>
                        </div>

                        <div class="member-item col col-third">
                            <img class="place-img" src="./assets/img/place/place2.jpg" alt="New York">
                            <div class="place-body">
                                <h3 class="place">Paris</h3>
                                <p class="place-time">Sat 28 Nov 2016</p>
                                <p class="desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="js-buy-ticket place-btn">Buy Tickets</button>
                         </div>
                        </div>

                        <div class="member-item col col-third">
                            <img class="place-img" src="./assets/img/place/place3.jpg" alt="New York">
                            <div class="place-body">
                                <h3 class="place">San Francisco</h3>
                                <p class="place-time">Sun 29 Nov 2016</p>
                                <p class="desc">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="js-buy-ticket place-btn">Buy Tickets</button>
                                
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                
                </div>
            </div>

            <div id="contact" class="content-section">
                <h2 class="section-heading ">CONTACT</h2>
                <p class="section-sub-heading">Fan? Drop a note!</p>
                
                <div class="row contact-content">
                    <div class="col col-half contact-info">
                        <p><i class="ti-location-pin">   Chicago, US</i></p>
                        <p><i class="ti-mobile">   Phone: +84 151515</i></p>
                        <p><i class="ti-email">   Email: @uit.com</i></p>
                    </div>
                    <div class="col col-half contact-form">
                        <form action="">
                            <div class="row">
                                <div class="col col-half">
                                    <input type="text" required placeholder="Name" class="form-control">                           
                                </div>

                                <div class="col col-half">
                                    <input type="email" required placeholder="Mail" class="form-control">                           
                                </div>
                            </div>

                            <div class="row">
                               <div class="col col-full mt-8">
                                   <input type="text" required placeholder="Message" class="form-control">  </div>
                            </div>
                            <input type="submit" value="SEND" class="form-submit">

                        </form>
                        </div>
                    </div>
                </div>
                
           
            </div>
            <div class="map-section">
                <img src="./assets/img/Map/map.jpg" alt="Map">
        </div>

        

        <div id="footer">
            <div class="social-list">
                <a href=""><i class="ti-facebook"></i></a>
                <a href=""><i class="ti-instagram"></i></a>
                <a href=""><i class="ti-youtube"></i></a>
                <a href=""><i class="ti-pinterest"></i></a>
                <a href=""><i class="ti-twitter"></i></a>
                <a href=""><i class="ti-linkedin"></i></a>
            </div>
            <a hr class="copyright">Powered by <a href ="w3.css">w3.css</a></p>
        </div>

        <div class="modal js-modal">
            <div class="js-modal-container modal-container">
                <div class="modal-close js-modal-close">
                    <i class="ti-close"></i>
                </div>
                <header class="modal-header">
                    <i class="modal-heading-icon ti-bag"></i>
                    Tickets
                </header>
                <div class="modal-body">
                    <label for="tike-quantity
                    " class="modal-label">
                    <i class="ti-shopping-cart"></i>
                    Tickets, $15 per person
                </label>
                <input id="tike-quantity" type="text" class='modal-input' placeholder="How many?">

                <label for="tike-email
                " class="modal-label">
                <i class="ti-user"></i>
              Send to
            </label>
            <input id='tike-email' type="text" class='modal-input' placeholder="Enter email...?">


            <button id="buy-tickets">
                Pay <i class="ti-check"></i>
            </button>
                </div>
                
                <footer class="modal-footer">
                    <p class="modal-help">Need <a href=''>help?</a></p>
                </footer>
            </div>
        </div>
        
    </div>

    <script>
        const buyBtns = document.querySelectorAll('.js-buy-ticket')
        const modalContainer = document.querySelector('.js-modal-container')
        const modal = document.querySelector('.js-modal')
        const modalClose = document.querySelector('.js-modal-close')

        function showBuyTicket(){
            modal.classList.add('open')
        }

        function hideBuyTicket(){
            modal.classList.remove('open')
        }
        for (const buyBtn of buyBtns) {
            buyBtn.addEventListener('click', showBuyTicket)
        }
        modalClose.addEventListener('click', hideBuyTicket )

        modal.addEventListener('click', hideBuyTicket)

        modalContainer.addEventListener('click', function (event) {
            event.stopPropagation();
        })
    </script>
    <script>
        var header = document.getElementById('header');
        var mobileMenu = document.getElementById('mobile-menu');
        var headerHeight = header.clientHeight;
        //????ng m??? mobile menu
        mobileMenu.onclick = function () {
            var isClosed = header.clientHeight === headerHeight;
            if (isClosed) {
                header.style.height = 'auto';
            } else {
                header.style.height = null;
            }
        }

        //T??? ?????ng ????ng khi ch???n menu
        var menuItems = document.querySelectorAll('#nav li a[href*="#"]');
        for (var i=0;i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            
            menuItem.onclick = function () {
                var isParentMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('subnav');
                if (!isParentMenu){
                    header.style.height = null;
                } else {
                    event.preventDefault();
                }
            }
        }
    </script>
    <!-- <script>
        var header = document.getElementById('header');
        var mobileMenu = document.getElementById('mobile-menu');
        var headerHeight = header.clientHeight;
// ????ng m??? menu
        mobileMenu.onclick = function () {
            var isClose = header.clientHeight === headerHeight;
            if(isClose){
                header.style.height ='auto';
            }
            else {
                header.style.height ='46px'
            }
        }
// t??? ?????ng ????ng menu    
var menuItems = document.querySelectorAll('#nav li a[href*="#"]')

for ( var i = 0; i < menuItems.length; i++){
    var menuItem = menuItems[i];
    var isParentMenu = menuItem.nextElementSibling && menuItem.nextElementSibling.classList.contains('subnav');
    menuItem.onclick = function () {
        // if (!isParentMenu) {
            header.style.height =null;
        
    }
} -->
    </script>
</body>
</html>
