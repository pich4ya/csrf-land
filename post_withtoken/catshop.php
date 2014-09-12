<?php require_once '../init.php'; ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Pichaya Morimoto">
		<title> Pwnladin's Cat Shop </title>
		<script src="../assets/js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
		<style type="text/css"> 
        #buy-box{ margin-top: 100px; } 
        .navbar{ background-color: #F2F2F2; }
        </style>
	</head>
	<body>
<div class="navbar navbar-custom navbar-fixed-top">
 <div class="navbar-header"><a class="navbar-brand" href="#">Pwnladin's Cat Shop</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a href="catshop.php">Catalog</a></li>
        <li><a href="../about.php">About us</a></li>
        <li>&nbsp;</li>
      </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="buy-box" class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="as">
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../assets/images/as.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">American Shorthair</a></h4>
                                <h5 class="media-heading"> by <a href="#">Xelenonz</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="quantity" value="3">
                        </td>
                        <td id="price" class="col-sm-1 col-md-1 text-center"><strong>500 ฿</strong></td>
                        <td id="total" class="col-sm-1 col-md-1 text-center"><strong>1500 ฿</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr id="sf">
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="../assets/images/sf.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Scottish Fold</a></h4>
                                <h5 class="media-heading"> by <a href="#">LongCat</a></h5>
                                <span>Status: </span><span class="text-warning"><strong>Ships In 2-3 Weeks</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="quantity" value="2">
                        </td>
                        <td id="price" class="col-md-1 text-center"><strong>300 ฿</strong></td>
                        <td id="total" class="col-md-1 text-center"><strong>600 ฿</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Username</h5></td>
                        <td class="text-right"><h5><strong><?php echo $name; ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Your Money</h5></td>
                        <td class="text-right"><h5><strong><?php echo $money; ?> Baht</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>2100 ฿</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <form id="pay-form" action="payment.php" method="post">
                            <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>" />
                            <input type="hidden" name="total_cost" value="2100" />
                            <button id="checkout" type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Checkout
                            </button>
                        </form>
                        </td>
                        <td>
                        <button id="topup" type="button" class="btn btn-success">
                             Top Up<span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
$(function(){
    /* AJAX Style 
    $('#checkout').click(function(e){
        e.preventDefault();
        var csrf_token = $('input[name="csrf_token"]').val();
        $.ajax({
            url: 'payment.php',
            type: 'post',
            data: 'submit=true&total_cost=2100&csrf_token='+csrf_token,
            success: function() {
                location.reload();
            }
        });
    });
    */

	$('#topup').click(function(e){
		e.preventDefault();
		$.ajax({
            url: 'catshop.php',
            type: 'post',
            data: 'topup=1',
            success: function() {
            	location.reload();
            }
        });
		
	});
});</script>
	<!--
	Bootstrap Snippet by amatellanes
	Images Credit:
	https://upload.wikimedia.org/wikipedia/commons/0/0c/American_Shorthair.jpg
	http://wfiles.brothersoft.com/w/white-scottish-fold-lovely_95171-1280x800.jpg
	https://gs1.wac.edgecastcdn.net/8019B6/data.tumblr.com/c061f5c31f43d420d7d9b20528939a72/tumblr_mkmoplv1k61qzrlhgo1_500.jpg
	-->
	</body>
</html>