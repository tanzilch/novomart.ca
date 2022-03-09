@extends('layouts.main')

@section('title', 'Products')

@section('content')
<div class="px-4 px-lg-0">
	<div class="text-center mt-2 d-lg-block">
		{{-- <p class="h1 mb-0 cstm-fontSize" style="font-size: 80px">Place Your Order</p> --}}
	</div>
	<!-- For demo purpose -->
	 <!-- PAGE-HEADER -->
    <div class="col-md-12 page-header">
        <h1 class="page-title">Fill Out the Form</h1>
		<h1 class="page-title text-left">Total Price in Cart = <span id="total-price">{{$totalPrice}}</span></h1>
			
    </div>
	
    <!-- PAGE-HEADER END -->
	<!-- End -->
	<div class="pb-5">
		<div class="">
			<div class="row">
				
			<div class="p-2 bg-success text-white d-flex justify-content-between mb-2">
				<div class="ml-2 mt-2" id="message"></div>
				<div class="mr-2"> <a href="#" data-toggle="modal" data-target="#myModal1" class="btn btn-light mr-2 py-1">Show Cart</a> <i class="fas fa-cart-shopping"></i> Cart (<span id="total-item">{{Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</span>)</div>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-12 p-2 bg-white shadow-sm mb-5">

					<!-- Shopping cart table -->
					<div class="table-responsive">
						<table class="table">
							<thead class="text-left">
								<tr>
									<th scope="col" class="border-0 bg-light">
										<div class="p-2 px-3 text-uppercase">Sr. #</div>
									</th>
									<th scope="col" class="border-0 bg-light">
										<div class="p-2 px-3 text-uppercase">Product</div>
									</th>
									<th scope="col" class="border-0 bg-light">
										<div class="py-2 text-uppercase">Price</div>
									</th>
									<th scope="col" class="border-0 bg-light">
										<div class="py-2 text-uppercase">Quantity</div>
									</th>
									<th scope="col" class="border-0 bg-light">
										<div class="py-2 text-uppercase">Total</div>
									</th>
									<th scope="col" class="border-0 bg-light">
										<div class="py-2 text-uppercase text-center">Action</div>
									</th>
									
								</tr>
							</thead>
							<tbody>
								@php
									$x=1;
								@endphp
								@foreach($products as $product)
								@foreach($product->variants as $variant)
								
								<tr class="product-row">
									<td class="text-center align-middle">{{$x++;}}</td>
									<th scope="row" class="border-0">
										<div class="p-2">
											<img src="{{$product->images[0]->src}}" alt="" width="70" class="img-fluid rounded shadow-sm">
											<div class="ml-3 d-inline-block align-middle">
												<h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle ">{{$product->title}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: {{$variant->title}}</span>
											</div>
										</div>
									</th>
									<td class="align-middle"><strong>${{$variant->price}}</strong></td>
									<td class="align-middle text-center">
										<form action="" method="post">
											@csrf
											<div>
											</div>
										<div class="mr-2">	
											<input type="hidden" id="productId-{{$variant->id}}" value="{{$variant->id}}">
											<select class="form-control  mb-1 quantity-selector dropdown-arrow" id="qnty-slct-{{$variant->id}}">
												<option>Select quantity</option>
												<option>100</option>
												<option>200</option>
												<option>300</option>
												<option>400</option>
												<option>500</option>
												<option>600</option>
												<option>700</option>
												<option>800</option>
												<option>900</option>
												<option>1000</option>
												<option>Custom</option>
											</select>
											<div class="custom-value" style="display:none">
												<input type="number" id="qnty-cstm-{{$variant->id}}" class="form-control custom-quantity" min="25">
												<p class="text-nowrap mini-value text-danger text-left mb-sm-n1" >Minimum Order Quantity is 25</p>
											</div>
										</div>
										
									</td>
									<td class="align-middle text-center w-15">
										<input type="number" readonly id="" value="" class="form-control product-price">
									</td>
									<td class="align-middle text-center">
										<div class="h-100 d-flex justify-content-center align-middle">
											<button type="submit" 
											data-name="{{$product->title.'---'.$variant->title}}" 
											data-price="{{$variant->price}}" 
											data-select="qnty-slct-{{$variant->id}}" 
											data-custome="qnty-cstm-{{$variant->id}}" 
											data-product="productId-{{$variant->id}}"
											data-image="{{$product->images[0]->src}}" 
											class="text-white btn btn-success submit-btn">Add to Cart <i class="fas fa-arrow-right"></i></button>
										</div>
										
									</td>
									
								</form>
								</tr>
								@endforeach
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- End -->
				</div>
			</div>
			<!-- <div class="row py-5 p-4 bg-white rounded shadow-sm">
				<div class="col-lg-6">
					<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
					<div class="p-4">
						<p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
						<div class="input-group mb-4 border rounded-pill p-2">
							<input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
							<div class="input-group-append border-0">
								<button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
							</div>
						</div>
					</div>
					<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
					<div class="p-4">
						<p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
						<textarea name="" cols="30" rows="2" class="form-control"></textarea>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
					<div class="p-4">
						<p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
						<ul class="list-unstyled mb-4">
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
							<li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
								<h5 class="font-weight-bold">$400.00</h5>
							</li>
						</ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>
<!-- ----------popup------------ -->
<div class="modal fade  come-from-modal right cart-modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-teal-lightest">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Carts</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body pt-0">
            	<div id="cart-data">
               
			            <!-- <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
			                <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i>
			            </div> -->
			  	</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#checkoutModal">Checkout</button>
            </div>
       
        </div>
    </div>
</div>
<!-- checkout modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Checkout Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('product.mail')}}" method="post">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name</label>
            <input type="text" class="form-control" required name="first_name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Last Name</label>
            <input text class="form-control" required name="last_name">
          </div>
          <div class="form-group mb-7">
            <label for="message-text" class="col-form-label">Email</label>
            <input type="email" class="form-control" required name="email">
          </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-success">Order</button>
	      </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('customJs')
<script type="text/javascript">
	$(document).ready(function(){
		ShowToCart();
		/*for custom select*/
		$(".quantity-selector").change(function(){
			var value = $(this).val();
			if(value=="Custom")
			{
				$(this).next().show();
				$(".mini-value").show();
			}
			else
			{
				$(this).next().hide();
				$(".mini-value").hide();
			}
			
		});
		/*Show total price of every product*/
		$(".quantity-selector").change(function(){
			var slctVal = $(this).val();
			var price = $(this).closest(".product-row").find(".submit-btn").data("price");
			var totalPrice = 0;
			if(slctVal == "Custom")
			{
				$(this).closest(".product-row").find(".custom-quantity").on('keyup', function(){
					totalPrice= $(this).val()*price;
					$(this).closest(".product-row").find(".product-price").val(totalPrice);
				});
			}
			else if(slctVal == "Select quantity")
			{
				totalPrice = 0;
			}
			else
			{
				totalPrice = slctVal*price;
			}
			$(this).closest(".product-row").find(".product-price").val(totalPrice);
			
		});
		/*Ajax base add to cart*/
		$(".submit-btn").click(function(e){
			e.preventDefault();
			var dataProduct = $(this).data("product");
			var dataSelect = $(this).data("select");
			var dataCustome = $(this).data("custome");

			var productId = $("#"+dataProduct).val();
			var selectVal = $("#"+dataSelect).val();
			var customeVal = $("#"+dataCustome).val();

			var productName = $(this).data("name");
			var productPrice = $(this).data("price");

			if(selectVal!="Custom" || customeVal >= 25)
			{
				if(customeVal >= 25)
				{
					var originalQuanity = customeVal;
				}
				else
				{
					var originalQuanity = selectVal;
				}

				$.ajax({
					type: 'POST',
					url: "{{ route('add.to.cart') }}",
					data: {product_id:productId, original_quantity:originalQuanity, product_name:productName, product_price:productPrice, "_token": "{{ csrf_token() }}" },
					success:function(response){
						ShowToCart();
						$("#message").html(response.msg);
						$("#total-item").html(response.total_items);
						$("#total-price").html(response.total_price);
						setTimeout(function(){
							$("#message").html("");
					}, 5000);
					}
				});
			}
			else
			{
				Swal.fire(
						  'Error!',
						  'Minimum 25 quantity required.',
						);
			}
		});
		/*Ajax base show to cart*/
		function ShowToCart()
		{
			$.ajax({
					type: 'GET',
					url: "{{ route('show.to.cart') }}",
					data: {},
					success:function(data,response){
						$("#cart-data").html(data);
						$("#message").html(response.msg);
					}
				});
		}

	});
</script>
@endsection