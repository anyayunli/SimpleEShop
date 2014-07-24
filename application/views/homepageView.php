<?
 $this->load->view("header");
 $this->load->view("navigation");
?>
<div style="opacity: 1;" class="wrapper">
<header class="page-header">

<figure>
<img src="<?echo base_url();?>/application/images/newyork.jpg">
</figure>
<hgroup>

<h1>Designer's Choice</h1>

<a href="php/shop.php" class="btn btn-large">Browse Shop</a>
</hgroup>
</header>

<div class="container">
<h3>SALES</h3>

<? 
foreach($product as $row){
//print_r($row);
$this->load->view("OneItem", $row); 
}
?>

</div><!--/.container -->
</div><!--/.wrapper -->

