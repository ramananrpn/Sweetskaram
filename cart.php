<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sweetskaram</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Materialize Open -->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

  <!-- Materialize Close -->

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
 <!-- main content2 open  -->

    <div class="row ">

    <div class="col-sm-12 col-md-1 col-lg-1">
      <br />
    </div>

      <div class="col-sm-12 col-md-10 col-lg-10" align="center">
        <!-- Promo Content 2 goes here -->
        <table class="bordered centered  responsive-table blue-grey-text white">
        <thead class="white blue-text" style="font-size:18px;">
          <tr>
              <th data-field="id">S.No</th>
              <th data-field="name">Name</th>
              <th data-field="package">Package</th>
              <th data-field="qty">Quantity</th>
              <th data-field="price">Unit Price</th>
              <th data-field="sub_price">Sub Total</th>
              <th data-field="action">Action</th>
          </tr>
        </thead>
     <tbody>  <tr>
                  <td class="">&nbsp;</td>
                  <td class="">&nbsp;</td>
                  <td class="">&nbsp;</td>
                  <td class="">No Items in cart</td>
                  <td class="">&nbsp;</td>
                  <td class="">&nbsp;</td>
                  <td>&nbsp;</td>
              </tr><script>document.getElementById('print_btn').setAttribute('disabled', 'disabled');</script></tbody></table> </div>


    </div>


   <!-- main content2 close  -->
  <br /><br />

  <!--  2nd and 3rd row open -->


   <div class="row">

 <div class="col-sm-12 col-md-1 col-lg-1">
 <br />
 </div>

 <div class="col-sm-12 col-md-10 col-lg-10">

 <!-- panel open -->
 <div class="card blue lighten-3" style="float: right;width: 300px;">
            <div class="card-content white-text">

     <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-7">
          <label class="white-text w3-large">No. of items:</label>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5">
      <label class="white-text w3-large">0</label>
        </div>
      </div>

     <div class="row">
        <div class="col-sm-12 col-md-7 col-lg-7">
          <label class="white-text w3-large">Total Amount:</label>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5">
      <label class="white-text w3-large">Rs.0/-</label>
        </div>
      </div>
            <hr />

<button  name="no_items" class="waves-effect waves-light btn grey disabled" style="width:250px;">No Item(s) in cart...</button>          </div>
          </div>
 <!-- panel close -->

 </div>


  <div class="col-sm-12 col-md-1 col-lg-1">
 <br />
 </div>

 </div>




  <br />


   
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <!--Right click Script-->
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
