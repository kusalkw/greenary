<!-- 

Read more: https://html.com/tags/comment-tag/#ixzz5Y28TESie<!DOCTYPE html>
<html>
<head>
	<title>shopping Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
-->
<?php include 'partial/header.php'?>
	<div class="container">
		<br/><br/>
		<div class="col-lg-8 col-md-8">
			<div class="table-responsive">
				<h2 align="left">
					Product
				</h2></br>
				<?php
				foreach ($product as $row) {
					echo '
					<div class="col-md-4" style="padding:10px; background-color:#f1f1f1; border:1px solid #ccc; margin-bottom:16px; height:400px" align="center">
					<img src="http://localhost/greenary-master/images/'.$row->product_image.'" class="img-thumbnail" style="height:150px"/></br>
					<h4>'.$row->product_name.'<h4>
					<h3 class="text-danger">'.$row->product_price.'</h3>
					<input type="text" name="quantity" class="quantity" id="'.$row->product_id.'"/>
					</br></br>
					<button type="button" name="add_cart" class="btn btn-success add_cart" data-productname="'.$row->product_name.'" data-price="'.$row->product_price.'" data-productid="'.$row->product_id.'" />Add to cart</button>
					<h4>'.$row->product_detail.'</h4>
					</div>
					';
				}
				?>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-4" >
			<div id="cart_details">
				<h3 align="center">Cart is Empty</h3>
			</div>
		</div>
		
	</div>
	

<!--</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
-->
<?php include 'partial/footer.php'?>
<script>
$(document).ready(function(){
	$('.add_cart').click(function(){
		var product_id=$(this).data("productid");
		var product_name=$(this).data("productname");
		var product_price=$(this).data("price");
		var quantity=$('#'+product_id).val();
		if(quantity!=''&& quantity>0){
			$.ajax({
				url:'http://localhost/greenary-master/index.php/Shopping_cart/add',
				method:"POST",
				data:{product_id:product_id,product_name:product_name,product_price:product_price, quantity:quantity},
				success:function(data){
					alert("Product Aded into Cart");
					$('#cart_details').html(data);
					$('#'+product_id).val('');
				}

			});


		}
		else{
			alert("Please Enter quantity");
		}

	});
	$('#cart_details').load('http://localhost/greenary-master/index.php/Shopping_cart/load');

	$(document).on('click','.remove_inventory',function(){
		var row_id=$(this).attr("id");
		if(confirm("Are you sure you want to remove this?")){
			$.ajax({
				url:'http://localhost/greenary-master/index.php/Shopping_cart/remove',
				method:"POST",
				data:{row_id:row_id},
				success:function(data){
					alert("Product removed from Cart");
					$('#cart_details').html(data);

				}

			})
		}
		else{
			return false;

		}
	});
	$(document).on('click','#clear_cart',function(){
		if(confirm("Are you sure you want to clear cart?")){
			$.ajax({
				url:'http://localhost/greenary-master/index.php/Shopping_cart/clear',
				success:function(data){
					alert("Your cart has been clear..");
					$('#cart_details').html(data);
				}

			});

		}
		else{
			return false;

		}

	});

});
	
</script>