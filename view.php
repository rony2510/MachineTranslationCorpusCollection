<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kothaRao</title>




<!-- bootstrap 5 -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>

</style>

  </head>
  <body>
    <h1><p style="text-align:center;"><b>kothaRao</b>:Machine Translation</p></h1>





<!-- view -->
<div class="container">


  <?php

   $servername="localhost";
   $username="root";
   $password="";
   $dbname="kotharao";

   $conn=mysqli_connect($servername,$username,$password,$dbname);
   $sql="SELECT id,bangla,hajong FROM corpus";

   $run=$conn->query($sql);

   if($run->num_rows>0) {

     echo "<table><tr><th>BANGLA</th><th>HAJONG</th></tr>";
     while($row=$run->fetch_assoc()) {


       $bangla=$row["bangla"];
       $hajong=$row["hajong"];


       echo "<tr><td>" . "</td><td>" . $row["bangla"] . "</td><td>" . $row["hajong"] . "</td></tr>";

     }
     echo "</table>";
   }
   else{
     echo "0 results";
   }



  ?>


</div>





  </body>
</html>
