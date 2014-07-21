<div class="span3 product">
<a href="php/ItemPage.php?productid='.$product['ProductID'].'">
<figure >

<figcaption>
<h5>'.$product['ProductName'].'<br>
<span>'.$product['ProductPrice'].'</span>
<div style="color:red">NOW:'.$product['ProductPrice']*$product['Discount'].'</div>

</h5>
</figcaption>
<img src="Images/'.$product['ProductImage'].'"></figure>
</a>
</div>
	

