<?php

    include 'config.php';

    if (isset($_POST['post_comment']))
    
        $name = $_POST['name'];
        $message = $_POST['message'];

        $sql = "INSERT INTO demo(name , message)
        VALUES ('$name', '$message')";
        
        if ($conn->query($sql) === TRUE) {
        echo "";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
 ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Comment System PHP | National coding</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="post" class="form">
            <input type="text" class="name" name="name" placeholder="name">
            <br>
            <textarea name="message" cols="30" rows="10" class="message" placeholder="message"></textarea>
            <br>
            <button type="submit" class="btn" name="post_comment">Post Comment</button>
        </form>
    </div>
    <div class="content">
        <?php
            $sql = "SELECT * FROM demo";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["message"]. "<br>";
              }
            }
        ?>
        <!-- <?php echo $row['name'];?>
        <?php echo $row['message'];?> -->

      
    </div>
</body>
</html>
