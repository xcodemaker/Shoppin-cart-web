<?php
session_start();
if(!isset($_SESSION["uid"])){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>shopeme</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index2.css">
    <link rel="stylesheet" type="text/css" href="css/navstyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link href="css/font-awesome.css" rel="stylesheet"> 
     <link href="css/shop-item.css" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

    <!-- Bootstrap Core CSS -->
    

    <!-- Custom CSS -->
   

   

   <body style="s">
<header class="cd-auto-hide-header">
    <div class="logo"><a href="#0"><img class="img-responsive" src="images/shop me icon.png" alt="Logo" style="width: 300px; height: 100px;"></a></div>

    <nav class="cd-primary-nav">
        <a href="#cd-navigation" class="nav-trigger">
            <span>
                <em aria-hidden="true"></em>
                Menu
            </span>
        </a> <!-- .nav-trigger -->

        <ul id="cd-navigation " class="card">
                    <li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                     <li ><a href="#" ><i class="fa fa-user" aria-hidden="true"></i><?php echo "Hi,".$_SESSION["name"];?></a>
                    <li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                    <li><a href="about.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
                    <li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
        </ul>
    </nav> <!-- .cd-primary-nav -->

    
</header> 
<div class="banner-top">
    <div class="container">
        <h3 >Cart</h3>
        <h4><a href="index.php">Home</a><label>/</label>Cart</h4>
        <div class="clearfix"> </div>
    </div>
</div>
<br>
<hr>
<br>
    <!-- Page Content -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
<!-- <FORM action="https://www.paypal.com/cgi-bin/webscr" method="post" name="frmPayPal1"> -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="dhammika.s.k.mhr-facilitator@gmail.com">
  <INPUT TYPE="hidden" name="charset" value="utf-8">
  <input type="hidden" name="currency_code" value="US">
  <input type='hidden' name='rm' value='1'>
  <input type="hidden" name="cancel_return" value="http://shopeme.000webhostapp.com/cancel.php">
  <input type="hidden" name="return" value="http://shopeme.000webhostapp.com/success.php"> 
  <input type='hidden' name='custom' value='<?php echo $_SESSION["uid"];?>'> 
    <table id="cart" class="table table-hover table-condensed" style="border-color: black;">
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                            <th style="width:22%" class="text-center">Subtotal</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <tbody id="cart_product">
                        <!-- <tr id="cart_product"> -->
                            <!-- <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h4 class="nomargin">Product 1</h4>
                                        <p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$1.99</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control text-center" value="1">
                            </td>
                            <td data-th="Subtotal" class="text-center">1.99</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>                                
                            </td> -->
                        <!-- </tr> -->
                    </tbody>
                    <tfoot>
                    <tr id='cartmsg'></tr>
                        <tr class="visible-xs">
                            <td class="text-center"><strong>Total Rs.</strong><strong id="my-cart-grand-total"></strong></td>
                        </tr>
                        <tr>
                            <td><a href="profile.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total (<span style="color: red;">including discount</span>) Rs.</strong><strong id="my-cart-discount-price"></strong></td>
                            <td><!-- <a href="#" class="btn btn-success btn-block" id="Checkoutbtn">Checkout <i class="fa fa-angle-right"></i></a> -->
                                <input type="image" name="upload"
            src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
            alt="PayPal - The safer, easier way to pay online">
                            </td>
                        </tr>
                    </tfoot>
                </table>
                </form>
</div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            cart();
            function cart(){
            $.ajax({
            url : "action.php",
            method :"POST",
            data : {get_cart_product: 1},
            success : function(data){
                $("#cart_product").html(data);
                    $.ajax({
            url : "action.php",
            method :"POST",
            data : {get_total_amount: 1},
            success : function(data){
                $("#my-cart-grand-total").html(data);
                data=data-data*5/100;
                $("#my-cart-discount-price").html(data);
            }
        });
            }
        });
        }
        $("body").delegate(".qty","keyup",function(event){
       //alert("hello");
          event.preventDefault();
        var p_id=$(this).attr("pro_id");
        // alert(p_id);
        var u_id=$(this).attr("uid");
        var id="#qty-"+p_id;
        var idp="#price-"+p_id;
        var price=$(idp).val();
        var qty=$(id).val();
        var total=qty*price;
        $("#total-"+p_id).val(total);
 
});
        })
    </script>

</body>

</html>