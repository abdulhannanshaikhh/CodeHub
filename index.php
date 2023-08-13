<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cod€Hub/login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">
       <img src="media/logoo.png" alt="logo" class="logoimg">
      <a href="home.html" class="logo">Welcome to Cod€Hub</a>

      <div class="icons">
         <a href="index.php"><div id="user-btn" class="fas fa-user"></div></a>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

   </section>

</header>   
<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="https://static.vecteezy.com/system/resources/previews/007/296/443/original/user-icon-person-icon-client-symbol-profile-icon-vector.jpg" class="image" alt="">
      <h3 class="name">User</h3>
      <p class="role">Profession</p>
<h1>Profile</h1>
   </div>

   <nav class="navbar">
      <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="#"><i class="fas fa-question"></i><span>About</span></a>
      <a href="#"><i class="fas fa-star"></i><span>Reviews</span></a>
      <a href="#"><i class="fas fa-chalkboard-user"></i><span>Services</span></a>
      <a href="#"><i class="fas fa-headset"></i><span>Contact us</span></a>
   </nav>

</div>

<section class="form-container">

   <form action="login.php" method="POST" >
      <h3>login now</h3>
      <p>your email <span>*</span></p>
      <input type="email" name="user" placeholder="enter your email" required maxlength="50" class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="pass" placeholder="enter your password" required maxlength="20" class="box">
      <a href="home.html"><input type="submit" value="login new" name="submit" class="btn"></a>
   </form>

</section>

<footer class="footer">

   &copy; copyright @ 2022 by <span>Cod€Hub</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>