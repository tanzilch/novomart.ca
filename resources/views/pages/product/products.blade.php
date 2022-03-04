@extends('layouts.main')

@section('title', 'Products')

@section('content')
<div class="px-4 px-lg-0">
	<div class="text-center mt-2 d-lg-block">
		<p class="h1 mb-0 cstm-fontSize" style="font-size: 80px">Place Your Order</p>
	</div>
	<!-- For demo purpose -->
	 <!-- PAGE-HEADER -->
    <div class="col-md-12 page-header">
        <h1 class="page-title">Fill Out the Form</h1>
      
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
							<thead>
								<tr>
									<th scope="col" class="border-0 bg-light">
										<div class="p-2 px-3 text-uppercase">Product</div>
									</th>
									<th scope="col" class="border-0 bg-light">
										<div class="py-2 text-uppercase">Price</div>
									</th>
									<th scope="col" class="border-0 bg-light text-center" style="width: 30%;">
										<div class="py-2 text-uppercase">Quantity</div>
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($products as $product)
								@foreach($product->variants as $variant)
								<tr>
									<th scope="row" class="border-0">
										<div class="p-2">
											<img src="{{$product->images[0]->src}}" alt="" width="70" class="img-fluid rounded shadow-sm">
											<div class="ml-3 d-inline-block align-middle">
												<h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$product->title}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: {{$variant->title}}</span>
											</div>
										</div>
									</th>
									<td class="align-middle"><strong>{{$variant->price}}</strong></td>
									<td class="align-middle">
										<form action="" method="post" class="d-flex">
											@csrf
											<div>
											</div>
										<div class="w-50 mr-2">	
											<input type="hidden" id="productId-{{$variant->id}}" value="{{$variant->id}}">
											<select class="form-control mb-1 quantity-selector" id="qnty-slct-{{$variant->id}}">
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
											<div class="custom-value">
												<input type="number" id="qnty-cstm-{{$variant->id}}" class="form-control custom-quantity" min="25">
												<p class="text-nowrap mini-value" type="hidden">Minimum Value is 25</p>
											</div>
										</div>
										<div class="w-50 h-100 d-flex justify-content-center">
											<button type="submit" data-name="{{$product->title.'---'.$variant->title}}" data-price="{{$variant->price}}" data-select="qnty-slct-{{$variant->id}}" data-custome="qnty-cstm-{{$variant->id}}" data-product="productId-{{$variant->id}}" class="text-white btn btn-success submit-btn">Add to Cart <i class="fas fa-arrow-right"></i></button>
										</div>
										</form>
									</td>
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
               @php
               		$cartProduct = Gloudemans\Shoppingcart\Facades\Cart::content();
               @endphp
               @foreach($cartProduct as $product)
               <div class="align-items-center p-2 bg-white mt-4 px-3 ">
	               	<div class="d-flex flex-row justify-content-between">
			            <div class="mr-2"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="50"></div>
			            @php
			            	$name = explode("---", $product->name);
			            @endphp
			            <div class="d-flex flex-column align-items-start product-details"><span class="font-weight-bold pr-3">{{$name[0]}}</span>
			                <div class="d-flex flex-row product-desc">
			                    <div class="size mr-1"><span class="text-black-50 font-weight-bold">Size:</span></div>
			                    <div class="color"><span class="text-black-50">{{$name[1]}}</span></div>
			                </div>
			            </div>
			            <!-- <div class="d-flex flex-row align-items-center qty"><i class="fa fa-minus text-danger"></i>
			                <h5 class="text-grey mt-1 mr-1 ml-1">2</h5><i class="fa fa-plus text-success"></i>
			            </div> -->
			        </div>
			        <div class="mt-2 d-flex justify-content-between">
			        	<div class="w-25"></div>
			            <h5 class="text-grey">${{$product->price}}</h5>
			            <div class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></div>
			        </div>
		        </div>
		        @endforeach

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('customJs')
<script type="text/javascript">
	$(".custom-value").hide();
	$(".mini-value").hide();
	$(document).ready(function(){
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
						$("#message").html(response.msg);
						$("#total-item").html(response.total_items);
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
	});
</script>
@endsection