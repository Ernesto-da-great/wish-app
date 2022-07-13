<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>WishApp | Your Wishes</title>
</head>

<body>
   <div id="form">
   <a href="index.php"> Home </a>  <a href="index.php"> Delete all your wishes </a>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "mydb";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $db);

      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }
      $val4 = $_POST['user'];
      $sql = "SELECT name, f_name, wish FROM MyWishers WHERE f_name = '$val4'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
         // output data of each row
         while ($row = $result->fetch_assoc()) {
            $val2 = $row['name'];
            $val3 = $row['wish'];
            echo "<h4>Wish to $val4 from $val2</h4>
               <br>
               <div class='msg'> $val3 </div>
               <hr>";
         }
      } else {
         echo "0 results";
      }
      $conn->close();
      ?>
   </div>
</body>

</html>