<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>WishApp | Send a wish</title>
</head>
<body>
   <div id="form">
      <header>
         <h1 class="padd-marg">WishApp</h1>
         <a href="index.php">Home</a>
      </header>
      <form action="result.php" method="POST">
         <div>
            <input class="input" type="text" name="name" placeholder="Your Name">
         </div>
         <div>
            <input class="input" type="text" name="f-name" placeholder="Friends Name">
         </div>
         <div>
            <textarea class="input" placeholder="Write your wish here" name="wish" rows="4" cols="50">Happy Birthday! I wish you long life and prosperity, Amen!</textarea>
         </div>
         <button class="my-button" type="submit" value="submit">Wish Away!</button>
      </form>
   </div>
</body>
</html>