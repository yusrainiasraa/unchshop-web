<?php
$host = "localhost";    
$username = "root";         
$password = "";         
$dbname="user_db";

$conn = mysqli_connect($host, $username, $password, $dbname) or die('Connection Failed');

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UnchShop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styleweb.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <a href="login_form.php" class="logo"><img src="images/Logoo.png" alt=""></a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#facility">facility</a>
         <a href="#team">team</a>
         <a href="#review">review</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home-bg">

   <section class="home" id="home">

      <div class="content">
         <h3>UNCHSHOP</h3>
         <p>Unchshop merupakan website yang berisi aneka jajanan untuk mengisi perut kosong dan juga perlengkapan untuk mempercantik rumah.
         </p>
         <a href="#about" class="btn">about us</a>
      </div>

   </section>

</div>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="images/Logoo.png" alt="">
   </div>

   <div class="content">
      <h3>Everything you want is right here</h3>
      <p>Pilihlah menu yang tersedia dan jangan lupa untuk order dijamin ga akan nyesel deh :)</p>
      <a href="products.php" class="btn">our menu</a>
   </div>

</section>

<!-- about section ends -->

<!-- facility section starts  -->

<section class="facility" id="facility">

   <div class="heading">
      <img src="images/logo1.png" alt="">
      <h3>our facility</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/makberat.png" alt="">
         <h3>Makanan Berat</h3>
         <p>Tersedia aneka macam makanan berat yang kaya akan vitamin</p>
      </div>

      <div class="box">
         <img src="images/makringan.png" alt="">
         <h3>Makanan Ringan</h3>
         <p>Tersedia berbagai cemilan untuk menemani teman-teman nugas</p>
      </div>

      <div class="box">
         <img src="images/minuman.png" alt="">
         <h3>Minuman</h3>
         <p>Tersedia berbagai minuman sebagai penghilang dahaga serta penyejuk tenggorokan</p>
      </div>

      <div class="box">
         <img src="images/aksesori.png" alt="">
         <h3>Aksesori</h3>
         <p>Tersedia Berbagai macam aksesori tersedia untuk mempercantik diri dan rumah</p>
      </div>
   </div>

</section>

<!-- facility section ends -->

<!-- team section starts  -->

<section class="team" id="team">

   <div class="heading">
      <img src="images/logo1.png" alt="">
      <h3>our team</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/novan.png" alt="">
         <h3>Ahmad Novan Alfian</h3>
      </div>
      <div class="box">
         <img src="images/ira.png" alt="">
         <h3>Yusraini Nurul Asra</h3>
      </div>
      <div class="box">
         <img src="images/lina.png" alt="">
         <h3>Linaili Himmatus Suroyya</h3>
      </div>
      <div class="box">
         <img src="images/rafi.jpeg" alt="">
         <h3>Muhammad Rafi'ar Rasyid</h3>
      </div>

   </div>

</section>

<!-- team section ends -->

<!-- review section starts  -->

<section class="review" id="review">

   <div class="heading">
      <img src="images/logo1.png" alt="">
      <h3>Review</h3>
   </div>

   <div class="row">

      <div class="image">
         <img src="images/order.png" alt="">
      </div>

      <form action="" method="post">
         <h3>reviews</h3>
         <input type="text" name="name" required class="box" maxlength="20" placeholder="enter your name">
         <input type="text" name="comment" required class="box" maxlength="20" placeholder="enter your comment">
         <input type="submit" name="send" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <a href="mailto:Unchshop@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
         <h3>our email</h3>
         <p>unchshop255@gmail.com</p>
      </div>

      <div class="box">
         <a href="https://www.instagram.com/unchshop255/" target="_blank"><i class="fab fa-instagram"></i></a>
         <h3>our instagram</h3>
         <p>"@Unchshop255"</p>
      </div>

      <div class="box">
         <a href="https://goo.gl/maps/zXkqJngfGE8P1A276" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
         <h3>shop location</h3>
         <p>Tembalang, Semarang</p>
      </div>

      <div class="box">
         <a href="https://wa.me/6282265433678" target="_blank"><i class="fas fa-phone"></i></a>
         <h3>our number</h3>
         <p>+62 822-6543-3678</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ 2022 by <a href="#team"><span>Kelompok 1</span></a> | all rights reserved! </div>

</section>

<!-- footer section ends -->


</body>
</html>