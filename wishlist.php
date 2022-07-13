<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>WishApp | wishlist</title>
</head>

<body>
   <div id="form">
      <h2>All wishes</h2><a href="index.php"><i class="fa fa-home"></i></a>
      <form action="single-result.php" method="POST">
         <input type="text" name="user" placeholder="Search your name...">
         <button type="submit" value="submit"><i class="fa fa-search"></i></button>
      </form>
      <p>
         <?php
         $servername = "localhost";
         $username = "root";
         $password = "";
         $db = "mydb";
         $conn = new mysqli($servername, $username, $password, $db);

         // Check connection
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
         }

         $sql = "SELECT name, f_name, wish FROM MyWishers";
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
               $val1 = $row["name"];
               $val2 = $row["f_name"];
               $val3 = $row["wish"];
               echo "<h4>Wish from $val1 to $val2</h4>
                     <br>
                     <div class='msg'> $val3 </div>
                     <hr>"       
               ;
   
            }
         } else {
            echo "0 results";
         }
         $conn->close();
         ?>
      </p>
      <a href="index.php"> Home </a> <br>
      <a href="index.php"> Delete all </a> 
   </div>
</body>

</html>