<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kothaRao</title>




<!-- bootstrap 5 -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  </head>
  <body>
    <h1><p style="text-align:center;"><b>kothaRao</b>:Machine Translation</p></h1>


<form class="" action="add.php" method="post">

<div class="container">



  <div class="container overflow-hidden">

  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">
       <label for="" style="text-align:center;"><b>বাংলা</b></label>
       <br>
       <textarea name="bangla" rows="5" cols="70" required></textarea>
     </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">
        <label for=""><b>হাজং</b></label>
        <br>
        <textarea name="hajong" rows="5" cols="70" required></textarea>
      </div>
    </div>
  </div>

  <div class="container">
    <input type="submit" name="" value="Submit" style="text-align:center;margin-left:1000px;padding:10px;background-color:green;font-size:20px;
    margin-top:10px;">
  </div>

  </div>

</div>
</form>



<!-- <div class="container"> -->
  <a href="view.php" style="text-align:center;" target="_blank"><p style="text-align:center;margin-top:150px;">VIEW</p></a>
<!-- </div> -->

















<script>
      $(document).on("keypress", "form", function(event) {
         if (event.keyCode === 13) {
            // event.preventDefault();
            // Alerts the user when the Enter key is pressed
            // alert("You have successfully submitted the form!");
            $(this).submit();
         }
      });
</script>






  </body>
</html>
