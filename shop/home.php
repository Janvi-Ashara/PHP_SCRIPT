
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
 echo $_SESSION['email'];
?>
<?php
include 'header.php';
?>


<br>
<br>
<br>
<section class="home" id="home">
<a href="category.php" class="btn" style="width: 150px;">Shop Now!</a>
    
</section>
<!-- home section ends -->

<!------------------category------------------------------->

<!-- footer section starts  -->
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
<?php
include 'footer.php';
?>