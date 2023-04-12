
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>HTML Document</title>
   </head>
   <body>
   <a href="index.php">home</a>
   <a href="cart.html">cart</a>
   <a href="category.html">category</a>
   <p>header</p>
      <p>
         <b>
            <?php
              $uri = $_SERVER['REQUEST_URI'];
              //echo $uri;
              if ($uri == '/cart.html') {require 'cart/main.php';}
              if ($uri == '/category.html') {require 'category/main.php';}
            ?>
             
         </b>
      </p>
      
<p>footer</p>
   </body>
</html>








