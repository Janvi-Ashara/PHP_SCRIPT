
<?php
@include 'config.php';

if(isset($_REQUEST['add_to_cart'])){

   $qry="select * from products where id=".$_REQUEST['id'];
   $res=mysqli_query($conn,$qry);
   $row=mysqli_fetch_array($res);
   
   $product_name = $row['name'];//$_POST['product_name'];
   $product_price = $row['price'];//$_POST['product_price'];
   $product_image = $row['image'];//$_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
   
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      
      $message[] = 'product added to cart succesfully';
   
   }

}

?>


<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ellementry</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
<?php
include 'header.php';
?>



<div class="container">

<section class="category">
    
<a href="category.php" class="btn" style="width: 150px;">All</a>
<a href="kitchen.php" class="btn" style="width: 150px;">kitchenware</a>
<a href="Table.php" class="btn" style="width: 150px;">Tableware</a>
<a href="Serve.php" class="btn" style="width: 150px;">Serveware</a>
<h1 class="heading"> <span> Latest </span> Products </h1>

   <div class="box-container">

      <?php      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      $i=1;
      echo "<table border=1 align='center'>";
      $path="admin/shopping cart/uploaded_img/";
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
      
      <td style='width:300px;' align='center'>
      <!-- <form action="add_to_cart.php?id=<?php echo $fetch_product['id'];?>" method="post"> -->

          <div class="box">
         
          <h3><b><?php echo $fetch_product['p_cat']; ?></b></h3></br>
           <img src=" <?php echo $path.$fetch_product['image']; ?>" alt="" height='250'width='250' align='center'>
           
         </br></br> 
         
              <h2><?php echo $fetch_product['name']; ?></h2>
    <br>
             <div class="price"><h2> ₹ <?php echo $fetch_product['price']; ?></br></h2>
             <h3><?php echo $fetch_product['p_detail']; ?>   </h3>
        
                        <br>
                        <br>
           
        <a href="add_to_cart.php?id=<?php echo $fetch_product['id'];?>&path=<?php echo $fetch_product['image'];?>&name=<?php echo $fetch_product['name'];?>&price=<?php echo $fetch_product['price'];?>" class="btn" name="addtocart">add to cart</a>
            <!-- <a href="add_to_cart.php?id=<?php echo $fetch_product['id'];?>"><button type="submit" style="width: 180px;" class="btn" name="add_to_cart">Add to Cart</button></a> -->
            <a href="heart.php" class="fas fa-heart"></a>
         </div>
        
         
      </form>

      <?php
    
       if($i%3==0)
       {
          echo "<tr>";
       }
       $i++;
      };
    };
     ?>
    

      


   </div>
   </td>
</table> 
   
</section>
   </div>



<!-- custom js file link  -->
<script src="js/script.js"></script>
<style>
   .price h2{
      color:#3abac9;
   }
    h1{
        margin: 10px;
        padding: 10px;
    }
    h2{
      font-color:#3abac9;
    }
    body{
      background: #fffff0;
    }
  .box-container {  
   display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap:1.5rem;
   justify-content: left;
   text-align: center;
   padding:3rem; 
   box-shadow: var(--box-shadow);
   border: 1px;
   border-radius: 1.5rem;
}
.box{
   margin: 15px;
   gap:2rem;
}
.category .box :hover{
    box-shadow: 0 0 20px 0px rgba(0,0, 0, 0.2);
    transform: scale(1.1);
    
}









/* media queries  */
@media (max-width:991px){
    
    html{
        font-size: 55%;
    }

    header{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

    .home{
        background-position: left;
    }

}

@media (max-width:768px){

    header .fa-bars {
        display: block;
    }

    header .navbar{
        position:absolute;
        top:100%; left:0; right:0;
        background:#eee;
        border-top: .1rem solid rgba(0,0,0,.1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header #toggler:checked ~ .navbar{
        clip-path:polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a{
        margin:1.5rem;
        padding:1.5rem;
        background:#fff;
        border:.1rem solid rgba(0,0,0,.1);
        display: block;
    }

    .home .content h3{
        font-size: 5rem;
    }

    .home .content span{
        font-size: 2.5rem;
    }

    .icons-container .icons h3{
        font-size: 2rem;
    }
    
    .icons-container .icons span{
        font-size: 1.7rem;
    }
    
}

@media (max-width:450px){
    
    html{
        font-size: 50%;
    }

    .heading{
        font-size: 3rem;
    }

}

    </style>
</body>
</html>



<?php
include 'footer.php';
?>











