<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nabin Contact application</title>
</head>
<body>
    <header>
        <h1>Nabu contact App </h1>
    </header>
    <form action="adddata.php " method="POST">
        <div class="main">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="contact">Number:</label>
            <input type="number" name="contact" id="contact" required>
            <br><br>
            <input type="submit" value="Submit">
        </div>
    </form><br><br>
    <hr>
    <h2>List of contact</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Phone No.</th>
            <th>Action</th>
        </tr>




        <?php
        include('db.php');
        $sql="SELECT * FROM names";

        $result=mysqli_query($conn,$sql);
         
        if($result)
        {
            while($row = mysqli_fetch_assoc($result) )
        {
            $id=$row['id'];
            $name=$row['name'];
            $phone=$row['phone'];
            ?>

           <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $phone ?></td>
            <td>
                <a href="update.php?id=<?php echo $id ?>">Update</a>
                <a href="delete.php?id=<?php echo $id ?>">Delete</a>
                
            </td>
           
        </tr>
        <?php
        }
    }

        ?>
    </table>
</body>
</html>