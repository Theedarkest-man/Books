<?php

include 'DBConn.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading" style="background-image: url('images/mj.jpeg'); width: 100%; height: 400px">
   <h3>about us</h3>

</div>

<section class="about">

   <div class="flex">

      <div class="image">
      <video width="500" height="340" autoplay muted loop>
  <source src="images/ab.mp4" >
</video>
      </div>

      <div class="content">
         <h3>More about us?</h3>
         
         <p> 

 Our mission is to provide our customers with quality and innovative products, value for money and excellent service. Books, Text-books and Stationery. We are the leaders in Afrikaans, Children’s and Mass Market fiction in SA. We have an extensive product offering, many exclusive to The Book Town.

The Book Town has long been devoted to delivering on four unique and particular strengths: range, convenience, service and value.

With range, we strive to make a broad spectrum of books available, ensuring that popular authors and current bestsellers are on display along with books of specific local interest and hidden gems. Drawing from the wide knowledge base of our passionate booksellers allows us to represent an expansive range of interests and voices, and our far-reaching network of suppliers means that, even if a particular title is not on the shelves, we can order in just about any book you should want.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Very nice and user friendly design. Gave me good study books to help with my studies</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chad James</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Fast delivery i give this a proper 4.5 star</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Stephanie Cambelle</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>books were in good condition. Very reliable provider</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john Jones</h3>
      </div>


   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deogo</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Maxine Maxwel</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>David Moogly</h3>
      </div>


   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>