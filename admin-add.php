<?php
$name = $_GET['name'];
$qname =strtolower($name);
?>

<?php
include("db-connection.php");
    if (isset($_REQUEST["subbtn"]))
    {
        /*AUTO GENERATING Item ID*/ 
        
        $item_id=time().mt_rand();
        /*--*/
        $fname = $_REQUEST["fname"];
        $f2 = $_REQUEST["f2"];
        $f5 = $_REQUEST["f5"];
        $f1 = $_REQUEST["f1"];
        $file = $_FILES["pic"]["name"];
        $path="uploads/".$file;
        $tmp_name=$_FILES["pic"]["tmp_name"];
        move_uploaded_file($tmp_name,$path);

          $add="INSERT INTO `$qname`(`id`, `name`, `image`, `250gm`, `500gm`, `1kg`) VALUES ('".$item_id."','".$fname."','".$file."','".$f2."','".$f5."','".$f1."')";
          if (mysqli_query($conn, $add)) 
       {
        ?>
        <script type="text/javascript">
          alert("Item Added Succesfully");
        </script>
        <?php
       header("Refresh:0");

       } 
      else
      {
      echo "Error updating report: " . mysqli_error($conn);
      }
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sweetskaram</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--google icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <!--=========  ICON  =======-->
    <link rel="icon" type="image/x-icon" href="img/icon.ico">
</head>
<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Raleway);
@font-face {
              font-family: 'lsr';
              src: url(font/LoveStoryRough.ttf);
              }
    .mynewfont {
                font-family: 'lsr';
                }

    @import url(https://fonts.googleapis.com/css?family=Raleway);
body {
  margin: 0px;
}
nav {
  
  text-align: center;
  font-family: Raleway;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
}
#nav-1 {
  background: white;
}

.link-1 {
  transition: 0.3s ease;
  background: white;
  color: black;
  font-size: 20px;
  text-decoration: none;
  border-top: 4px solid white;
  border-bottom: 4px solid white;
  padding: 20px 0;
  margin: 0 20px;
}
.link-1:hover {
  border-top: 4px solid brown;
  border-bottom: 4px solid brown;
  padding: 6px 0; 
}

/* Scrollbar */

::-webkit-scrollbar {
    width: 11px;
}
/* Track */

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
/* Handle */

::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #your-color;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
}

</style>
<body style="background-image: url(img/ivory.jpg) ;background-size: 2000px; ">
    <div class="container">
      <!-- Form contact -->
<form method="POST" action="#" enctype="multipart/form-data">

    <p class="h5 text-center mb-4 mynewfont" style="font-size: 50px;color: #330d00;margin-top: 10px;"><?php echo $name;  ?></p>

    <div class="md-form">
        <input type="text" id="fname" name="fname" class="form-control">
        <label for="fname">Item Name</label>
    </div>
      <div class="file-field md-form">
       
        <div class="d-flex justify-content-center">
            <div class="btn btn-mdb-color btn-rounded">
                
                <input type="file" name="pic">
            </div>
        </div>
    </div>
      <p class="" style="font-size: 30px;color: #330d00;margin-top: -70px;">Price :</p>
    <div class="md-form">
        
        <input type="number" id="f2" name="f2" class="form-control" autocomplete="off">
        <label for="f2">250 gm</label>
    </div>

    <div class="md-form">
        
        <input type="number" id="f5" name="f5" class="form-control" autocomplete="off">
        <label for="f5">500 gm</label>
    </div>

   <div class="md-form">
        
        <input type="number" id="f1" name="f1" class="form-control" autocomplete="off">
        <label for="f1">1 kg</label>
    </div>

    <div class="text-center">
        <button class="btn btn-unique" type="submit" name="subbtn">Add<i class="fa fa-paper-plane-o ml-1"></i></button>
    </div>

</form>
<!-- Form contact -->
    </div>
   
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
      <!--DISABLE RIGHT CLICK -->
      <script type="text/javascript">
          $(document).ready(function () {
        //Disable full page
        $("body").on("contextmenu",function(e){
            return false;
        });
        
        //Disable part of page
        $("#id").on("contextmenu",function(e){
            return false;
            });
        });
    </script>


</body>

</html>
