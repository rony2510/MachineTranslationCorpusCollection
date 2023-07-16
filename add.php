
<?php

   $server="localhost";
   $user="root";
   $password="";
   $dbname="kotharao";


   $conn=mysqli_connect($server,$user,$password,$dbname);
   // mysqli_query($conn,'SET CHARACTER SET utf8'); mysqli_query($conn,"SET SESSION collation_connection ='utf8_general_ci'");
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }

   $bangla=$_POST['bangla'];
   $hajong=$_POST['hajong'];


   $sql="insert into corpus(Bangla,Hajong) values('$bangla','$hajong')";

   if ($conn->query($sql) === TRUE) {
     header('location:index.php');
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }

  ?>
