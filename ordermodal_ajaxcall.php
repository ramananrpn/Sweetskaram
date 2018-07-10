<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

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

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
	</style>
<body>

		<?php  
		 if(isset($_POST["i_id"]) && isset($_POST["item"]))  
		 {  
		include("db-connection.php");
		$id=$_POST["i_id"];
		$qname = $_POST["item"];
		  $q = "SELECT  * from `$qname` where id='".$id."'";

		  $run = mysqli_query($conn,$q);
		if(mysqli_num_rows($run)>0)
		      {
		 	$item=mysqli_fetch_assoc($run);
		 }
		?>
		<center><h3><strong><?php  echo $item['name']; ?></strong></h3></center><br>
		<div class="row">
                  <div class="col-sm-12 col-md-1 col-lg-1 ">
                    <br/>
                </div>

                <div class="col-sm-12 col-md-10 col-lg-10 text-center">

               <div class="row">
                  <div class="col-sm-6 col-md-4 col-lg-4" style="margin-top: 20px;font-size: 20px;">
                    <b class="black-text">250 gm &nbsp;:&nbsp; Rs.<label id="250gm_price" class="black-text "><?php echo $item['250gm'] ?></label> /-</b>
              </div>

              <div class="col-sm-6 col-md-8 col-lg-8">
                <button onclick="add_quantity('250gm')" class="waves-effect waves-light btn green darken-3 " style="width:100px;"> <span class="material-icons " style="font-size:20px;">add</span> </button>

                &nbsp;&nbsp;&nbsp;
                <a style="width:50px;font-size: 20px;" class="btn-floating activator 	" id="250gm">0</a>
                &nbsp;&nbsp;&nbsp;

                <button onclick="del_quantity('250gm')" class="waves-effect waves-light btn  red darken-4" style="width:100px;"> <span class="material-icons " style="font-size:20px;">remove</span>  </button>
              </div></div><br />

              <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4" style="margin-top: 20px;font-size: 20px;font-size: 20px;">
                  <b class="black-text 	">500 gm &nbsp;:&nbsp; Rs.<label id="500gm_price" class="black-text 	"><?php echo $item['500gm'] ?></label> /-</b>
              </div>

              <div class="col-sm-6 col-md-8 col-lg-8">
                  <button onclick="add_quantity('500gm')" class="waves-effect waves-light btn green darken-3 " style="width:100px;" > <span class="material-icons " style="font-size:20px;">add</span> </button>

                  &nbsp;&nbsp;&nbsp;
                  <a style="width:50px;font-size: 20px;" class="btn-floating activator " id="500gm">0</a>
                   &nbsp;&nbsp;&nbsp;

                  <button onclick="del_quantity('500gm')" class="waves-effect waves-light btn  red darken-4" style="width:100px;"> <span class="material-icons " style="font-size:20px;">remove</span>  </button>
              </div>
            </div><br />

         <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4" style="margin-top: 20px;font-size: 20px;">
            <b class="black-text ">1 Kg &nbsp;:&nbsp; Rs.<label id="1kg_price" class="black-text "><?php echo $item['1kg'] ?></label> /-</b>
          </div>
          <div class="col-sm-6 col-md-8 col-lg-8">
            <button onclick="add_quantity('1kg')" class="waves-effect waves-light btn green darken-3 " style="width:100px;"> <span class="material-icons " style="font-size:20px;">add</span> </button>

                 &nbsp;&nbsp;&nbsp;
            <a style="width:50px;font-size: 20px;" class="btn-floating activator " id="1kg">0</a>
                &nbsp;&nbsp;&nbsp;

            <button onclick="del_quantity('1kg')" class="waves-effect waves-light btn  red darken-4" style="width:100px;"> <span class="material-icons " style="font-size:20px;">remove</span>  </button>
          </div>
        </div><br />

           <!--Footer-->
            <div class="modal-footer">
                
              <div class="col-sm-12 col-md-6 col-lg-6" align="center">
          <button class="waves-effect waves-light btn green darken-1 white-text" onclick="myFunction()" >
          Add to Cart</button>
          <div id="snackbar" style="height: 60px;">Added to Cart..</div>

<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6" align="center">
          <button class="waves-effect waves-light btn red darken-1 modal-action modal-close  white-text" data-dismiss="modal"
          onclick="document.getElementById('id1').style.display='none'">
          Cancel</button>
              </div>
             
            </div>
           
        </div>

       
        </div>

		<?php
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
    <script type="text/javascript">
    	   function add_quantity(id)
		{
		   num = parseInt(document.getElementById(id).innerHTML,10);
		   document.getElementById(id).innerHTML = num+1;

		   document.cookie = id+"="+parseInt(document.getElementById(id).innerHTML,10);
		}
		function del_quantity(id)
		{
		   num = parseInt(document.getElementById(id).innerHTML,10);

		   if(num - 1 >= 0)
		   {
		     document.getElementById(id).innerHTML = num-1;
		     //document.cookie = id+"="+parseInt(document.getElementById(id).innerHTML,10);
		   }
		}


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


