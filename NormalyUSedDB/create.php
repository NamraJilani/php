

<?php


require "connection.php";


if (isset($_POST ["btn"]))
{

   $prodName = $_POST['prodName'];
   $prodDesc = $_POST['prodDesc'];
   $prodPrice = $_POST['prodPrice'];


 echo '<br>', $prodName ,'<br>' , $prodDesc ,'<br>', $prodPrice;
}

$insertQuery = "INSERT INTO products (prodName , prodDesc , prodPrice) VALUES ('$prodName' , '$prodDesc' , '$prodPrice' ) ";


$result = mysqli_query($connection , $insertQuery);


if($result)
{
    echo " <br> Data Inserted Successfully";
}
else
{
    echo " <br> Data Inserted Failed";
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <h1 class="text-center">Add Products</h1>


    <form action = "" method = "post">
        ProductName: <input type = "text" name = "prodName"> <br>
        ProductDescription: <input type = "text" name = "prodDesc"> <br>
        ProductPrice: <input type = "text" name = "prodPrice"> <br>
        <input type="submit" value = "submit" name = "btn">
 </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>