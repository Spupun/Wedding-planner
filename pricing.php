<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pricing</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="pricing">

   <h1 class="heading">our pricing</h1>

   <div class="box-container">

      <div class="box">
      <h3>basic plan</h3>
         <div class="price">₹25000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>premium plan</h3>
         <div class="price">₹55000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> hospitality</p>
            <p> <i class="fas fa-check"></i> mehendi artist</p>
            <p> <i class="fas fa-check"></i> wedding ceromony</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

      <div class="box">
         <h3>ultimate plan</h3>
         <div class="price">₹95000/-</div>
         <div class="list">
            <p> <i class="fas fa-check"></i> photography</p>
            <p> <i class="fas fa-check"></i> hospitality</p>
            <p> <i class="fas fa-check"></i> bribe makeup</p>
            <p> <i class="fas fa-check"></i> artist & bands</p>
            <p> <i class="fas fa-check"></i> mandap</p>
            <p> <i class="fas fa-check"></i> meals & drinks</p>
            <p> <i class="fas fa-check"></i> guest invitations</p>
            <p> <i class="fas fa-check"></i> coreographer </p>

         </div>
         <a href="contact.php" class="btn">choose plan</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="heading">happy clients</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <h3>Chinmya Jena</h3>
            <p>I am totally happy on your service.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <h3>Somyashree Pattanayak</h3>
            <p>Thank you for providing this kind of service i am really satisfied on your service.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <h3>Ratnakar Nayak</h3>
            <p>I was really impressed by the infrastructure and facility. It compared well with the ones in the States.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <h3>Abhijeet Panda</h3>
            <p>Be detailed, specific, and honest. ...</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <h3>john doe</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga magni perspiciatis aut repellat nihil? Eveniet fugit eius quos architecto repellendus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>