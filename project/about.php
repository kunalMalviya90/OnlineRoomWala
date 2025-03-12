<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Discover the difference with us. Our platform offers a diverse range of rooms, transparent pricing, and a user-friendly interface. Benefit from secure payments, responsive support, and continuous updates for a hassle-free room rental experience. Join us today for seamless, informed living space discovery.</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Search Property</h3>
         <p>Effortlessly find your ideal living space with our intuitive search tools. Explore a diverse range of properties tailored to your preferences.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Contact Agents</h3>
         <p>Connect with our dedicated agents for personalized assistance in securing your ideal living space.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Property</h3>
         <p>Experience the joy of your new living space with our thoughtfully curated properties. Elevate your lifestyle in spaces designed for comfort and satisfaction.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/miteshphoto.png" alt="">
            <div>
               <h3>Mitesh Parihar </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>1
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>"A seamless room-hunting experience! The website's user-friendly interface and diverse property options made finding the perfect room a breeze. Transparent pricing and secure transactions gave me confidence in my choice. Highly recommended!"</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/aditiphoto.jpg" alt="">
            <div>
               <h3>Aditi Kale </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>"Choosing this platform was a game-changer. The variety of rooms, responsive support, and straightforward process made my relocation stress-free. The continuous updates kept me informed, and the secure payment options added an extra layer of trust. Exceptional service all around!"</p>
      </div>


</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>