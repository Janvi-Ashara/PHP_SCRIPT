
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ellementry</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Ellementry</a>

    <nav class="navbar">
  
        <a href="home.php">home</a>
        <a href="category.php">product</a>
        <a href="collections.php">collections</a>
        <a href="blog.php">blog</a>
        <a href="contactus.php">contact</a>
       
    </nav>

    <div class="icons">
   
    <?php
     /* include 'connect.php';
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);
      
     */

      ?>
        
         <a href="cart.php" class="fas fa-shopping-cart"><span><?php// echo $row_count; ?></span></a>
        <!-- <a href="heart.php" class=<i class="fa-solid fa-heart"></i> -->
        <a href="heart.php" class="fas fa-heart"></a>
        <a href="reg.php" class="fas fa-user"></a>
        <a href="logout.php" class="fas fa-power-off"></a> 
        
        
    </div>

</header>
</body>

   
</html>