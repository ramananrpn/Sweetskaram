<?php
$name = $_GET['name'];
$qname =strtolower($name);
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

   <!--Section: Products v.2-->
<section class="section pb-3">
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-r">

            <!--Card-->
            <div class="card card-cascade wider">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img (55).jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center no-padding">
                    <!--Category & Title-->
                    <a href="" class="text-muted"><h5>Camera</h5></a>
                    <h4 class="card-title"><strong><a href="">GoPro</a></strong></h4>

                    <!--Description-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit. Nam incidunt eius est voluptatibus.
                    </p>

                    <!--Card footer-->
                    <div class="card-footer">
                        <span class="left">1439$</span>
                        <span class="right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look"><i class="fa fa-eye"></i></a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                        </span>
                    </div>

                </div>
                <!--Card content-->

            </div>
            <!--Card-->

        </div>
        <!--Grid column-->
      </div>
    </section>
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
