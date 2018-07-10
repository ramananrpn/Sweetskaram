<?php

$name = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DashBoard | <?php echo $name ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--google icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style type="text/css">
    
     @import url(https://fonts.googleapis.com/css?family=Raleway);
body {
  margin: 0px;
}
@font-face {
              font-family: 'lsr';
              src: url(font/LoveStoryRough.ttf);
              }
    .mynewfont {
                font-family: 'lsr';
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
<script type="text/javascript">
  function resizeIframe(obj) {
    var x = obj.contentWindow.document.body.scrollHeight+15;
    obj.style.height = x +'px';
  }
</script>
<body style="background-image: url(img/ivory.jpg) ;background-size: 2000px; ">
<!--Navbar-->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark zig-zag-bottom" id="nav-1">

     <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" style="height: 60px;"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="background-color: black"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav">
        <a class="link-1 nav-item" href="admin.php">Home</a>
    </ul>
          
        <ul class="navbar-nav">
  <a class="link-1 nav-item" href="admin-add.php?name=<?php echo $name ;?>" target="iframe_a">Add Item</a>
</ul>
        <ul class="navbar-nav active">
  <a class="link-1 nav-item active" href="admin-edit.php?name=<?php echo $name ;?>" target="iframe_a">Edit Items</a>
        </ul>
        <!-- Links -->

       
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
   <iframe height=" auto 100% " width="100%" src="" name="iframe_a" style="margin-top: 90px; " onload="resizeIframe(this)" ></iframe>
       
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
