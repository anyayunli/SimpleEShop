<section id="checkout" class="main-content">
	<div class="container">
		<div class="row-fluid noborder">

<form name="form_cart" method="post" action="getorder.php" class="form-horizontal">
<input type="hidden" name="showorderid">
 	<table class="table">
		<thead>
			<tr>
				<th style="width:25%">Order#</th>
				<th style="width:25%">ProductID</th>
				<th style="width:5%">ProductQty</th>
				<th style="width:25%;text-align:right">ProductPrice</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach($products as $row){                          
                                $pid=$row['ProductID'];
             			echo'	<tr>
					<td>
						<h5><a href="">'.$row['OrderID'].'</a></h5>

					</td>
					<td>'.$row['ProductID'].'</td>
					<td>'.$row['ProductQty'].'</td>

					<td style="text-align:right">'.$row['ProductPrice'].' </td>
				</tr>';	}	 

				echo'	</tbody>
				</table>';	
		                

			

			?>
	
        </form>
	</div><!--/.row-fluid -->
	</div><!--/.container -->
</section><!--/.main-content -->

