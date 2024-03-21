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

    <h2>Update Contact:</h2>

    <?php

    include 'db.php';
    $id= $_GET['id'];

    $sql=  "SELECT *FROM names WHERE id = " .$id;
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        $row=mysqli_fetch_assoc($result);
        $cpntactname=$row['name'];
        $cpntactphone=$row['phone'];
        
    }
    ?>
    <form action="edit.php " method="POST">
        <div class="main">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name"  value=" <?php global $contactname ;  echo $contactname ?> ">
            <br><br>
            <label for="contact">Number:</label>
            <input type="number" name="contact" id="contact"  value=" <?php global $contactphone ;  echo $contactphone ?> " >
            <input type="hidden" name="id" id="id" value=" <?php global $id ;  echo $id ?> " required>
            <br><br>
            <input type="submit" value="Update">
        </div>
    </form><br><br>



   
</body>
</html>