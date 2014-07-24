<?
$this->load->view("header");
$this->load->view("navigation");
$this->load->view("footprint");

//print_r( $product);
$productid=$product['ProductID'];
?>

<section id="productDesc" class="main-content">
<div class="container">
<div class="row-fluid">
<form method="post" action="cart/<?echo $productid?>">


<div class="span6">
<div id="productCarousel" class="carousel slide">
<div class="carousel-inner">
<div class="active item">
<figure >

<img src="images/sales1.jpg"></figure>
</div>
</div>
</div>
</div>

<div class="span6">
<div id="productInfo">
<div class="control-group">
<h3><?php echo $product['ProductName'] ?></h3>
<h5><span><?echo $product['ProductPrice']?>	</span></h5>
<p><?php echo $product['ProductDescp'] ?></p>
</div>

<div class="form-actions">
<input type="text" name="productid" value=<?php echo $productid?>  hidden>
<input id="add_to_cart_button" name="addtocart" value="addtocart" class="btn btn-primary" type="submit">
</div>

</div>
</div>
</form></div><!--/.container -->

</div></section><!--/.main-content -->
<div class="container">
<h3>Recomandation</h3>
	     
<?
//$this->view->load("OneItem", $product);
//$this->view->load("footer");
?>

