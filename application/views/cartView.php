<?
$this->load->view("header");
$this->load->view("navigation");
$this->load->view("footprint");

?>
<script>

$(document).ready(function(){
		$("#update_cart").click(function(){
                    document.form_cart.command.value='update';
                    document.form_cart.submit();

			});

		$("#checkout_btn").click(function(){
                       
                       //window.location.replace("<?echo base_url()?>index.php/checkoutController");
		    document.form_cart.command.value='checkout';
                    document.form_cart.submit();

			});
		});

function del(val){
	document.form_cart.command.value='remove';
	document.form_cart.removepid.value=val;

	document.form_cart.submit();
}
</script>

<section id="checkout" class="main-content">
<div class="container">
<div class="row-fluid noborder">
<form name="form_cart" method="post" action="<?echo base_url()?>index.php/cartController/cartOPs" >
<input type="hidden" name="removepid" />
<input type="hidden" name="command" />

<?php
echo'
<table class="table">
<thead>
<tr>
<th style="width:45%">Product</th>
<th style="width:25%">Price</th>
<th style="width:5%">Qty</th>
<th style="width:25%;text-align:right">Total</th>
</tr>
</thead>
<tbody> ';

$total=0;
$i=1;
if($this->cart->contents()){
	foreach($this->cart->contents() as $prod){               
		//echo "$prod";
		$total+=$prod['subtotal'];
		$pid=$prod['id'];
		$qty=$prod['qty'];
     
				echo'	<tr>
					<td>
						<h5><a href="">'.$prod["name"].'</a></h5>
						<p><small>
							
								<button id="remove" style="color:#D358F7;font-weight:bold; background-color:Transparent; border:none;outline:none; font-size:1.4em;" onclick="del('.$pid.')" >Remove</button>							
						</small></p>

					</td>
					<td>'.$prod["price"].'</td>
					<td><input name="item_qty'.$pid.'" value="'.$qty.'" class="input-mini"></td>

					<td style="text-align:right">'.$prod['subtotal'].'</td>
				</tr>';
			}
			echo'	<tr>
				<th colspan="3">Total inc VAT</th>

				<th style="text-align:right">'.$total.'</th>
			</tr>';

		 }

		else{
			echo' <div style="text-align:center; font-size:1.5em" class="alert alert-error">There are no items in your shopping cart</div>';
		    }
			
			
				?>

				</tbody>
				</table>
				<div class="form-actions">
				<input id="update_cart"  value="Update Totals" class="btn btn-checkout" type="button" >
				<input id="checkout_btn" value="Checkout" class="btn btn-primary" type="button">
				<input id="clear_btn" name="clear" value="Clear" class="btn btn-checkout" type="submit">


				</div>
				</form>
				</div><!--/.row-fluid -->
				</div><!--/.container -->
				</section><!--/.main-content -->
				</div><!--/.wrapper -->

<?
$this->load->view("footer");
?>


