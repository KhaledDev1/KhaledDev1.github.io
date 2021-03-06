<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Siva</title>
    <meta name="description" content="siva">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="images/logo3.webp" type="image/x-icon" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet"> -->
    </head>
  <body>
    <!-- ==========================
      SECTION: header
========================== -->
    <header>
<!--        <h2><?php echo "Hello. Today is " . date('l, m Y'); ?>.</h2>-->

        <?php 
    //retreive user name from server and print it  
    if(isset($_SESSION['username'])){
        echo '<a href="index.php?logout=1" style="color: #ff7f50; text-transform: uppercase; float: right; margin: 30px 35px 0 0; padding: 12px;" class="new">log out</a>.<img src="user.svg" width="40px" height="40px" style="float: right; margin-top: 1.375rem; border-radius: 50%;">';
    }
  ?>
      <div class="logoContainer"><img src="images/imageedit_4_8914050630.webp" alt="siva" class="logo"></div>
      <!-- <img src="images/facebook.svg" alt=""> -->
      <!-- font awesome for dark/white theme -->
      <!-- <li class="moon" id="switch-theme" style=""><a href="#" class="dark-mode" title="Toggle Dark Mode"><i class="fas fa-sun" style=""></i></a></li> -->
      </header>

      <!-- ==========================
 SECTION: Navigation Bar
========================== -->
<nav class="nav_bar_wrapper">
  <!-- <hr width="800px" color="#ff7f50"> -->
  <ul class="nav_bar">
        <li><a href="#">home</a></li>
        <li><a href="#">new Arrivals</a></li>
        <li><a href="#">magazine</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">contact</a></li>


        <!-- <ul>
            <li class="nav_bar" style="float:right"><a href="registeration.html">Sign up</a></li>
            <li class="nav_bar" style="float:right"><a href="#about">Log in</a></li>
          </ul> -->
    </ul>
          <!-- <hr width="800px" color="#ff7f50"> -->
</nav>
          
          <!-- ==========================
            SECTION: Article
            ========================== -->
            <article>
                <button  onclick="fn()" class="hestia-scroll-to-top">
                  <i class="fas fa-angle-double-up" aria-hidden="true"></i>
                </button>
              <div>
        <h2 id="userName">
        <?php
    //retreive logging in confirmation from server and print it  
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        // to clear variable value
        unset($_SESSION['success']);
    }
    //retreive user name from server and print it  
    if(isset($_SESSION['username'])){
        echo "welcome ".$_SESSION['username'];
    }
?>
        </h2>
        </div>
        <img src="images/photo-1483985988355-763728e1935b.webp" class="cov_img" />
        <h2 class="categories_text" >shop for different categories</h2>
        <div class="categories_wrapper">
          <div class="aboutleft">
            <label for="categories"><a href="women.html"><b>women</b></a></label>
            <div>
            <a href="#"><img src="images/portmans-save-bag-desktop.webp" loading="lazy" class="categories_img" alt=""/></a>
            </div>
            </div>
            
            <div class="center">
              <label for="categories">
                <a href="#"><b>men</b></a>
              </label>
              <div>
                <a href="#"><img src="images/mw-Winterpastels-moment new.webp" loading="lazy" class="categories_img" alt=""/></a>
          </div>
          </div>
          
          <div class="aboutright">
            <label for="categories">
              <a href="#"><b>children</b></a>
            </label>
            <div>
            <a href="#"><img src="images/organic-baby-clothes.webp" loading="lazy" class="categories_img" alt=""/></a>
            </div>
            </div>
            </div>
            <div>
        <div>
          <h2 class="premium_products_text">premium products</h2>
          <img src="images/012617-fashion-campaign-ads-1.webp" loading="lazy" class="premium_products_img">
          </div>
          <div>
          <div style="padding-top: 5%;"></div>
          <h1 class="model_text">look a model agency</h1>
          <p class="model_paragraph">Far far away, <b>creative</b> behind the word mountaines, far from the countries Vokalia and Consonantia, there live the <b>success</b> blind texts.<br>
              Separated they live in Bookmarksgrove</p>
              <h2 class="model_text" >shop online and order your products</h2>
              <img src="images/Screenshot_20191024-215029_Samsung Internet.webp" loading="lazy" style="  display: block; margin-left: auto; margin-right: auto; width: 374px; height: 374px;" alt="">
              </div>
        <div class="clear"></div>
        
        </div>
        
        
        <main class="inline-block-center">
          <div>
            <h3><img src="svg/shipping-fast.svg" width="40px" height="40px">next day shipping</h3>
            I'm an element that is block-like with my siblings and we're centered in a row.
            </div>
        <div>
          <h3><img src="svg/shipping-fast.svg" width="40px" height="40px">free 20 day returns</h3>
           I'm an element that is block-like with my siblings and we're centered in a row. I have more content in me than my siblings do.
           </div>
           <div>
             <h3><img src="svg/shipping-fast.svg" width="40px" height="40px">customer support</h3>
             I'm an element that is block-like with my siblings and we're centered in a row.
         </div>
         </main>
         
    </article>
    
    <!-- ==========================
      SECTION: Footer
========================== -->
<footer>
  <span>Copyright  &copy; 2018 <a style="text-decoration: none;" href="https://www.facebook.com/KhaledDev1" target="_blank" rel="noreferrer noopener" >Khaled Mohamed</a> All rights reserved.</span>
  </footer>
    <script src="js/script.js"></Script>
    </body>
    </html>
    
