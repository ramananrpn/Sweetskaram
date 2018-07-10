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
  overflow-x: hidden;
  overflow-y: scroll;
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
.container {
  position: relative;
  width: 300px;
  height: 250px;
}

.image {
  position: relative;
  display: block;
  width: 280px;
  height: 220px;
}

.overlay {
  position: absolute;
  bottom: 0px;
  left: 0;
  right: 0;
  background-color: #330d00;
  overflow: hidden;
  width: 0;
  height: 100%;  
  transition: .5s ease;
}

.container:hover .overlay {
  width: 100%;

}

.text {
  white-space: nowrap; 
  color: white;
  font-family: Raleway;
  font-size: 18px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
    top: 12px;
margin: 0 auto;
left: 100%;

}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

</style>
<body style="background-image: url(img/ivory.jpg) ;background-size: 2000px; ">
<!--Navbar-->
  
<nav class="navbar navbar-expand-lg fixed-top navbar-dark zig-zag-bottom" id="nav-1">

     <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" style="height: 60px;"></a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="background-color: black"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav">
        <a class="link-1 nav-item" href="index.php">Home</a>
    </ul>
          <!-- Dropdown -->
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle link-1" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black">Categories</a>
                <div class="dropdown-menu dropdown-primary " aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Sweets</a>
                    <a class="dropdown-item" href="#">Savouries</a>
                    <a class="dropdown-item" href="#">Specials</a>
                </div>
            </li>
  
        </ul>
        <ul class="navbar-nav">
  <a class="link-1 nav-item" href="#">Contact</a>
</ul>
  <ul class="navbar-nav ml-auto">
  <a><i class="material-icons" style="font-size:50px ">shopping_cart</i></a>
 
  </ul>
        <!-- Links -->

       
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
  <p class="h5 text-center mb-4 mynewfont" style="font-size: 50px;color: #330d00;margin-top: 110px;"><?php echo $name;  ?></p>
  
  <?php
  include("db-connection.php");
  $q = "SELECT  * from `$qname`";
  $run = mysqli_query($conn,$q);
    if(mysqli_num_rows($run)>0)
      {
      $count=0;
      while($item=mysqli_fetch_assoc($run))
      {
         if (($count%5)==0){

          ?> <div class="row" style="">
                 <?php
        }
        ?>
        <div class="col-md-3">
        <!--Card-->  

        <!--CONTAINER-->
          <div class="container">
          <img src="uploads/<?php echo $item['image']; ?>" alt=" " class="image">
             <h2 class="text-center " style="background-color: rgba(0, 0, 0,0.1);position: absolute;margin-left: 15px;color: #330d00;font-size: 25px;width: 250px;font-family: Raleway;
"><span><strong><?php echo $item['name']; ?></strong></h2>
            <div class="overlay">
              <div class="text">
               <p><b>250 gm : Rs.<?php echo $item['250gm']; ?><br /><br />
              500 gm : Rs.<?php echo $item['500gm']; ?><br /><br />
              1 kg : Rs.<?php echo $item['1kg']; ?><br /><br />
              </b></p>
<!-- Default button -->
<button type="button" class="showmodal btn btn-default  "   id="<?php echo $item['id']; ?>"  style="margin-top: -20px;font-size: 15px;font-family: RaleWay">ORDER</button>

              </div>

            </div>
          </div>
        </div>


        <!-- ORDER MODAL -->
<div class="modal fade" id="ordermodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Place Order</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
                <!-- HIDDEN ITEM ID-->
                    <div class="itemid" >
                      <input type="hidden" name="iid" id="iid" value=""/>
                    </div>
            <!---->
            <div id="orderbody" class="modal-body">
                
            </div>
            <!--Footer-->
           <!-- <div class="modal-footer">
                
              <div class="col-sm-12 col-md-6 col-lg-6" align="center">
          <button class="waves-effect waves-light btn green darken-1 white-text" onclick="add_to_cart('1','1')" >
          Add to Cart</button>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6" align="center">
          <button class="waves-effect waves-light btn red darken-1 modal-action modal-close  white-text"
          onclick="document.getElementById('id1').style.display='none'">
          Cancel</button>
              </div>
             
            </div>-->
        </div>
        <!--/.Content-->
    </div>
</div>
 <div id="snackbar" style="height: 60px;">Added to Cart..</div>

<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
<!--Order Modal -->
     <?php
                $count++;
                    if(($count+1)%5==0)
                    {
                      echo '</div> <br>';
                      $count=0;
                    }  
          }
        }
?>
  
    


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
      <!--MODAL AJAX-->
      <script type="text/javascript">

 $(document).ready(function(){ 
      $('.showmodal').click(function(){  
        //alert("hi");
           var i_id = $(this).attr("id");  
             $(".itemid #iid").val( i_id );
           $.ajax({  
                url:"ordermodal_ajaxcall.php",  
                method:"post",  
                data:{i_id:i_id,"item" : "<?php echo $qname; ?>"},  
                success:function(data){  
                     $('#orderbody').html(data);  
                    
                     $('#ordermodal').modal("show");  
                }  
           });  
      });  
 });  

</script>

   

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
