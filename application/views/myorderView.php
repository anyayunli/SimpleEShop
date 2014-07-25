<?

?>
<script>
function show(val){
    document.form_cart.showorderid.value=val;
    document.form_cart.submit();
}
</script>
<section id="checkout" class="main-content">
	<div class="container">
		<div class="row-fluid noborder">

<form name="form_cart" method="post" action="<?echo base_url()?>index.php/myorderController/seedetail" class="form-horizontal">
<input type="hidden" name="showorderid">
 	<table class="table">
		<thead>
			<tr>
				<th style="width:45%">Order Date</th>
				<th style="width:25%">Total Price</th>
				<th style="width:5%">Ship To</th>
				<th style="width:25%;text-align:right">Order#</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($orders as $row){                           
                			echo'	<tr>
					<td>
						<h5><a href="">'.$row['OrderDate'].'</a></h5>
						<p><small>
							
								<button id="showdetail" style="color:#D358F7;font-weight:bold; background-color:Transparent; border:none;outline:none; font-size:1.4em;" onclick="show('.$row['OrderID'].')" ; >SEE DETAILS</button>							
						</small></p>

					</td>
					<td>'.$row['TotalCost'].'</td>
					<td>'.$row['ShippingAddress'].'</td>

					<td style="text-align:right">'.$row['OrderID'].' </td>
				</tr>';	}	 

				echo'	</tbody>
				</table>';	
		                

			

			?>
	
        </form>
	</div><!--/.row-fluid -->
	</div><!--/.container -->
</section><!--/.main-content -->

