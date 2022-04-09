<?php 
include './inc/header.php';
include './inc/menu.php'

?>
<?php 
include './inc/Connection.php';
if(isset($_SESSION['user'])){
	$user_id =  $_SESSION['user']['id'];
	if($_REQUEST['data_product_id']){
		$id =  $_REQUEST['data_product_id'];
		$sql = "select * from product where id=$id";
		$sqlselect 	= $con->query($sql);
		
		if($sqlselect->num_rows > 0){
			$product = mysqli_fetch_assoc($sqlselect);
		}else{
			$product = [];
		}
		$product_id = $product['id'];
		$name = $product['name'];
		$price = $product['discount_price'];
		$qty = 1;
		$total = $qty*$price;
		
		
		$sql =  "select * from cart where user_id='$user_id' and product_id = $product_id";
		
		$res = $con->query($sql);
		// print_r($sql);
		if($res && $res->num_rows == 1){
			?><script>alert('product already exist in cart'); window.location.back();</script>
	<?php		 
		}else{
			$ins = "insert into cart(name, price,qty,total,user_id,product_id) values('$name','$price','$qty','$total','$user_id','$product_id')";
			$con->query($ins);
		}
		
	
	}
	$sql =  "select * from cart where user_id=$user_id";
	$productList = $con->query($sql);
	// print_r(mysqli_fetch_all($productList));
	// exit;
	$CartItemList= array();

	foreach($productList as $val){
		$productid = $val['product_id'];
		$sql =  "select * from product where id=$productid";
		$resultSingleproduct = $con->query($sql);
		$singlitem = mysqli_fetch_assoc($resultSingleproduct);
		$singlitem['qty'] = $val['qty'] ? $val['qty'] : 1;
		$singlitem['cart_id'] = $val['id'];
		$singlitem['total'] = $val['qty'] ? ($val['qty'] * $singlitem['discount_price']) :  (1 * $singlitem['discount_price']);  
		array_push($CartItemList,$singlitem);
}

	// echo "<pre>";
	// print_r($CartItemList);
	// exit;
	// echo "<pre>";
	// print_r(mysqli_fetch_all($CartItemList));
	// exit;
}
?>
    <!-- END nav -->

 <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
							<form method="post" id="checkoutForm" action="javascript:;">
							<?php if(($CartItemList)): foreach($CartItemList as $val):?>
							
						      <tr class="text-center-<?=$val['cart_id']?>">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(assets/images/<?=$val['image']?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?=$val['name']?></h3>
						        	<p><?=$val['small_text']?></p>
						        </td>
						        
						        <td class="price discount_price"><?=$val['discount_price'];?></td>
						        
						        <td class="quantity1">
						        	<div class="input-group mb-3">
					             	<input type="number" data-cartid="<?=$val['cart_id']?>" data-price="<?=$val['discount_price']?>" name="quantity[]" class="quantity-update form-control input-number" 
					             	value="<?php 
					             	if(!$val['qty']) { echo '1';}else{ echo  $val['qty'];} ?>" min="1" max="100">
					          	</div>
					          </td>
						        <input type="hidden" name="cart_id[]" value="<?=$val['cart_id']?>">
						        <input type="hidden" name="product_id[]" value="<?=$val['id']?>">
						        <input type="hidden" name="cart_id[]" value="<?=$val['cart_id']?>">
						        <input type="hidden" name="name[]" value="<?=$val['name']?>">
						        <input type="hidden" name="image[]" value="<?=$val['image']?>">
						        <input type="hidden" name="price[]" value="<?=$val['discount_price']?>">
						        <td class="total">
								<?=$val['total']?>
								</td>
						      </tr><!-- END TR-->
							  <?php endforeach; else:?>
								<h4>No data in cart</h4>
								<?php endif; ?>
						    </tbody>
						  </table>
							
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    		
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<!-- <p class="d-flex">
    						<span>Subtotal</span>
    						<span>$20.60</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>$0.00</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>$3.00</span>
    					</p>
    					<hr> -->
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span class="finalTotal">$17.60</span>
    					</p>
    				</div>
    				<p><button type="submit" value="submit" class="btn btn-primary py-3 px-4 checkout">Proceed to Checkout</button></p>
    			</div>

				</form>
    		</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
   
  
<?php
include './inc/footer.php';
?>
<script>
	
	setTimeout(() => {
		$(document).ready(function(){
		var sum =  0;
		$('.total').each(function(){
        sum+=Number(parseFloat($(this).text()));
        });
		$(".finalTotal").html("RS."+sum);
	})
	// id
	}, 1000);
	
	$(".quantity-update").on('change',function(){
		var quantity = $(this).val();
		var price = $(this).data("price");
		var total =  parseFloat(quantity) * parseFloat(price); 
		var cart_id =  $(this).data('cartid');
		$(".text-center-"+cart_id).find('.total').html(total);
		var sum =  0;
		$('.total').each(function(){
			sum+=Number(parseFloat($(this).text()));
        });
		$(".finalTotal").html("RS."+sum);
		$.ajax({
			url:'ajax.php?type=quantity_update',
			method:'POST',
			data:{'cart_id':cart_id,'qty':quantity,'price':price,'total':total}


		})
	})
	
	$(".checkout").on('click',function(){	
		if($("form#checkoutForm").submit()){

		var formData = $("#checkoutForm").serializeArray();
		console.log(formData);
		debugger
		var data = [];
		var finalArr = [];

		$.ajax({
			url:'ajax.php?type=checkout',
			method:'POST',
			data:formData,
			success:function(response){
				window.location.href = "checkout.php";
			}

		})
	}
})
	</script>
  <!-- loader -->
 