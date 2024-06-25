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

<?php
include 'header.php';
?>
<br>
<br>
<br>
<br>
<section class="home" id="home">
<a href="category.php" class="btn" style="width: 150px;">Shop Now!</a>
    
</section>

<style>
    body{
        background: #fffff0;
    }
   
element.style {
    width: 150px;
}

.btn {
    padding: 8px;
    background-color: var(--black);
    color: var(--white);
    border-radius: .5rem;
    cursor: pointer;
    margin-top: 350px;
    margin-left: 200px;
    margin-inline: auto;
    margin-right: auto;
}
.btn:hover{
    background:var(--pink);

}
    </style>
<!-- home section ends -->

<!------------------category------------------------------->
<?php


@include 'config.php';

if(isset($_REQUEST['add_to_cart'])){

   $qry="select *from products where id=".$_REQUEST['id'];
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


<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>
<section class="category">

<h1 class="heading">Products</h1>

<div class="box-container">

      <?php      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      $i=1;
      echo "<table border=1 align='center'>";
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
      <td style='width:300px;' align='center'>
      <form action="category.php?id=<?php echo $fetch_product['id'];?>" method="post">
          <div class="box">
         
          <h3><b><?php echo $fetch_product['p_cat']; ?></b></h3></br>
           <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="" height='250'width='250' align='center'>
             </br></br> 
         
             <h2><?php echo $fetch_product['name']; ?></h2>
    <br>
    <br>
             <div class="price"><h2> ₹ <?php echo $fetch_product['price']; ?></br></h2>

        <?php echo $fetch_product['p_detail']; ?>                       </br>
           
       
            <a href="category.php?id=<?php echo $fetch_product['id'];?>"><button type="submit" style="width: 180px;" class="btn" name="add_to_cart">Add to Cart</button></a>
         
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
    h1{
        margin: 10px;
        padding: 10px;
    }
    body{
        background: #fffff0;
    }
  .box-container {  display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap:1.5rem;
   justify-content: left;
   text-align: center;
   padding:3rem; 
   box-shadow: var(--box-shadow);
   border: 1px;;
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
    </style>



<!--blog section starts -->

<section class="about" id="about">

    <h1 class="heading"> <span> Our </span> blog </h1>

    <div class="row">

       

        <div class="content">
            <img src="img\KITCHEN-DECOR_DSC2149-768x432.jpg" width="1220px">
            <h3>* A sustainable switch in your daily life *</h3>
            
            <!-- <a href="#" class="btn">learn more</a> -->
        </div>

    </div>

    <div class="box-container">

    <div class="box">
    <h1 style="text-align: center";>Decor that makes great Raksha Bandhan gifts</h1>
    <img src="img\rakhi-feature-blog.jpg" width="600px" >
    <P class="heading">
        It does not matter if you are busy with your routine and might have not called your sibling in a few weeks. Or maybe you had a heartfelt conversation last night. 
        For all kinds of brother-sister bonds,Rakshanbandhan is the perfect occasion to leave everything aside and cherish the bond.
        Enhancing traditions over the years.
    </p>
    
        
</div>



    <div class="box">
    <h1 style="text-align: center";>Kitchen add-one under Rs.500 which you might want to try next</h1>
    <img src="img\Kitchenware_Organiser-1-768x432.jpg" width="600px" >
    <P class="heading">
        Post the pandemic,most of us have built a stronger bond with cooking,even if it is learning how to make basic food.
        But for people who are new to this as well,some budget-friendly options by ellementry might elevate that experience for you.
        As it has always been believed.
    </p>
    
      
</div>



    <div class="box">
    <h1 style="text-align: center";>Top picks from our mug collection to set the monsoon mood</h1>
    <img src="img\mug-feature.jpg" width="600px" >
    <P class="heading">
       If you wonder what exactly soothes us. Perhaps it is gripping onto your favourite beverage and taking sips in between as it 
       syncs with the rumbling sound of thunder and rains.
       Your favourite comfort drink may or may not change but you can keep switching between your favourite mugs.
       Get your favourite cafe vibe.
    </p>
    
      
</div>



    <div class="box">
    <h1 style="text-align: center";>Ceramic we love during monsoons and they love us back</h1>
    <img src="img\ceramic-serveware.jpg"width="600px" >
    <P class="heading">
      As much as we love storing, cooking and serving ceramics, they can also be your best friends during monsoons.
      Don't we like using serveware and kitchenware which is durable and easy to maintain throughtout the year?
      Handcrafted, handpainted and shaped to serve your purpose elegantly is what the collection is about.
      Do you wonder?
    </p>
    
      
</div>

    <div class="box">
    <h1 style="text-align: center";>Lighting and furniture adding up to your monsoon vibes</h1>
    <img src="img\66266677_2424563827789033_3733167148273500160_o-1-768x434.jpg"width="600px" >
    <P class="heading">
       While it pours in almost every part of india, everyone is either seeking comfort or creating comforting and cosy vibes 
       in their homes. No matter if you enjoy getting drenched in the water every monsoon or just like observing everything at your home.
       In the middle of urban living where greenary.
    </p>
    
      
</div>



    <div class="box">
    <h1 style="text-align: center";>There are no such things as too many trays!</h1>
    <img src="img\3-8-540x303.jpg"width="600px" >
    <P class="heading">
       We are living in the times of DIY.
    Everything you own is a multi-purpose product.
    It can be used in more than one way.
    All you need is a creative angle for your interiors.
    For example, Your wine bottles work like wonder if you keep fairy lights in them. Or you can use it.
    </p>
    
      
</div>
       
    



</section>
    
<!--contact section ends -->

<!-- footer section starts  -->

<?php
include 'footer.php';
?>