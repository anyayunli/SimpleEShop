<?
$this->load->view("header");
$this->load->view("navigation");
$this->load->view("footprint");

?>

<div class="container">
		<div class="row-fluid noborder">

<div class='span3 category-image'>
<figure>

<figcaption>
<h3>Shoes</h3>
</figcaption>
<img src=''></figure>
</div>
<?
if($cate_sale1){
foreach($cate_sale1 as $row)
$this->load->view("OneItem", $row);
}
if($cate_normal1){
foreach($cate_normal1 as $row)
$this->load->view("OneItem", $row);
}
?>

<div class='span3 category-image'>
<figure>

<figcaption>
<h3>2</h3>
</figcaption>
<img src=''></figure>
</div>
<?
if($cate_sale2){
foreach($cate_sale2 as $row)
$this->load->view("OneItem", $row);
}
if($cate_normal2){
foreach($cate_normal2 as $row)
$this->load->view("OneItem", $row);
}
?>

<div class='span3 category-image'>
<figure>

<figcaption>
<h3>3</h3>
</figcaption>
<img src=''></figure>
</div>
<?
if($cate_sale3){
foreach($cate_sale3 as $row)
$this->load->view("OneItem", $row);
}
if($cate_normal3){
foreach($cate_normal3 as $row)
$this->load->view("OneItem", $row);
}
?>

<div class='span3 category-image'>
<figure>

<figcaption>
<h3>4</h3>
</figcaption>
<img src=''></figure>
</div>
<?
if($cate_sale4){
foreach($cate_sale4 as $row)
$this->load->view("OneItem", $row);
}
if($cate_normal4){
foreach($cate_normal4 as $row)
$this->load->view("OneItem", $row);
}
?>




</div><!--/.row-fluid -->
</div >

<?
$this->load->view("footer");
?>
	
