<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>


  <div class="wrapper">
    <div class="header__wrapper">
      <div class="header__wrapper-top">
        <div class="container header__top">
          <button class="header__btn js_menu-btn"></button>
          <nav class="nav js_menu">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="./contacts.html" class="nav__link">Contact Us</a>
              </li>
              <li class="nav__item">
                <a href="./return.html" class="nav__link">Return Policy</a>
              </li>
              <li class="nav__item">
                <a href="./purchase.html" class="nav__link">Terms of Purchase</a>
              </li>
              <li class="nav__item">
                <a href="./privacy.html" class="nav__link">Privacy Notice</a>
              </li>
              <li class="nav__item">
                <a href="./shipping.html" class="nav__link">Shipping Policy</a>
              </li>
              <li class="nav__item">
                <a href="./use.html" class="nav__link">Terms of Use</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="container">
        <header class="header">
 
          <a href="./index.html" class="header__logo logo js_website-name">website name</a>
          <a href="./shop.html" class="cart__btn">
            Cart
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 424.449 424.449" style="enable-background:new 0 0 424.449 424.449;" xml:space="preserve">
              <g>
                <g>
                  <g>
                    <circle cx="170.241" cy="374.273" r="50.176"></circle>
                    <path d="M316.673,324.098L316.673,324.098c-27.711,0-50.176,22.465-50.176,50.176s22.465,50.176,50.176,50.176
                 c27.711,0,50.176-22.465,50.176-50.176S344.384,324.098,316.673,324.098z"></path>
                    <path d="M402.177,272.897H140.545l-5.12-29.696h215.04c6.326,0.019,12.017-3.843,14.336-9.728l51.2-129.024
                 c3.111-7.892-0.766-16.812-8.658-19.922c-1.808-0.713-3.735-1.076-5.678-1.07H108.801L96.513,12.801
                 c-1.262-7.471-7.784-12.906-15.36-12.8h-58.88c-8.483,0-15.36,6.877-15.36,15.36s6.877,15.36,15.36,15.36h46.08l44.032,260.096
                 c1.262,7.471,7.784,12.906,15.36,12.8h274.432c8.483,0,15.36-6.877,15.36-15.36C417.537,279.774,410.66,272.897,402.177,272.897z
                 "></path>
                  </g>
                </g>
              </g>
            </svg>
            <span class="cart__span js_cart__span">0</span>
          </a>

        </header>
      </div>
    </div>

    <main class="main bg-main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
          <?php if($_GET["order_id"]){ ?> 
  <h1 class="title">Thank you</h1>
  <p class="text">Your order was completed successfully!</p>
  <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
<?php } else { ?>
  <h1 class="title">We're sorry</h1>
  <p class="text" style="font-size: 3rem">There was an error processing your order</p>
<?php } ?>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
      <svg class="svg-wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 120" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="#fff" offset="0%"></stop><stop stop-color="#fff" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,96L26.7,88C53.3,80,107,64,160,48C213.3,32,267,16,320,12C373.3,8,427,16,480,32C533.3,48,587,72,640,74C693.3,76,747,56,800,58C853.3,60,907,84,960,94C1013.3,104,1067,100,1120,92C1173.3,84,1227,72,1280,72C1333.3,72,1387,84,1440,78C1493.3,72,1547,48,1600,48C1653.3,48,1707,72,1760,76C1813.3,80,1867,64,1920,50C1973.3,36,2027,24,2080,16C2133.3,8,2187,4,2240,12C2293.3,20,2347,40,2400,44C2453.3,48,2507,36,2560,42C2613.3,48,2667,72,2720,84C2773.3,96,2827,96,2880,90C2933.3,84,2987,72,3040,58C3093.3,44,3147,28,3200,28C3253.3,28,3307,44,3360,58C3413.3,72,3467,84,3520,82C3573.3,80,3627,64,3680,54C3733.3,44,3787,40,3813,38L3840,36L3840,120L3813.3,120C3786.7,120,3733,120,3680,120C3626.7,120,3573,120,3520,120C3466.7,120,3413,120,3360,120C3306.7,120,3253,120,3200,120C3146.7,120,3093,120,3040,120C2986.7,120,2933,120,2880,120C2826.7,120,2773,120,2720,120C2666.7,120,2613,120,2560,120C2506.7,120,2453,120,2400,120C2346.7,120,2293,120,2240,120C2186.7,120,2133,120,2080,120C2026.7,120,1973,120,1920,120C1866.7,120,1813,120,1760,120C1706.7,120,1653,120,1600,120C1546.7,120,1493,120,1440,120C1386.7,120,1333,120,1280,120C1226.7,120,1173,120,1120,120C1066.7,120,1013,120,960,120C906.7,120,853,120,800,120C746.7,120,693,120,640,120C586.7,120,533,120,480,120C426.7,120,373,120,320,120C266.7,120,213,120,160,120C106.7,120,53,120,27,120L0,120Z"></path></svg>
 
      <footer class="footer">
        <div class="footer__top">
          <div class="container">
            <div class="footer__policies">
            <div class="footer__block">
              <p class="footer__subtitle">Policies</p>
              <ul class="sub-list list-col">
                <li class="item">
                  <a href="./contacts.html" class="footer__link">Contact Us</a>
                </li>
                <li class="item">
                  <a href="./return.html" class="footer__link">Return Policy</a>
                </li>
                <li class="item">
                  <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                </li>
                <li class="item">
                  <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                </li>
                <li class="item">
                  <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                </li>
                <li class="item">
                  <a href="./use.html" class="footer__link">Terms of Use</a>
                </li>
            
             
              </ul>
            </div>
            <div class="footer__block footer__block--jus">
              <p class="footer__subtitle">Contact us</p>
              <ul class="sub-list">
                <li class="item item--df">
               
                  <a href="" class="footer__link js_website-email"></a>
                </li>
                <li class="item item--df">
                 
                  <a href="" class="footer__link js_website-phone"></a>
                </li>
                <li class="item item--df">
                  
                  <p class="text js_website-address"></p>
                </li>
              </ul>
       
            </div>
        
          </div>
          <div class="footer__block footer__block--df">
            <a href="./index.html" class="footer__logo logo js_website-name"></a>
            <p class="text text--mb js_website-corp"></p>
            <span class="footer__span">© All rights reserved</span>
          </div>
          </div>
        </div>
      

       
  
      </footer>
  
  </div> 
  </div>
  <script type='text/javascript' src='https://thebestproductmanager.com/products/prices-nxg-object'></script>
 
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script> 
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menuBtn.classList.toggle('active');
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>