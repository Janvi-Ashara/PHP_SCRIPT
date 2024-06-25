<?php
    include("connect.php");
    $list_query="select* from contactus";
    $data_query=mysqli_query($conn,$list_query);
    ?>

    <html>
        <body>
            <h1>CONTACT RECORD</h1>
            <a href="insert.php"></a>
            <table border="2">
              <div class="box">
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>number</th>
                    <th>message</th>
                    <th>Action</th>                
</tr>
</div>
<style>
    body{
        background: white;
        
    }
     th, tr {
  border: 2px solid black;
  background:white;
  margin:2px;
  height: 50px;
  width:50px;
  backgound-position:center;
  font-align:center;
  
}
h1{
    color:#000;
}
    
    </style>
<?php
    while($list_data=mysqli_fetch_array($data_query)){
        ?>
        
        <td><?php echo $list_data['id'];?></td>
        <td><?php echo $list_data['name'];?></td>
        <td><?php echo $list_data['email'];?></td>
        <td><?php echo $list_data['number'];?></td>
        <td><?php echo $list_data['message'];?></td>
        <td><a href="cdelete.php?delete_id=<?php echo $list_data['id'];?>">DELETE </a></td>
    </tr>
    <?php

		
    }
    ?>
    </table>
</body>
</html>



