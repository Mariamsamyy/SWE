<?php


require '../controller/config.php';
if (!empty($_SESSION["id"])) {
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'  ");
  $row = mysqli_fetch_assoc($result);

} else {
  header("Location: registeration.php");
}

include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <title>Home Page</title>
  <style>
    <?php include "../public/CSS/index.css" ?>
  </style>
</head>

<body>
  <!-- open btn -->
  <!-- <button id="open_cart_btn">
    <a href="#" class="text-decoration-none">
      <i class="bi bi-cart3 text-white fs-4 me-3"></i>
    </a>
  </button> -->

  <!-- backdrop -->
  <div class="backdrop">

  </div>
  <!-- side cart -->
  <div class="sidecart">
    <div class="cart_content">
      <!-- cart header -->
      <div class="cart_header">

        <div class="header_title">
          <h2>Your Cart</h2>
        </div>
        <span id="close_btn" class="close_btn">&times;</span>
      </div>
      <!-- cart items -->
      <div class="cart_items">
        <!-- item 1 -->
        <div class="cart_item">
          <div class="productcontainer">
            <button class="remove-item">X</button> <!-- Move this X button to the top right -->
            <div class="cartimage">
              <img src="../public/photos/productPhotos/Concept 2 PM5 BikeErg.png" alt="Concept 2 PM5 BikeErg"
                class="pic-1" width="100px">
            </div>
            <div class="Content">
              <h6>Concept 2 PM5 BikeErg</h6>
              <p class="detailsinfo">
                <span class="typetrip">CARDIO</span> <span class="separate"></span> <span class="nofdays">BIKES</span>
              </p>
              <p class="lower-price">
                From <span class="price">72,000 EGP</span>
              </p>
            </div>
            <div class="cart-controls">
              <div class="cart-quantity">
                <button class="minus" id="decrement">-</button>
                <input type="text" class="quantity" id="quantity" value="1">
                <button class="plus" id="increment">+</button>
              </div>
            </div>
          </div>
        </div>


        <!-- item 2 -->
        <div class="cart_item">
          <div class="productcontainer">
            <button class="remove-item">X</button> <!-- Move this X button to the top right -->
            <div class="cartimage">
              <img src="../public/photos/productPhotos/Concept 2 PM5 BikeErg.png" alt="Concept 2 PM5 BikeErg"
                class="pic-1" width="100px">
            </div>
            <div class="Content">
              <h6>Concept 2 SkiErg</h6>
              <p class="detailsinfo">
                <span class="typetrip">CARDIO</span> <span class="separate"></span> <span class="nofdays">BIKES</span>
              </p>
              <p class="lower-price">
                From <span class="price">72,000 EGP</span>
              </p>
            </div>
            <div class="cart-controls">
              <div class="cart-quantity">
                <button class="minus" id="decrement2">-</button>
                <input type="text" class="quantity" id="quantity2" value="1">
                <button class="plus" id="increment2">+</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- cart actions -->
      <div class="cart_actions">
        <div class="subtotal">
          <p>SUBTOTAL:</p>
          <P>$<span id="subtotal_price">3000</span></P>
        </div>
        <button>View Cart</button>
        <button type="button"><a href="checkOut.php" style="color: white;   text-decoration: none;
                "> Check Out</a>
                </button>
      </div>
    </div>
  </div>
  <!-- The slider -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <video width="1900" autoplay loop muted>
          <source src="../public/photos/slidervideos/vid.mp4" type="video/mp4">
        </video>

        <!-- <img src="../public/photos/productPhotos/slider1.jpg" class="d-block w-100" alt="..." > -->
        <div class="carousel-caption1">
          <h1>TRANSFORM YOUR BODY WITH</h1>
          <h1>PURE FITNESS EQUIPMENT</h1>
          <h1>AND SEE THE RESULTS FOR YOURSELF.</h1>
        </div>
      </div>
      <div class="carousel-item">
        <video width="1900" autoplay loop muted>
          <source src="../public/photos/slidervideos/vid2.mp4" type="video/mp4">
        </video>
        <!-- <img src="../public/photos/productPhotos/slider2.png" class="d-block w-100" alt="..."> -->
        <div class="carousel-caption1">
          <h1>PURE FITNESS EQUIPMENT:</h1>
          <h1>WHERE STRENGTH MEETS ENDURANCE.</h1>
        </div>
      </div>

      <div class="carousel-item">
        <video width="1900" autoplay loop muted>
          <source src="../public/photos/slidervideos/vid3.mp4" type="video/mp4">
        </video>
        <!-- <img src="../public/photos/productPhotos/slider3.png" class="d-block w-100" alt="..."> -->
        <div class="carousel-caption1">
          <h1>PURE FITNESS EQUIPMENT:</h1>
          <h1>THE PERFECT PARTNER FOR YOUR</h1>
          <h1>FITNESS JOURNEY.</h1>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- The Products -->

  <!-- Quick View button-->
  <div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="quickViewModalLabel">Product Quick View</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row">
          <div class="col-md-6">
          <img id="mainProductImage" src="../public/photos/productPhotos/ASSAULT AIRBIKE.webp"
                        alt="Product Image" class="img-fluid" style="height: 500px;">
                    <div class="images p-3">
                        <!-- Add a container for the magnifier -->
                        <div class="thumbnail text-center">
                            <img onmouseover="change_image(this)"
                                src="../public/photos/productPhotos/ASSAULT AIRBIKE2.webp" width="70">
                            <img onmouseover="change_image(this)"
                                src="../public/photos/productPhotos/ASSAULT AIRBIKE.webp" width="70">
                            <img onmouseover="change_image(this)" src="../public/photos/productPhotos/assu.webp"
                                width="70">
                        </div>

                    </div>
          </div>
          <div class="col-md-6">
            <div class="product p-4">
              <div class="d-flex justify-content-between align-items-center">
              </div>
              <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">CARDIO/BIKES</span>
                <h5 class="text-uppercase">Concept 2 PM5 BikeErg</h5>
                <div class="price d-flex flex-row align-items-center"> <span class="act-price">72.000 EGP</span>
                  <!-- <div class="ml-2"> <small class="dis-price">82.000 EGP</small> <span>40% OFF</span> </div> -->
                </div>
              </div>
              <p class="about">The bike features a clutch that keeps the flywheel spinning when you stop pedaling,
                which makes it feel like an outdoor bike.
                Adjust the seat and handlebars to fit a variety of athletes (and even customize with your own seat,
                pedals,
                and handlebars, if you want). Secure your phone in the attached device holder.
                This bike features heavy-duty construction, with a black powder coat aluminum frame.
                The bike is suitable for athletes up to 300lbs</p>
              <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">Add to
                  cart</button> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- product -->

  <!-- First product -->
  <div class="viewproduct">
    <div class="row">
      <div class="col-md text-center" style="color: maroon; font-family: Georgia, 'Times New Roman', Times, serif;">
        <h2>Shop Popular Products</h2>
      </div>
    </div>
    <div class="container products-carousel">
      <div class="row">

        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="product.php" class="images">
                <img src="../public/photos/productPhotos/Concept 2 PM5 BikeErg.png" alt="Concept 2 PM5 BikeErg"
                  class="pic-1" width="500px">

                <img src="../public/photos/productPhotos/Concept 2 PM5 BikeErg2.webp" alt="Concept 2 PM5 BikeErg"
                  class="pic-2" width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>

            </div>
            <div class="Content">
              <h3>Concept 2 PM5 BikeErg </h3>
              <p class="detailsinfo">
                <span class="typetrip">CARDIO</span> <span class="separate"></span> <span class="nofdays">BIKES</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">72.000 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Second Product -->
        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="" class="images">
                <img src="../public/photos/productPhotos/Flat-Bench.webp" alt="Flat-Bench" class="pic-1" width="500px">

                <img src="../public/photos/productPhotos/Flat-Bench2.webp" alt="Flat-Bench" class="pic-2" width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>
            </div>
            <div class="Content">
              <h3>Flat</h3>
              <h3>Bench</h3>
              <p class="detailsinfo">
                <span class="typetrip">CROSSFIT EQUIPMENT</span>
                <span class="separate"></span> <span class="nofdays">BENCHES</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">5.850 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Third Product -->
        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="" class="images">
                <img src="../public/photos/productPhotos/Concept 2 SkiErg.png" alt="Concept 2 SkiErg" class="pic-1"
                  width="500px">

                <img src="../public/photos/productPhotos/Concept 2 SkiErg.webp" alt="Concept 2 SkiErg" class="pic-2"
                  width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>

            </div>
            <div class="Content">
              <h3>Concept 2 SkiErg</h3>
              <p class="detailsinfo">
                <span class="typetrip">CARDIO</span> <span class="separate"></span> <span class="nofdays">SKIERGS</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">58.000 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fourth Product -->
        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="" class="images">
                <img src="../public/photos/productPhotos/ASSAULT AIRBIKE.webp" alt="ASSAULT AIRBIKE" class="pic-1"
                  width="500px">

                <img src="../public/photos/productPhotos/ASSAULT AIRBIKE2.webp" alt="ASSAULT AIRBIKE" class="pic-2"
                  width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>

            </div>
            <div class="Content">
              <h3>ASSAULT AIRBIKE</h3>
              <p class="detailsinfo">
                <span class="typetrip">CARDIO</span> <span class="separate"></span> <span class="nofdays">BIKES</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">39.000 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fifth Product -->

      </div>
    </div>

    <!-- container div -->
  </div>

  <!-- sixth Product -->

  <!-- image -->
  <div class="position-relative text-center">
    <a href="#" id="centered-anchor" class="d-block">
      <img src="../public/photos/productPhotos/home.webp" alt="Clickable Image" class="img-fluid mx-auto">
    </a>
    <button class="btn btn-dark btn-lg position-absolute top-25 start-50 translate-middle">
      Shop Now
    </button>
  </div>


  <!-- benches product -->
  <!-- First product -->
  <div class="viewproduct">
    <div class="row">
      <div class="col-md text-center" style="color: maroon; font-family: Georgia, 'Times New Roman', Times, serif; margin-top: 70px;">
        <h2 style="margin-top: 40px;">BEST OF WEIGHTLIFTING</h2>
      </div>
    </div>


    <div class="container products-carousel">
      <div class="row">
        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="" class="images">
                <img src="../public/photos/productPhotos//hex.webp" alt="Hex Dumbbells" class="pic-1" width="500px">

                <img src="../public/photos/productPhotos/86.webp" alt="Hex Dumbbells" class="pic-2" width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>

            </div>
            <div class="Content">
              <h3>Hex Dumbbells-KG (Pair) </h3>
              <p class="detailsinfo">
                <span class="typetrip">FREE WEIGHTS</span> <span class="separate"></span> <span
                  class="nofdays">DUMBBELLS</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">95 EGP</span>
                  To <span class="price">4.750 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Second Product -->
        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="" class="images">
                <img src="../public/photos/productPhotos/Bumber-Plates-2-scaled-1200x1200.webp" alt="dumble"
                  class="pic-1" width="500px">

                <img src="../public/photos/productPhotos/Bumber-Plates-3-scaled-1200x799.webp" alt="dumble"
                  class="pic-2" width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>

            </div>
            <div class="Content">
              <h3>Virgin Bumper Plates-(Pair)</h3>
              <p class="detailsinfo">
                <span class="typetrip">WEIGHTLIFTING</span> <span class="separate"></span> <span
                  class="nofdays">PLATE</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">1.450 EGP</span>
                  To <span class="price">5.800 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Third Product -->
        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="" class="images">
                <img src="../public/photos/productPhotos/pureFitness10.webp" alt="Pure Fitness TPU " class="pic-1"
                  width="500px">

                <img src="../public/photos/productPhotos/pureFitness10.webp" alt="Pure Fitness TPU " class="pic-2"
                  width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>

            </div>
            <div class="Content">
              <h3>Pure Fitness TPU Plates Set-2.5,5,10,15,20kg </h3>
              <p class="detailsinfo">
                <span class="typetrip">WEIGHTLIFTING</span> <span class="separate"></span> <span
                  class="nofdays">PLATES</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">15.225 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fourth Product -->
        <div class="col-md-3 ">
          <div class="products">
            <div class="product-image">
              <a href="" class="images">
                <img src="../public/photos/productPhotos/Wall-Ball-6-scaled-1200x1200.webp" alt="Wall Ball"
                  class="pic-1" width="500px">

                <img src="../public/photos/productPhotos/Wall-Balls-3-scaled-1200x1200.webp" alt="Wall Ball"
                  class="pic-2" width="500px">
              </a>
              <div class="links">
                <div class="Icon">
                  <a href="#"><i class="bi bi-cart3"></i></i></a>
                  <span class="tooltiptext">Add to cart</span>
                </div>
                <div class="Icon">
                  <a href=""><i class="bi bi-heart"></i></i></a>
                  <span class="tooltiptext">Move to wishlist</span>
                </div>
                <div class="Icon">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                    <i class="bi bi-eye"></i>
                  </a>
                  <span class="tooltiptext">Quick view</span>
                </div>
              </div>

            </div>
            <div class="Content">
              <h3>Wall Ball Set of 4</h3>
              <!-- <div class="myDIV">Other options</div>
              <div class="hide">
                <img src="bench1.jpg" alt="newyork photo" class="pic-1">
              </div> -->
              <p class="detailsinfo">
                <span class="typetrip">FREE WEIGHTS</span> <span class="separate"></span> <span class="nofdays">MEDICINE
                  BALLS</span>
              </p>
              <div class="cost">
                <p class="lower-price">
                  From <span class="price">6.500 EGP</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Fifth Product -->

      </div>
    </div>

    <!-- container div -->
  </div>


  <!-- image -->
  <div class="position-relative text-center">
    <!-- <a href="#" id="centered-anchor" class="d-block"> -->
    <img src="../public/photos/productPhotos/pure1.png" alt="Clickable Image" class="img-fluid mx-auto">
    <!-- </a> -->
  </div>


<!-- what our customers have to say -->
  <h2>What Our Customers Have To Say</h2>
<section class="feedback-section">

    <div class="container" style="margin-bottom: 80px; ">
        <div class="feedback-slider">
            <div class="feedback-review">
                <div class="white-box">
                    <p class="feedback-text">
                        We ordered our treadmill online from Pure Fitness, the next day I received an email confirming our order with full contact information. I called instead of replying to the email because I had a question.waleed was awesome and answered all my questions! Prior to shipping the treadmill, he sent me a photo of the equipment so I could approve the order. They were very quick to respond via email too. We are very happy with our purchase and the customer service! We will definitely shop with Pure Fitness again!!
                    </p>
                    <p class="feedback-name"> -Mariam Samy </p>
                </div>
            </div>
            <div class="feedback-review">
                <div class="white-box">
                    <p class="feedback-text">
                    Awesome customer service.They assisted us in finding the perfect machines for our home gym. Great prices, I am definitely coming back for more equipment.
                    </p>
                    <p class="feedback-name"> -Moaz </p>
                </div>
            </div>
            <!-- Add more review elements as needed -->
        </div>
        <div class="slider-controls">
    <button class="prev-button">
    <i class="bi bi-arrow-left-circle"></i>
    </button>
    <button class="next-button">
    <i class="bi bi-arrow-right-circle"></i>
    </button>
</div>

    </div>
</section>
  <!-- About us and signup containers -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="image-container position-relative text-center">
          <img src="../public/photos/productPhotos/footerSIGNup.jpg" class="custom-img img-fluid" alt="Your Image">
          <div class="overlay d-flex flex-column justify-content-center align-items-center">
            <div class="quote mt-2 text-center">
              <h4 class="custom-about-us">NEWSLETTER SIGNUP</h4>
              <p class="custom-quote">Get product launch information, promotions, blogs, and Pure Fitness news.</p>
            </div>
            <form action="" id="ContactFooter" class="footer-form">
              <div class="d-flex">
                <div class="form-floating me-2">
                  <input type="email" class="form-control border-0" id="email" placeholder=" "
                    style="background: transparent; color: #000;">
                  <label for="email">Enter your email address</label>
                </div>
                <button type="button" class="btn-About-us btn-dark"><a href="Registeration.php" style="color: white;   text-decoration: none;
                "> Sign Up</a>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="image-container position-relative text-center">
          <img src="../public/photos/productPhotos/aboutUs.png" class="custom-img img-fluid" alt="Your Image">
          <div class="overlay d-flex flex-column justify-content-center align-items-center">
            <div class="quote mt-2 text-center">
              <h4 class="custom-about-us">ABOUT US</h4>
              <p class="custom-quote">Pure Fitness Equipment one of the biggest fitness equipment store in Egypt.</p>
                <button type="button" class="btn-About-us btn-dark"><a href="about.php" style="color: white;   text-decoration: none;
                "> Read Our Story</a>
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- BMI Calculator and Chart -->
<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="bmi-calculator-container text-black p-4">
          <h3 class="card-title text-center" style="color: maroon;">CALCULATE YOUR BMI</h3>
          <p class="small">BMI stands for Body Mass Index. The approximated calculation is used to determine your weight to your height. The calculator is useful for adults over 18 years of age. The calculator is only used as an estimator only and should not be used as a medical determination. The team at 365 recommend professional Dr or accredited Health Professional in regards to specific health and nutrition advice.</p>
          <form id="bmiForm">
              <div class="mb-3">
                  <input type="number" class="form-control form-control-sm" id="weight" name="weight" placeholder="Weight (kg)">
              </div>
              <div class="mb-3">
                  <input type="number" class="form-control form-control-sm" id="height" name="height" placeholder="Height (m)">
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-sm">Calculate BMI</button>
              </div>
          </form>
          <div id="result" class="mt-3">
              <h3 class="text-center">Your BMI: <span id="bmiValue">--</span></h3>
              <p class="text-center">Category: <span id="bmiCategory">--</span></p>
          </div>
      </div>
  </div>
  <div class="col-md-6">
    <!-- BMI Chart Container -->
    <div class="bmi-chart-container text-black p-4">
        <h3 class="card-title text-center" style="color: maroon;">BMI Categories</h3>
        <p class="small">BMI categories are a way to classify individuals based on their BMI value. Here's a simple chart:</p>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">BMI Range</th>
                    <th scope="col">Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Less than 18.5</td>
                    <td>Underweight</td>
                </tr>
                <tr>
                    <td>18.5 - 24.9</td>
                    <td>Normal Weight</td>
                </tr>
                <tr>
                    <td>25.0 - 29.9</td>
                    <td>Overweight</td>
                </tr>
                <tr>
                    <td>30.0 or more</td>
                    <td>Obese</td>
                </tr>
            </tbody>
        </table>
        
        <p class="small mt-3">Please note that this is a general reference. For personalized health advice, consult a healthcare professional.</p>
    </div>
</div>
</div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script src="../public/JS/index.js"></script>

  <footer>
    <?php
    include "footer.php" ?>
  </footer>
</body>

</html>