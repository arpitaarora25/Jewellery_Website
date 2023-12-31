<?php 
 include('includes/connect.php'); 
    ?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap" rel="stylesheet">



    <style>
        .card {
            height: 500px;
            padding: 0 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @import url('https://fonts.googleapis.com/css2?family=Nixie+One&display=swap');

        #products {
            background-image: linear-gradient(rgb(2, 46, 59), white);
        }

        #aboutus {
            background-image: linear-gradient(rgb(2, 46, 59), white);
        }

        #footercard {
            background-image: linear-gradient(rgb(2, 46, 59), white);
        }

        #rating {
            background-image: linear-gradient(rgb(2, 46, 59), white);
        }
       
    </style>
</head>

<body>
    <div class="container-fluid">

        <div class="head" style="display: flex;justify-content: space-evenly;background-image: url('wallpaper.jpg');">    
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BRANDS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><?php 
                    $select_brands = "Select * from brands";
                    $result_brands = mysqli_query($con,$select_brands);
                    
                    //echo $row_data['brand_name'];
                    while ($row_data= mysqli_fetch_assoc($result_brands)){
                        $brand_title =$row_data['brand_name'];
                        $brand_ID = $row_data['brand_id'];
                        echo "<li class='nav-item'><a href='#'class='nav-link'>$brand_title</a>";
                    }
                    ?></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIES
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><?php 
                    $select_category = "Select * from category ";
                    $result_category = mysqli_query($con,$select_category);
                    
                    //echo $row_data['brand_name'];
                    while ($row_data= mysqli_fetch_assoc($result_category)){
                        $cat_title =$row_data['category_title'];
                        $cat_ID = $row_data['category_id'];
                        echo "<li class='nav-item'><a href='#'class='nav-link'>$cat_title</a>";
                    }
                    ?></a></li>
          </ul>
        </li>
    </div>
  </div>
                </nav>
            
            <div class="headertext">
                <div class="iconing"></div>

                <h1 style="text-align: end;font-family:Marcellus; color: white;">
                    AJ JEWELLERS </h1>
                <br>
                <br>
            </div>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="display: flex; justify-content: end;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="header1.jpg" class="d-block w-100" alt="h1" style="height:300px;width:200px;margin-right:30px;padding:50px;">
                        </div>
                        <div class="carousel-item">
                            <img src="header2.jpg" class="d-block w-100" alt="h2" style="height:300px;width:200px;margin-right:30px;padding:50px;">
                        </div>
                        <div class="carousel-item">
                            <img src="header3.jpg" class="d-block w-100" alt="h3" style="height:300px;width:200px;margin-right:30px;padding:50px;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <hr style="color :black">
        <br>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <button
                    style="background-color: white; margin:0 15px;color: rgb(67, 4, 18); border: 2px solid white;box-shadow: rgb(83, 80, 80) 7px 5px ; border-radius: 15px;"><a
                        class="nav-link active" href="#aboutus">ABOUT US</a></button>
            </li>
            <li class="nav-item">
                <button
                    style="background-color: white;margin:0 15px; color: rgb(67, 4, 18); border: 2px solid white;box-shadow: rgb(83, 80, 80) 7px 5px ; border-radius: 15px;"><a
                        class="nav-link" href="#products">SALE BONANZA </a></button>
            </li>
            <li class="nav-item">
                <button
                    style="background-color: white;margin:0 15px; color: rgb(67, 4, 18); border: 2px solid white;box-shadow: rgb(83, 80, 80) 7px 5px ; border-radius: 15px;"><a
                        class="nav-link" href="#footercard">CONTACT</a></button>
            </li>
            <li class="nav-item">
                <button
                    style="background-color: white; margin:0 15px;color: rgb(67, 4, 18); border: 2px solid white;box-shadow: rgb(83, 80, 80) 7px 5px ;; border-radius: 15px;"><a
                        class="nav-link" href="#rating">REVIEWS & TESTIMONIALS</a></button>
            </li>
            <li class="nav-item">
                <button
                    style="background-color: white; margin:0 15px;color: rgb(67, 4, 18); border: 2px solid white;box-shadow: rgb(83, 80, 80) 7px 5px ;; border-radius: 15px;"><a
                        class="nav-link" href="http://localhost//ecomm/USER/user_login.php">LOGIN</a></button>
            </li>
            <br>
            <br>
            <li class="nav-item">
                <button id="viewprod" 
                    style="background-color: white; margin:0 15px;color: rgb(67, 4, 18); border: 2px solid white;box-shadow: rgb(83, 80, 80) 7px 5px ;; border-radius: 15px;"><a
                        class="nav-link" href="http://localhost//ecomm/products/view_items.php">PRODUCTS</a></button>
            </li>
            
            <!--cards -->
        </ul>
        <br>
        <br>
        <!--search bar -->
        <div class="searchform" style = "display:flex flex-direction:column">
            <label class="form-label" for="product"></label>
            <input class="form-control" id="product" style="width: 500px; margin: 0 40px;height:50px;box-shadow: rgb(41, 39, 39) 10px 5px;" placeholder="Search...">
            <br>
        </div>
        <br>
        <section id="products">
            <br>
            <br>
            <h2 style="color:white; text-align: center;font-size: 2.8rem;font-family: Nixie+One;font-weight: lighter;">
                Necklaces For Every You</h2>
            <div class="items1">
                <div class="card">
                    <div class="card-header">Emerald-Diamond </div>
                    <div class="card-body">
                        <img src="emerald diamond.jpg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">50% off Rs. 4500/- </h5>
                        <p class="card-text">Shining Diamond Necklace embllished with prosperous Emerald Beauty</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Ruby-Diamond
                    </div>
                    <div class="card-body">
                        <img src="rubydiamond.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">30% off Rs. 4800 </h5>
                        <p class="card-text">Tempting Ruby Crystals embedded into a sparkling pool of Diamonds</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Diamond Choker
                    </div>
                    <div class="card-body">
                        <img src="chokerdiamond.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">40% off Rs. 4100</h5>
                        <p class="card-text">Set the Trend with American Diamond, RoseGold coloured choker</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Diamond-Pearl
                    </div>
                    <div class="card-body">
                        <img src="diamondpearl.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">20% off Rs. 4299</h5>
                        <p class="card-text">Be the Show-Stopper with Shining Diamonds embedded into classic pearls!</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <h2 style="color:white; text-align: center;font-size: 2.8rem ;font-family: Nixie+One;font-weight: lighter;">
                Earrings which turn all heads!</h2>
            <div class="items2">
                <div class="card">
                    <div class="card-header">
                        Korean Earrings
                    </div>
                    <div class="card-body">
                        <img src="koreanearrings.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">30% off Rs.2700</h5>
                        <p class="card-text">Steal The Show, with classic and trendy Korean Jewllery</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Jhumkas
                    </div>
                    <div class="card-body">
                        <img src="jhumkarosegold.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">40% off Rs.5500</h5>
                        <p class="card-text">Be noticed, with Rose-Gold Diamond Jhumkas decorated with hanging pearls
                        </p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Silver Hoops
                    </div>
                    <div class="card-body">
                        <img src="chandbaaliyan.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">20% off Rs.4200</h5>
                        <p class="card-text">Want to flaunt Your Chaand Baaliyan? Showcase them with pure silver ones!
                        </p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Diamond Earrings
                    </div>
                    <div class="card-body">
                        <img src="diamondparrty.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">40% off Rs.5500</h5>
                        <p class="card-text">Rock the Party with shining Diamond-Danglers!</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <h2 style="color:white; text-align: center;font-size: 2.8rem;font-family: Nixie+One;font-weight: lighter;">
                Hands that spread the light!</h2>
            <div class="items3">
                <div class="card">
                    <div class="card-header">
                        Gold Watch Bracelet
                    </div>
                    <div class="card-body">
                        <img src="watchbraceletgold2.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">30% off Rs. 5600/-</h5>
                        <p class="card-text">The classic Gold Pleated Watch bracelet! Redefine your time!</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Bangle Bracelet
                    </div>
                    <div class="card-body">
                        <img src="silverbanglebracelet3.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">20% off Rs. 6500</h5>
                        <p class="card-text">Get some Indo-Western Touch with the all silver Bangle Bracelet!</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Ring Chain Bracelet
                    </div>
                    <div class="card-body">
                        <img src="ringchainbracelet.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">30% off Rs.5200</h5>
                        <p class="card-text">Be a stunner and make your hands shine with trendy ring chain bracelet </p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Diamond Bracelet
                    </div>
                    <div class="card-body">
                        <img src="diamondbracelet1.jpeg" style="height:200px; width:250px;">
                        <br>
                        <br>
                        <h5 class="card-title">40% off Rs.6500</h5>
                        <p class="card-text">Spread the light with glittery diamonds wrpped around your wrist!</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>


        <!--about us -->
        <section id="aboutus" style="color: white;">
            <div class="about">
                <hr>
                <h>ABOUT US </h>
                <p>We are one of the oldest business families in India with a family legacy of over a century in business, starting from as early as 1908. 
                    Started for the noble cause of nation-building and self-sustenance in a pre-independent India, the 
                    forefathers believed ethical, honest and transparent business practices should form the foundation of the group.

                    <br>
                    <b>VISION : </b>
                    To understand and delight the world, translating everyone’s dream and personality into fine Indian
                    jewellery, and spread the happiness from it to all.

                    <br>
                    <b>MISSION : </b>
                    To give every customer much more than what he/she asks for in terms of quality, selection, value for money and customer service,
                    by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched 
                    experience in Indian jewellery shopping.
                    <br>
                    <br>
                    Indian jewellery, its craftsmanship and variety is an amazing showcase of India’s heritage, culture and diversity. 
                    With a deep understanding of local tastes and preferences, LJ offers an array of traditional and contemporary 
                    jewellery designs in gold, diamonds, precious stones and other precious metals.
                    <br>
                    <br>
                    We at LJ JEWELLERS have always believed that the customer needs to be educated and aware, as this is the first step in preventing 
                    malpractices in business. As a part of this philosophy we have conducted several campaigns over the years, to educate 
                    customers about purity, pricing and other aspects. These efforts of ours have gone a long way in the industry, that 
                    is now becoming more transparent towards the customer’s interests. We believe that this is our legacy to the industry.
                    
                </p>

                <h2>Our Beloved Founder</h2>
                <br>
                <img src="founder.jpeg" style="height: 400px; width:400px; border-radius: 80px;" />
                <br>
                <h3>Late Shri. Dharampal Gulati </h3>
                <br>
                <caption>
                    <p style="font-size: 1.3rem;font-style: italic;">'GemStones are popular for their Quality! It is our
                        duty to bring the best out of them'</p>
                    <p></p>
                </caption>
                <br>

                <h3>Counting the Centuries of Service </h3>
                <br>
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators" >
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1" ></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="award1.jpg" class="d-block w-100" alt="awardceremeonty"
                                style="height: 500px; width:700px">
                            <div class="carousel-caption d-none d-md-block" style="color: white">
                                <h5>NATIONAL AWARD 2022</h5>
                                <p>LJ JEWELLERS bagged the Best Jewellery Award. </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="lakme.jpg" class="d-block w-100" alt="lakme" style="height: 500px; width:700px">
                            <div class="carousel-caption d-none d-md-block"  style="color: white">
                                <!--<h5>Most Used and Best-Seller Lakme Fashion Week</h5>
                                <p>Most preferred and used perfume during the fashion quest!</p>-->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="bis.jpg" class="d-block w-100" alt="ffdc"
                                style="height: 500px;width: 700px;">
                            <div class="carousel-caption d-none d-md-block" style="color: black">
                                <h5>BIS HALLMARK Certified</h5>
                                <p> Don’t worry, you are in the right place</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <hr>
        <br>
        <br>
        <section id="rating">
            <div class="reviews">
                <h3>Reviews & Testimonials</h3>
                <br>
                <br>
                <div class="actors">
                    <div class="actor1">
                        <img src="kiara.jpeg" alt="ka" style="height:200px;width:200px" />
                        <br>
                        <p style="padding : 0 20px;">If your looking for luxury products and professional service, look no further. 
                        Had a great experience while purchasing my Rose-Gold Diamond Necklace! will continue to support LJ !</p>
                        <p><b>-Kiara Advani , Actress</b></p>
                    </div>

                    <div class="actor2">
                        <img src="priyanka.jpeg" alt="pc" style="height:200px;width:200px" /><br>
                        <p style="padding : 0 20px;"> Had an awesome experience at LJ ! I can see why all the reviews are 5-star.
                         Great selection, wonderful service. They were very attentive and really helped me with stellar options.</p>
                        <p><b>-Priyanka Chopra, Actress</b></p>
                    </div>

                    <div class="actor3">
                        <img src="srk.jpg" alt="srk" style="height:200px;width:200px" /><br>
                        <p style="padding : 0 20px;">It was a great experience shopping at this place. The salesperson had detailed answer to every question we asked.
                        They are very knowledgeable about their craft. Very satisfied.</p>
                        <p><b>-Shah Rukh Khan, Actor</b></p>
                    </div>
                </div>
                <br>
                <br>
                <div class="userreview" style="background-color: white; color: black;border-radius:40px; padding: 30px;">
                    <h3>Our Happy Customers</h3>
                    <ul>
                        <li>
                            <p>
                            They Have The Best Collection Of Jwellery And At Reasonable Prices. You Can Also Customise Your Jwellery As Per Your
                            Need. They Also Were Very Much Polite And Have A Good Service Too. Even They Delivered The Jewellery To Me, When I 
                            Requested Them If They Could Deliver If Possible. Thank You So Much. Had A Very Good Experience!-
                            <br> Mrs. Deepti Taneja, Homemaker</p>
                        </li>
                        <li>
                            <p>Had A Very Good Experience Shopping From Your Site. 
                                The Chain Was Awesome And The Price Was At Par With The Current Market Rates. Thank You LJ JEWELLERS.
                                <br> -Ms. Aarvi Oberoi, Entrepreneur</p>
                        </li>
                        <li>
                            <p>Best Designs Are At Giriraj Jwellers . Purity Of Gold And Diamond Is Too Good And Also They Believe In Costumers Satisfaction
                                <br>- Ms. Shanaya Aggarwal, Engineer</p>
                        </li>
                    </ul>
                </div>
                <br>
                <br>
                <div class="reviewbox">
                    <h4 style="color: red; text-align: center; font-size: 2rem;">COME BE A PART OF OUR HAPPY FAMILY</h4>
                    <br>
                    <form class="formbox">
                        <label for="customer" style="font-size: 1.4rem; color:black; margin-right: 15px;">Write a Review :</label>
                        <input id="customer" type="text" placeholder="Share Your Experience With Us !">
                    </form>
                </div>
            </div>
        </section>
        <br>
        <br>
        <hr>
        <!--footer-->
        <br>
        <section id="footercard">
            <footer class="card-footer"
                style="text-align: center; font-size: 1.4rem; background-color: white;color:black;padding:20px;">Stores in New
                Delhi, Noida, Mumbai and Chennai
                <p>For Customer Assistance , reach us at : <a href="#">ljofficial@gmail.com</a></p>
                <p>Follow us on Instagram, <a href="#">@LJofficial</a></p>
                <p>Follow us on Twitter <a href="#">@HiArpitaHere_</a></p>
            </footer>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <!--function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}-->
</body>

</html>
