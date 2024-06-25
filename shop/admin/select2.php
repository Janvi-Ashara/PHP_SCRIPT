<?php
    include("connect.php");
    $list_query="select* from user";
    $data_query=mysqli_query($conn,$list_query);
    ?>

    <html>
        <body>
            <h1>REGISTER RECORD</h1>
            <a href="insert.php"></a>
            <table border="2">
                <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>cpassword</th>
                    <th>Action</th>
                
                    
</tr>
<?php
    while($list_data=mysqli_fetch_array($data_query)){
        ?>
        
        <td><?php echo $list_data['id'];?></td>
        <td><?php echo $list_data['Username'];?></td>
        <td><?php echo $list_data['email'];?></td>
        <td><?php echo $list_data['password'];?></td>
        <td><?php echo $list_data['cpassword'];?></td>
        <td><a href="rdelete.php?delete_id=<?php echo $list_data['id'];?>">DELETE </a></td>
    </tr>
    <?php

		
    }
    ?>
    </table>
</body>
</html>



